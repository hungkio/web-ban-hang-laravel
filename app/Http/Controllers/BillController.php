<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BillRequest;
use App\Repositories\BillRepository;

class BillController extends Controller
{
    protected $billReporsitory;
    public function __construct(BillRepository $billReporsitory)
    {
        $this->billReporsitory = $billReporsitory;
    }
    public function create(Request $request)
    {
        $products = $request->all();
        return view('bill.create', compact('products'));
    }
    public function store(BillRequest $request)
    {
        dd($request->all());
    }
}
