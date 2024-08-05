<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;
class produtoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('listarProdutos')->with('produtos', $produtos);
     }


    public function create() {  
       
         return view('novoProduto');

     }


    public function store_to_produtos(Request $request) { 
        $produto = new Produto;
        $produto->nome_produto = $request->nome_produto;
        $produto->valor = $request->valor;
        $produto->data_validade = $request->data_validade;
        $produto->id_marca = $request->id_marca;
        $produto->save();

        return redirect()->route('produto.listar');
    }


    public function edit($id) {
        
    }


    public function update(Request $request, $id) { 
        $produto = Produto::find($request->id);
        $produto->nome_produto = $request->nome_produto;
        $produto->valor = $request->valor;
        $produto->data_validade = $request->data_validade;
        $produto->id_marca = $request->id_marca;
        $produto->save();

        return redirect()->route('produto.listar');
    
     }
}