<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function datapenjualan(){
        $p = penjualan::all();
        return view("datapenjualan");
    }
    public function tambah(){
        return view('tambah');
    }
    public function tambahk(Request $request){
        $p = new penjualan();
        $p->create($request->all());
        return redirect('datapenjualan');
    }
}
