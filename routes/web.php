<?php

use Illuminate\Support\Facades\Route;

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

//retornar string sin vista.
Route::get('/ejemploString', function () {
    return "Hola Mundo";
});

//Ejemplo retornar vista sin controller
Route::get('/', function () {
    return view('welcome');
});

//retornar string desde conrtollador
//Route::get('ejemplo',"App\Http\controllers\ejemploController@show"); //old version


 
 
//Configurar  rutas
 use App\Http\Controllers\ejemploController;

 Route::get('/ejemplo', [ejemploController::class, 'index']);
 Route::get('/leer', [ejemploController::class, 'leer']);
 Route::get('/leer2/{id}', [ejemploController::class, 'leer2']);

// or
//Route::get('/ejemplo', 'App\Http\Controllers\ejemploController@index');




Route::get("ejemplo2",function(){
    return view("/ejemplo2/{id}",[ejemploController::class,"actionEjemplo"]);
});

 




/*
//Configurar  rutas
 use App\Http\Controllers\ejemploController;

 Route::get('/ejemplo', [ejemploController::class, 'index']);
 Route::get('/leer', [ejemploController::class, 'leer']);
 Route::get('/leer2/{id}', [ejemploController::class, 'leer2']);

// or
//Route::get('/ejemplo', 'App\Http\Controllers\ejemploController@index');




Route::get("ejemplo2",function(){
    return view("/ejemplo2/{id}",[ejemploController::class,"actionEjemplo"]);
});


/*******************************************************************************************/
 
/*
 * 
 * Proceso de Creacion Proyecto laravel. INSTALAR LARAGON O COMPOSER EN PRIMER PASO:
 * 
*1.)  instalar el proyecto con : composer create-project laravel/laravel nombre_del_proyecto
*2.) configurar servidor mysql: en archivo .env
*3.) configurar rutas en archivo routes/web.php esto se debe hacer con la clase Route::get o con la que se necesite segun el metodo 
*Http a utilizar
4.) crear cada ruta por ejemplo Route::get("rutaweb",[nombreController@FunctionAction]);
5.) crear el controller con comando : php artisan make:controller nombreController
6.) crear el modelo con comando : php artisan make:model NombreTablaMysqlAUtilizar
7.) Dentro del controllador utilizar o imoportar la libreria del modelo a utilizar poe ejemplo 
use App\Models\NombreDelModeloQueUsaremos;
y dentro de las funciones haremos lo siguiente:

public function FunctionAction(){
    //aqui utilizamos el modelo

    $datosDelModelo  = NombreDelModelo::all();
    //o $datosDelModelo = NombreDelModelo :: where ( "CampoAFiltrar","Condicion por ejemplo simbolo mayor o menor, o LIKE en Mayuscula","Valor a condicionar");
    //o $datosDelModelo = NombreDelModelo :: where ( "CampoAFiltrar","LIKE","%QUI EL VALOR QUE BUSCAMOS%");
    //o $datosDelModelo = NombreDelModelo :: where ( "CampoAFiltrar",">","0");    
    
    return view("vista",compact("datosDelModelo"));

}


8.) luego que creamos la vista , haremos lo siguiente para recorrer el arreglo de datos:
las vists se crean en recursos\views

@foreach($test as $t)

{{$t->tarea}}<br>

@endforeach


 




Luego de clonar proyecto de git:

Run composer install in the project root. It is a good idea to run composer update after that.


To generate the key you can run the Laravel Artisan key generate command.
php artisan key:generate


For faster results you can use
composer update --verbose --prefer-dist

If composer install / composer update isn't working for you, try:
composer install --ignore-platform-reqs
composer update --ignore-platform-reqs

After this you should be able to run "php artisan serve".



 

When you are cloning a Laravel project from GitHub, you have to :

Run composer install on your cmd or terminal
Copy .env.example file to .env on the root folder
Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration
Run php artisan key:generate
Run php artisan migrate
Run php artisan serve
Go to http://localhost:8000/
and also run

php artisan optimize





https://postsrc.com/code-snippets/how-to-solve-larave-no-application-encryption-key-has-been-specified




PARRA MIGRAR DATOS O TABLAS A UNA BASE DE DATOS:
php artisan migrate 

CREAR TABLAS DE MIGRACION EN PROYECTO LARAVEL. 
php artisan make:migration create_nombredetabla_table


LISTAR LAS RUTAS:
php artisan route:list



*/

?>




