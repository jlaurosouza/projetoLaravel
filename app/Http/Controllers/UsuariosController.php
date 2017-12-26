<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $usuarios = \App\User::get();

        return view('usuarios.lista', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {

        if ($_POST) {

            $usuario = new \Illuminate\Foundation\Auth\User();

            $usuario->name = $_POST['name'];
            $usuario->email = $_POST['email'];
            $usuario->password = $_POST['password'];

            $usuario->save();

            return \Redirect::to('usuarios/lista?msg=create');
        }
        return view('usuarios._form', ['page' => 'create']);
    }

    public function update($id, Request $request) {

        $usuario = \App\User::findOrFail($id);

        if ($_POST) {

            $usuario->name = $_POST['name'];
            $usuario->email = $_POST['email'];
            $usuario->password = $_POST['password'];

            $usuario->save();

            return \Redirect::to('usuarios/lista?msg=update');
        }
        return view('usuarios._form', ['usuario' => $usuario, 'page' => 'update']);
    }

    public function delete($id) {
        
        $usuario = \App\User::findOrFail($id);

        $usuario->delete();

        return \Redirect::to('usuarios/lista?msg=delete');
    }
    
}