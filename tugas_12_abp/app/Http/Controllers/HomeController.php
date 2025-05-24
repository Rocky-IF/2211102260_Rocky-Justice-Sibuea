<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        // Optional: Manual auth check (though route middleware is better)
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('home', [
            'user' => Auth::user()
        ]);
    }
}
