<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{

    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        echo "<h4>Lista de Produtos</h4>";
        echo "<ul>";
        echo "<li>Macarrao</li>";
        echo "<li>Leite</li>";
        echo "<li>Feijao</li>";
        echo "<li>Carne Bovina</li>";
        echo "<li>Arroz</li>";
        echo "</ul>";
    }
}
