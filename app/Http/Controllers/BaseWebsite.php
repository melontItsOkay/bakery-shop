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
        $review = Base::rightJoin('review', 'product.id', '=', 'review.product_id')
                        ->rightJoin('users', 'review.user_id', '=', 'users.id')
                        ->where('slug', $slug)
                        ->get();
        $data = [
            'viewproduct' => $cekSlug,
            'review' => $review
        ];
        return ($cekSlug === null) ? abort(404) : view('productview', $data);
       
    }

    public function aboutus()
    {
        return view('about');
    }
}
