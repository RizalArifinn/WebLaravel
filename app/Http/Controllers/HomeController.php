<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
    	$tampil = Blog::paginate(5);
      return view('blog/home', compact('tampil'));
    }
}
