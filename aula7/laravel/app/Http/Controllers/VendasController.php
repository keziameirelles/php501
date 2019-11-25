<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index()
    {
        $controller = 'Vendas Controller';

        return view('vendas',['controller' => $controller]);
    }
}
