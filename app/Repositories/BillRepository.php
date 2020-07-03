<?php

namespace App\Repositories;

use App\Product;
use App\Bill;

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
}

