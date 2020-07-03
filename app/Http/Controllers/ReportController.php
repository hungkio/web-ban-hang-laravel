<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Repositories\GuestRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SaleRepository;
use App\Repositories\BillRepository;

class ReportController extends Controller
{
    protected $billReporsitory;
    protected $productReporsitory;
    protected $guestRepository;
    public function __construct(
        GuestRepository $guestRepository,
        BillRepository $billReporsitory,
        ProductRepository $productReporsitory,
        SaleRepository $saleRepository
    )
    {
        $this->guestRepository = $guestRepository;
        $this->saleRepository = $saleRepository;
        $this->productReporsitory = $productReporsitory;
        $this->billReporsitory = $billReporsitory;
    }
    public function index()
    {
        $out_prices = 0;
        $count = 0;
        foreach ($this->productReporsitory->getAll() as $row) {
            $current_count = $row->product_counts;
            $count += $current_count;
            $out_prices +=  $current_count * $row->product_in_prices;
        }
        $totalGuests = $this->guestRepository->getAll()->count();
        return view('admin.bao-cao', compact('totalGuests', 'count', 'out_prices'));
    }
    public function getData(Request $request)
    {
        $in_prices = 0;
        $count_sold = 0;
        $sales = $this->saleRepository->getAll()->count();
        foreach ($this->billReporsitory->getAll() as $row) {
            $in_prices += $row->total_bill;
            $row = ltrim($row->products_list, '[',);
            $row = rtrim($row, ']',);
            foreach (explode(',', $row) as $value) {
                $count_sold++;
            }
        }
        $guests = $this->guestRepository->getGuestConditon($request->only('start_date', 'end_date'))->count();
        return response()->json([
            'guests' => $guests,
            'count_sold' => $count_sold,
            'in_prices' => $in_prices,
            'sales' => $sales
        ]);
    }
}
