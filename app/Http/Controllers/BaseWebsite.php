<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Base;

class BaseWebsite extends Controller
{
    public function index()
    {
        $loadproduct = Base::where('status', 1)
                        ->orderBy('total_sold')
                        ->take(4)
                        ->get();

        $data = [
            'favorite' => $loadproduct
        ];
        return view('index', $data);
    }

    public function product($slug = false)
    {
        $cekSlug = Base::where('slug', $slug)->first();
        $data = [
            'viewproduct' => $cekSlug
        ];
        return ($cekSlug === null) ? abort(404) : view('productview', $data);
       
    }
}
