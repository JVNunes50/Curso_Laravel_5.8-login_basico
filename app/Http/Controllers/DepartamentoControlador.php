<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    
    public function index(){
        echo "<h4>Lista de Categorias</h4>";
        echo "<ul>";
        echo "<li>Alimentos</li>";
        echo "<li>Eletronicos</li>";
        echo "<li>Moveis</li>";
        echo "<li>Informatica</li>";
        echo "</ul>";
        echo "<hr>";

        if (Auth::check()) {
            $user = Auth::user();
            echo "<h4>Voce esta logado!</h4>";
            echo "<p>" . $user->name . "</p>";
            echo "<p>" . $user->email . "</p>";
            echo "<p>" . $user->id . "</p>";
        }else {
            echo "<h4>Voce nao esta logado!</h4>";
        }
    }
}
