<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return redirect()->route('home');
    }
}
