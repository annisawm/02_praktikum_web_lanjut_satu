<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function index ()
    {
        echo "Selamat Datang";
    }
    Public function about ()
    {
        echo "NIM  : 1941720146; Nama : Annisa Wahyu Maulida";
    }
    Public function articles ()
    {
        echo "Halaman artikel dengan ID: ".$id;
    }
}
