<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function desc($id)
    {
        $tampil = Blog::find($id);
        return view('blog/tampil', ['tampil' => $tampil]);
    }

    public function create()
    {
        return view('/blog/create');
    }

    public function buat(Request $request)
    {
        $query = Blog::create([
          'judul' => $request->judul,
          'deskripsi' => $request->desk
        ]);

        if ($query) {
          return redirect('/blog');
        }
    }

    public function update($id)
    {
        $tampil = Blog::find($id);
        return view('blog/update', ['tampil' => $tampil]);
    }

    public function edit(Request $request, $id)
    {
      $query = Blog::find($id)->update([
        'judul' => $request->judul,
        'deskripsi' => $request->desk
      ]);

      if ($query) {
          return redirect('/blog/'.$id);
      }
    }

    public function delete($id)
    {
        $query = Blog::find($id)->delete();
        if ($query) {
          return redirect('/blog');
        }
    }
}
