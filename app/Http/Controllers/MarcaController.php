<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function create() {  
       
        return view('novaMarca');

    }
    
        public function index() {
            $marcas = Marca::all();
            return view('listarMarcas')->with('marcas', $marcas);
         }
        public function store(Request $request) { 
            $marca = new Marca;
            $marca->nome_marca = $request->nome_marca;
            $marca->save();
    
            //return redirect()->route('marcas.listar');
        }
    
    
        public function edit($id) {
            return view('editarMarca');
        }
    
    
        public function update(Request $request, $id) { 
            $marca = Marca::find($request->$id);
            $marca->nome_marca = $request->nome_marca;
            $marca->save();
         }
    }

