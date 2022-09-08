<?php

namespace App\Http\Controllers;

//USAR PARA INNER JOIN
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

//IMPORTAR MODELO
Use App\Models\test;
Use App\Models\empleado;
//use App\Models\ejemplo;

class ejemploController extends Controller
{
    //

    

    public function index(){
      return  view("ejemplo");
    }

    public function leer(){
        $hi = "hola amigos bienvenidos";
        return view("leer",compact("hi"));
    }


    function leer2($id=""){ 
        


        //INNER JOIN 
        $test = DB::table('tareas')
            ->join('empleado', 'tareas.id_empleado', '=', 'empleado.id')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('tareas.*', 'empleado.nombre')
            ->get();


        // $nuevoitem = test();
        // $nuevoitem->nombre("Hacer pruebas de migracion");
        // $nuevoitem->save();

        //$test = test::all();
        
        //$test = test::where("tarea","LIKE","%Proc%")->get();
        //$test = test::where("id",">","3")->get();
        

        return view("leer2",compact("id","test"));
    }



}


 

?>