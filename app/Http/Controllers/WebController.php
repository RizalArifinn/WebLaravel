<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function desc($id)
    {
        $tampil = DB::table('barang')->where('id', $id)->get();
        return view('barang/tampil', ['tampil' => $tampil]);
    }

    public function create()
    {
        return view('/barang/create');
    }

    public function buat(Request $request)
    {
        $query = DB::table('barang')->insert([
          'nama' => $request->nama,
          'deskripsi' => $request->desk
        ]);

        if ($query) {
          return redirect('/barang');
        }
    }

    public function update($id)
    {
        $tampil = DB::table('barang')->where('id', $id)->get();
        return view('barang/update', ['tampil' => $tampil]);
    }

    public function edit(Request $request, $id)
    {
      $query = DB::table('barang')->where('id', $id)->update([
        'nama' => $request->nama,
        'deskripsi' => $request->desk
      ]);

      if ($query) {
          return redirect('/barang/'.$id);
      }
    }

    public function delete($id)
    {
        $query = DB::table('barang')->where('id', $id)->delete();
        if ($query) {
          return redirect('/barang');
        }
    }
}
