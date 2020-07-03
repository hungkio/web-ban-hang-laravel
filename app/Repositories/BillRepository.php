<?php

namespace App\Repositories;

use App\Product;
use Carbon\Carbon;
use App\Bill;
use App\Guest;

class BillRepository
{
    public function find($id)
    {
        return Bill::findOrFail($id);
    }

    public function getAll()
    {
        return Bill::all();
    }
    public function create($data)
    {
        return Bill::create($data);
    }
    public function update($id, $data)
    {
        return Bill::whereId($id)->update($data);
    }
    public function delete($id)
    {
        return Bill::findOrFail($id)->delete();
    }
    public function findArray($ids)
    {
        return Product::find($ids);
    }
    public function getBillConditon($request)
    {
        return Bill::where('created_at', '>=', Carbon::parse($request['start_date']))
        ->where('created_at', '<=', Carbon::parse($request['end_date']))
        ->get();
    }
}

