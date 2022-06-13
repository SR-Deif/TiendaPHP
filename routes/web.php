<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//primera ruta en laravel 
Route ::get('Hola, Bienvenido', function(){ 
    echo "<center><h1> Hola, Bienvenido</h1></center>";
});

Route:: get('Arreglos', function(){ 
     echo "<h3>";
    $estudiantes =[ "AN" => "Ana", "JU" => "Juna", "MA" => "Manzana"];
   
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    echo "</h3>";

    echo "<hr />";

    //areglar posicion
    $estudiantes["CR"]= "Cristian";
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";

    //retirar elementos de un areglo
    
    echo "<hr />";
    unset($estudiantes["JU"]);
    
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route:: get( 'paises', function(){
    $Paises = [
        "Colombia" =>[
            "Capital" => "Bogota",
            "Moneda" =>"Pesos",
            "Poblacion"=>51.6,
             "Ciudades" => ["Bogota", "Medellin","Cali"],
        ],
        "Peru" => [
            "Capital" => "lima",
            "Moneda" =>"Sol",
            "Poblacion"=>32.97,
             "Ciudades" => ["Cusco", "Piura","Bolivia"],
        ],
        "Paraguay" =>[
             "Capital" => "Asuncion",
            "Moneda" =>"Guarani",
            "Poblacion"=>7.1,
            "Ciudades" => ["Ciudad del Este", "Surinam","Asucion"]
        ],  
            
    ];

    /*echo "<pre>";
    var_dump($Paises);
    echo "</pre>";*/

    /*foreach($Paises as $pais => $infopais){
        
        echo "<h1>$pais</h1>";
        /*
        echo "Capital: ".$infopais["Capital"];
        echo "<br>";
        echo "Moneda: ".$infopais["Moneda"];
        echo "<br>";
        echo "Poblacion: ".$infopais["Poblacion"];
        echo "<hr />";

        foreach($infopais as $clave => $valor){
            echo "$clave : $valor <br/>";

        }
        echo "<hr />";

    }*/
    
    //Mostrar las vistas paises
    return view('Paises')
    ->with("Paises" ,$Paises);
});

Route::get('prueba', function(){
    return view('productos.new');
});

//Rutas REST
Route::resource('productos', ProductoController::class);