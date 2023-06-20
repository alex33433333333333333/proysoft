<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class RutasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }
 


    public function index()
    {
        $usuario=Usuario::select("usuario.*")->get()->toArray();
        return response()->json('ok', $usuario);
    }

}
