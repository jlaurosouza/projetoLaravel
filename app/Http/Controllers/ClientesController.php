<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller {

    public function index() {
        
        $clientes = \App\Clientes::get();
        
        return view('clientes.lista', ['clientes' => $clientes]);
    }

    public function create(Request $request) {

        if ($_POST) {

            $cliente = new \App\Clientes();

            $cliente->nome = $_POST['nome'];
            $cliente->cpf = $_POST['cpf'];
            $cliente->endereco = $_POST['endereco'];
           
            $cliente->save();

            return \Redirect::to('clientes/lista?msg=create');
        }
        return view('clientes._form', ['page' => 'create']);
    }
    
    public function update($id, Request $request) {
        
        $cliente = \App\Clientes::findOrFail($id);

        if ($_POST) {          

           $cliente->nome = $_POST['nome'];
           $cliente->cpf = $_POST['cpf'];
           $cliente->endereco = $_POST['endereco'];
           
            $cliente->save();

           return \Redirect::to('clientes/lista?msg=update');
        }
        return view('clientes._form', ['cliente' => $cliente, 'page' => 'update']);
    }
    
    public function delete($id) {
        
        $cliente = \App\Clientes::findOrFail($id);

        $cliente->delete();

        return \Redirect::to('clientes/lista?msg=delete');
    }

}
