<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutOrder extends Controller
{

    public function index(Request $request, Checkout $checkout)
    {
        $random = Str::random(40);
        $data = [
            'user_id' => auth()->user()->id,
            'name_product' => $request->product,
            'total_paid' => 0,
            'payment_method' => '',
            'status_payment' => '0',
            'address' => '',
            'postcode' => '',
            'mobile' => ''
        ];
        $request->session()->increment('total', $increase = $request->grandtotal);
        $request->session()->increment('quantity', $increase = $request->qtys);

        $checkout->create($data);
        return redirect(route('checkout.checkout'));
    }

    public function checkout(Checkout $checkout)
    {

        return view('checkout.checkout', [
            'datacheckout' => $checkout->get()
        ]);
    }

    public function delete(Request $request, Checkout $checkout)
    {
        $request->session()->decrement('total', $decrementBy = $request->ses_tt);
        $request->session()->decrement('quantity', $decrementBy = $request->ses_qty);

        Checkout::where('id', $request->pdct_id)
        ->delete();

        return back();
    }

    
}
