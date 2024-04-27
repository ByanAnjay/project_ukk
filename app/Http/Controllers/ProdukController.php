<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function tambah(){
        $p = produk::all();
        return view("tambah");
    }
    public function tbarang(){
        return view('tambahbarang');
    }
    public function tambahk(Request $request){
        $p = new produk();
        $p->create($request->all());
        return redirect('tambah');
    }
}
