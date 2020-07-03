<?php

namespace App\Repositories;

use App\Product;


class ProductRepository
{
    public function find($id)
    {
        return Product::findOrFail($id);
    }
    public function getAll()
    {
        return Product::all();
    }
    public function create($data)
    {
        return Product::create($data);
    }
    public function update($id, $data)
    {
        return Product::whereId($id)->update($data);
    }
    public function delete($id)
    {
        return Product::findOrFail($id)->delete();
    }
    public function getProductCategory($category)
    {
        return Product::where('products_type', $category)->get();
    }
}

