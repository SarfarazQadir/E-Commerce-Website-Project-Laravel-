<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = auth()->user()->is_admin;
        // dd($role);
        if($role==1){
            return view("admin.dashbaord");
        }
        else{
            $prod = Product::all();
            return view("index" , compact("prod"));
        }
        // return view('home');
    }
}
