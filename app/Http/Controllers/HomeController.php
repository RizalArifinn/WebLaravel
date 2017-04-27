<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
    	$tampil = DB::table('barang')->paginate(5);
      // $desk = limit($tampil -> deskripsi);
      // dd($desk);
      return view('barang/home', compact('tampil'));
    }

    // public function word_limiter($string, $word_limit)
    // {
    //   $words = explode(' ',$string);
    //   return implode(' ',array_splice($words,0,$word_limit));
    // }
    //
    // public function limit($deskrip)
    // {
    //   return word_limiter($deskrip, 100);
    // }
}
