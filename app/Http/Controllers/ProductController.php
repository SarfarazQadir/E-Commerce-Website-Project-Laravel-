<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.addpro");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product =  Product::all();
        return view("admin.showpro" , compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagename = time() . "." .  $request->image->extension();
        $request->image->move(public_path("product/"),$imagename);
        $product = new Product();
        $product->name = $request->prodname;
        $product->des = $request->proddes;
        $product->price = $request->prodprice;
        $product->qty = $request->prodqty;
        $product->image = $imagename;
        $product->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if($product){
            if($product->status){
                $product->status = 0;
            }
            else{
                $product->status = 1;
            }
            $product->save();
        }
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view("admin.update" ,["xyz"=>$product] );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if(isset($request->image))
        {
            $imagename = time() . "." .  $request->image->extension();
            $request->image->move(public_path("product/"),$imagename);
            $product->image = $imagename;
        }
    
        $product->name = $request->prodname;
        $product->des = $request->proddes;
        $product->price = $request->prodprice;
        $product->qty = $request->prodqty;
        $product->save();
        return redirect()->route("show");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }

    public function cart(Request $request, $id){
        $uid = Auth::user()->id;
        $cart = new Cart();
        $cart->user_id = $uid;
        $cart->prod_id = $id;
        $cart->qty = $request->qty;
        $cart->save();
        return back();
    }

    public function viewcart(){
        $prod = Cart::all();
        $products=[];
    
        foreach($prod as $cartitem){
            $id = $cartitem->prod_id;
            $product = Product::find($id);
            $products[]= $product;
        }
        return view("viewcart",compact("products"));
    
        }
        public function showuser()
        {
            $user =  User::where('is_admin', 0)->get();
            return view("admin.user" , compact("user"));
        }
        public function userdelete(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
        
}
 