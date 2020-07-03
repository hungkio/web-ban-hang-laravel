<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BillRequest;
use App\Repositories\BillRepository;
use App\Repositories\GuestRepository;

class BillController extends Controller
{
    protected $billReporsitory;
    protected $guestRepository;
    public function __construct(
        BillRepository $billReporsitory,
        GuestRepository $guestRepository)
    {
        $this->billReporsitory = $billReporsitory;
        $this->guestRepository = $guestRepository;
    }
    public function index()
    {
        $bill = $this->billReporsitory->getAll();
        return view('bill.index', compact('bill'));
    }
    public function create(Request $request)
    {
        $guests = $this->guestRepository->getAll();
        $products = $this->billReporsitory->findArray($request->ids);
        return view('bill.create', compact('products', 'guests'));
    }
    public function store(BillRequest $request)
    {
        try {
            $ids = [];
            foreach ($request->count as $key => $value) {
                $ids[] = $key;
            }
            $data = [
                'products_list' => json_encode($ids),
                'guest_id' => $request->guest_id,
                'total_bill' => $request->total_bill
            ];
            $this->billReporsitory->create($data);
            return response()->json(['success' => 'Thanh toán thành công!']);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
