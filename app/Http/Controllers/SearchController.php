<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(Request $request)
    {
        $catagories = Category::all();
        if($request->filled('search')){
            $products = Product::search($request->search)->where('catagory_id',$request->cat)->get();
        } else{
            $products = Product::all();
        }
        return view('backend.search', compact('products', 'catagories'));
        
    }
}
