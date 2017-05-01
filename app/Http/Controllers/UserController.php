<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Blog;
use App\Models\Kategori;

class UserController extends Controller
{
  public function register()
  {
    return view('/user/register');
  }

  public function daftar(Request $request)
  {
    $this->validate($request, [
      'nama' => 'required|min:2',
      'email' => 'required|min:2|unique:users,email',
      'password' => 'required|min:8',
      'alamat' => 'required|min:2'
    ]);

    $query = User::create([
      'nama' => $request->nama,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'alamat' => $request->alamat,
      'status' => 0
    ]);

    if ($query) {
      return redirect('/user/login');
    }
  }

  public function login()
  {
    return view('/user/login');
  }

  public function masuk(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    $query = DB::table('users')->where([
      'email' => $request->email
      ])->get();

    if (count($query) > 0) {
      foreach ($query as $row) {
        if (Hash::check($request->password, $row->password)) {
          session([
            'id' => $row->id,
            'nama' => $row->nama,
            'status' => $row->status
          ]);
          return redirect('/blog');
        } else {
          return redirect('/user/login')->with([
            'email' => $request->email
          ]);
        }
      }
    } else {
      return redirect('/user/login')->with([
        'email' => $request->email
      ]);
    }
  }

  public function logout()
  {
    session()->flush();

    return redirect('/blog');
  }

  public function profil()
  {
    $profil = User::find(session('id'));

    return view('/user/profil', ['profil' => $profil]);
  }

  public function update($id)
  {
    $edit = User::find($id);
    return view('/user/update', ['edit' => $edit]);
  }

  public function edit(Request $request, $id)
  {

    if ($request->email == $request->emailLama) {
      $upem = 'required|email';
    } else {
      $upem = 'required|email|unique:users,email';
    }

    if ($request->passwordBaru == '') {
      $this->validate($request, [
        'nama' => 'required',
        'email' => $upem,
        'alamat' => 'required'
      ]);
      User::find($id)->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat
      ]);
    } else {
      $this->validate($request, [
        'nama' => 'required',
        'email' => $upem,
        'passwordBaru' => 'min:8',
        'konpassword' => 'min:8|same:passwordBaru',
        'alamat' => 'required'
      ]);
      User::find($id)->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->passwordBaru),
        'alamat' => $request->alamat
      ]);
    }

    return redirect('/user/profil');
  }

  public function blogsaya()
  {
    $user = Blog::all();
    $author = User::all();

    return view('/user/blog', ['user' => $user, 'author' => $author]);
  }

  public function manage()
  {
    $tampil = User::all();
    return view('/user/manage', ['tampil' => $tampil]);
  }

  public function edman($id)
  {
    $edit = User::find($id);
    return view('/user/mandit', ['edit' => $edit]);
  }

  public function resultmanage(Request $request, $id)
  {
    if ($request->email == $request->emailLama) {
      $upem = 'required|email';
    } else {
      $upem = 'required|email|unique:users,email';
    }

    $this->validate($request, [
      'nama' => 'required',
      'email' => $upem,
      'alamat' => 'required',
    ]);

      User::find($id)->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'status' => $request->status
      ]);

      if ($request->status == 0) {
        return redirect('/user/logout');
      } else {
        return redirect('/admin/manage');
      }
  }

  public function delete($id)
  {
    $delete = User::find($id);

    if (session('status') == 1) {
      return view('/user/kondel', ['delete' => $delete]);
    } else {
      abort(403, 'Anda Bukan Admin');
    }
  }

  public function condelete(Request $request, $id)
  {
    if ($request->submit == 'Ya') {
      User::destroy($id);
      return redirect('/admin/manage');
    } else {
      return redirect('/admin/manage');
    }
  }

  public function managekat()
  {
    $kategori = Kategori::all();
    return view('/user/managekat', ['kategori' => $kategori]);
  }

  public function managekatcreate()
  {
    return view('/user/createkat');
  }

  public function managekatbuat(Request $request)
  {
    $this->validate($request, [
      'kategori' => 'required|min:2'
    ]);

    $query = Kategori::create([
      'nama_kategori' => $request->kategori
    ]);

    if ($query) {
      return redirect('/admin/managekat');
    }
  }

  public function managekatdelete($id)
  {
    $delete = Kategori::find($id);

    if (session('status') == 1) {
      return view('/user/konfirdel', ['delete' => $delete]);
    } else {
      abort(403, 'Anda Bukan Admin');
    }
  }

  public function managekatkonfirdel(Request $request, $id)
  {
    if ($request->submit == 'Ya') {
      Kategori::destroy($id);
      return redirect('/admin/managekat');
    } else {
      return redirect('/admin/managekat');
    }
  }

  public function kategori($id)
  {
    $tampil = Blog::where('id_kategori', $id)->get();
    $author = User::all();
    $kategori = Kategori::all();

    return view('/user/kategori', ['tampil' => $tampil, 'author' => $author, 'kategori' => $kategori, 'id' => $id]);
  }
}
