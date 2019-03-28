<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\farmacias;
use App\medicamentos;
use Response;

class jsoncontroller extends Controller
{
    
    public function index()
    {
        $farmacias=farmacias::all();
        $medicamentos=medicamentos::all();
        return Response::json(
            array(

             'success'   => true,
             'message'   => "aprobado",
             'Listafarmacias'   => $farmacias,
             'Listamedicamentos'   => $medicamentos,   

            ),200);
        
    }    
}
