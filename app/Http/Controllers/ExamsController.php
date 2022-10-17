<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ExamsController extends Controller
{
    // public static $products = [
    //     ["id"=>"1", "name"=>"Hemograma completo","price"=>"150000", "ayuno"=>"No"],
    //     ["id"=>"2", "name"=>"Urinálisis completo", "price"=>"50000", "ayuno"=>"Si"],
    //     ["id"=>"3", "name"=>"Perfil renal", "price"=>"185000", "ayuno"=>"Si"],
    //     ["id"=>"4", "name"=>"Perfil lipídico", "price"=>"80000", "ayuno"=>"No"]
    // ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Exámenes - Laboratorio";
        $viewData["subtitle"] =  "Lista de exámenes";
        // $viewData["products"] = ProductController::$products;
        $viewData["products"] = Servicios::all();
        return view('exams.index')-> with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        // $product = ProductController::$products[$id-1];
        $product = Servicios::findOrFail($id);
        $viewData["title"] = $product["name"]." - Laboratorio";
        $viewData["subtitle"] =  $product["name"]." - Información de Examen";
        $viewData["product"] = $product;
        return view('exams.show')-> with("viewData", $viewData);
    }
}
