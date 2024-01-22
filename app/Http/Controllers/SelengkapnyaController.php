<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class SelengkapnyaController extends Controller
{
    public function showSelengkapnya($id_blog){
        $blog = blog::all();
        return view('selengkapnya', ['blog'=>$blog]);
    }

    public function selengkapnya($id_blog){
        $detailSelengkapnya = blog::skip($id_blog - 1)->take(1)->get();
        return view('selengkapnya', ['detailSelengkapnya' => $detailSelengkapnya]);
    }
}
