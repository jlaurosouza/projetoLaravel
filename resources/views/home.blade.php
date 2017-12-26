@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    {{ Auth::user()->name }}, Você esta Logado
                </div>
                <div class="navbar text-center">
                    <img src="img/php-laravel-mysql-sample.png" class="img-thumbnail" style="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

