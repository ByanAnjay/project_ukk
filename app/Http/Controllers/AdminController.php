<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view("login");
    }
    public function ceklogin(Request $request){
        $a = new admin;
        $a= $a->where ('username',$request->input('username'))->where('password',$request->input('password'));
        if($a->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password'),
            ]);
            return redirect('dashboard');
        }
    }
    public function register(){
        return view("register");
    }
    public function dashboard(){
        return view("dashboard");
        $a = new admin;
        return view("dashboard",['data'=>$a->all()]);
    } 
    public function tbarang(){
        $p = produk::all();
        return view("tambahbarang");
    }

    public function tambah(Request $request){
        $validated = $request->validate([
            'produk_id'=> 'required',
            'nama_produk'=>'required',
            'stok'=>'required',
            'hagra'=>'required',
        ]);
        $p = new produk();
        $p->create($request->all());
        return redirect('tambah');
    }
    public function edit($id){
        $k = produk::select('*')->where('produk_id',$id)->get();
        return view('edit',['data'=>$k->all()]);
    }
    public function ubah_barang(Request $request ,$id){
        $k = produk::where('produk_id',$id)->update([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=>$request->stok
        ]);
    }
}
