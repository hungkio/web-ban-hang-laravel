<?php

namespace App\Repositories;

use App\Sale;
use Carbon\Carbon;

class SaleRepository
{
    public function find($id)
    {
        return Sale::findOrFail($id);
    }
    public function getAll()
    {
        return Sale::all();
    }
    public function create($data)
    {
        return Sale::create($data);
    }
    public function update($id, $data)
    {
        return Sale::whereId($id)->update($data);
    }
    public function limit()
    {
        return Sale::orderBy('id', 'desc')->take(5)->get();
    }
    public function delete($id)
    {
        return Sale::findOrFail($id)->delete();
    }

    public function last()
    {
        return Sale::latest()->first();
    }

    
}

