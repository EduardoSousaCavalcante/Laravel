<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal');
    }

    public function sobrenos() {
        return view('site.sobrenos');
    }

    public function contato() {
        return view('site.contato');
    }

    public function blog() {
        return view('site.blog');
    }

    public function servicos() {
        return view('site.servicos');
    }
}
