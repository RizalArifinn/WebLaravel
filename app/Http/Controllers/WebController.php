<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\User;
use App\Models\Kategori;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function desc($id)
    {
        $tampil = Blog::find($id);
        $author = User::all();

        return view('blog/tampil', ['tampil' => $tampil, 'author' => $author]);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('/blog/create', ['kategori' => $kategori]);
    }

    public function buat(Request $request)
    {
        $this->validate($request, [
          'judul' => 'required|min:2',
          'desk' => 'required|min:2'
        ]);

        $query = Blog::create([
          'judul' => $request->judul,
          'deskripsi' => $request->desk,
          'author' => session('id'),
          'id_kategori' => $request->kategori
        ]);

        if ($query) {
          return redirect('/blog');
        }
    }

    public function update($id)
    {
        $tampil = Blog::find($id);
        $kategori = Kategori::all();
        return view('blog/update', ['tampil' => $tampil, 'kategori' => $kategori]);
    }

    public function edit(Request $request, $id)
    {
      $this->validate($request,[
        'judul' => 'required|min:2',
        'desk' => 'required|min:2'
      ]);

      $query = Blog::find($id)->update([
        'judul' => $request->judul,
        'id_kategori' => $request->kategori,
        'deskripsi' => $request->desk
      ]);

      if ($query) {
          return redirect('/user/blog/'.$id);
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
