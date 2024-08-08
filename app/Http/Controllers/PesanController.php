<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index() {
        return view('nama');
    }

    public function pesan() {
        return view('pesan');
    }

    public function detail() {
        return view('detail');
    }
}
