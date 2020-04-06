<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barangs = Barang::paginate(8);
        // dd($barangs);
        return view('home', compact('barangs'));
    }

    public function profile()
    {
        $this->middleware('auth');
        return view('profile');
    }
}
