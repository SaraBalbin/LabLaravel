<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Página Principal - Tienda en Linea";
        return view('layouts.app')->with("viewData", $viewData);
    }
}