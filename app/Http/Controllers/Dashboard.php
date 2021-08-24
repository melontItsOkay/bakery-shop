<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Dashboard extends Controller
{
    public function index()
    {
         return view('dashboard.account');
    }

    public function myorder()
    {
        return view('dashboard.myorder');
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email:dns',
            'mobile' => 'required|min:10',
            'address' => 'required|min:10',
            'postcode' => 'required|min:4',
        ]);

        $update = User::find(Auth::user()->id);

        $update->name = $validateData['name'];
        $update->email = $validateData['email'];
        $update->phone_number = $validateData['mobile'];
        $update->address = $validateData['address'];
        $update->postcode = $validateData['postcode'];

        $update->save();

        return back()->with('SuccessUpdate', 'Your informations has been updated.');
    }

    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }  

    public function adminpages()
    {
        echo 'coming soon';
    }
}
