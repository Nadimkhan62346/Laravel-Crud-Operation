<?php

namespace App\Http\Controllers;
use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function productlist(){
        $productlist = ProductList::all();
        return view('ProductList', compact(('productlist')));
    }
}
