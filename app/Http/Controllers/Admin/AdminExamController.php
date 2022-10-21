<?php

namespace App\Http\Controllers\Admin;

use App\Models\Servicios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminExamController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Página de Administración - Exámenes - Laboratorio";
        $viewData["products"] = Servicios::all();
        return view('admin.exam.index')->with("viewData", $viewData);
    }
}

