<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
        return view('home');
    }

    public function wishlist(Request $request)
    {
        // $userId= Auth::user()->id;
        $productId=$request->id;

        $wishlist = new Wishlist();
        $wishlist->product_id = $request->productId;
        $wishlist->user_id = $request->userId;
        $wishlist->save();

        // return view('detail');
    }
}
