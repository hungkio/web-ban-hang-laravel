<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const CATEGORY = [
        1 => 'Phụ kiện',
        2 => 'Điện thoại',
        3 => 'Laptop',
        4 => 'Máy tính bảng',
        5 => 'Đồng hồ'
    ];
    const CATEGORY_CODE = [
        'Phụ kiện' => 1,
        'Điện thoại' => 2,
        'Laptop' => 3,
        'Máy tính bảng' => 4,
        'Đồng hồ' => 5
    ];
    protected $table = 'products';
    protected $fillable = [
        'product_name',  'product_counts',  'products_type',  'product_in_prices',  'product_out_prices', 'image','product_des'
    ];
}
