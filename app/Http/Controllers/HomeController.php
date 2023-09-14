<?php

namespace App\Http\Controllers;
use App\Models\etalase;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home(Request $request){
        $product = DB::table('products')
        ->count();
        $etalase = DB::table('etalases')
        ->count();
        return view('home', ['title' => 'Dashboard', 'product' => $product, 'etalase' => $etalase]);
    }
}
