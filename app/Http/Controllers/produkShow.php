<?php

namespace App\Http\Controllers;

use App\Models\katalog;
use Illuminate\Http\Request;

class produkShow extends Controller
{
    public function showData(){
        $data = katalog::all();
        return view('/produk', ['data' => $data]);
    }
}
