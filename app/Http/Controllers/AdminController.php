<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function datapenjualan(){
        $p = peju::all();
        return view("datapenjualan");
    }
}
