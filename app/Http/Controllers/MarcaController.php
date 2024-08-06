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
            $marca = Marca::find($id);
            return view('editarMarca')->with('marca',$marca);
        }
    
    
        public function update(Request $request, $id) { 
            //return $request->all();
            $marca = Marca::findOrFail($id);
            $marca->nome_marca = $request->nome_marca;
            $marca->save();
            return redirect()->route('marca.listar');
         }
    }

