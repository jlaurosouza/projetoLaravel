<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
        public function index() {
        
        $produtos = \App\Produtos::get();
        
        return view('produtos.lista', ['produtos' => $produtos]);
    }

    public function create(Request $request) {

        if ($_POST) {

            $produto = new \App\Produtos();

            $produto->descricao = $_POST['descricao'];
            $produto->categoria = $_POST['categoria'];
            $produto->valor = $_POST['valor'];
           
            $produto->save();

            return \Redirect::to('produtos/lista?msg=create');
        }
        return view('produtos._form', ['page' => 'create']);
    }
    
    public function update($id, Request $request) {
        
        $produto = \App\Produtos::findOrFail($id);

        if ($_POST) {          

           $produto->descricao = $_POST['descricao'];
            $produto->categoria = $_POST['categoria'];
            $produto->valor = $_POST['valor'];
           
            $produto->save();

           return \Redirect::to('produtos/lista?msg=update');
        }
        return view('produtos._form', ['produto' => $produto, 'page' => 'update']);
    }
    
    public function delete($id) {
        
        $produto = \App\Produtos::findOrFail($id);

        $produto->delete();

        return \Redirect::to('produtos/lista?msg=delete');
    }
}
