<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Base;
use App\Models\Category;

class Shop extends Controller
{
    public function index(Request $request)
    {
        $allproduct = Base::paginate(10);
        $category = Category::get();

        if($request->ajax())
        {
            $view = view('data', compact('allproduct'))->render();
            return response()->json(['html' => $view]);
        }
        // $data = [
        //      'category' => Category::get(),
        //      'allproduct' => compact('allproduct')
        // ];
        return view('shop.index', compact('allproduct', 'category'));
    }

}
