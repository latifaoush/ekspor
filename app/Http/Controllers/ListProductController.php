<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function listproduct()
    {
        $data = [
            ['id' => 1, 'produk' => 'kelapa utuh'],
            ['id' => 2, 'produk' => 'sabut kelapa'],
            ['id' => 3, 'produk' => 'minyak kelapa'],
            
        ];

        return view('list_product', compact('data'));
    }
}
