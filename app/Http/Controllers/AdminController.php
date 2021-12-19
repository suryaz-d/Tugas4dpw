<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    function showAdmin(){
        return view('layout.admin');
    }

    function showProduk(){
        return view('produk');
    }

    function showKategori(){
        return view('kategori');
    }

    function showBeranda(){
        return view('beranda');
    }

}
