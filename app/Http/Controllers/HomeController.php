<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Ext_Kategori;

class HomeController extends Controller
{
    public function index()
    {
    	$tampil = Blog::paginate(6);
      $author = User::all();
      $kategori = Kategori::all();

      return view('blog/home', compact('tampil'), ['author' => $author, 'kategori' => $kategori]);
    }
}
