@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Cadastrar Novo Cliente</b>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="@if ($page == 'create'){{url('clientes/create')}}@endif">
                        {{ csrf_field() }}
                        <div class="row">
                            <section class="col col-md-8">                                
                                <label for="nome" class="control-label">Name</label>
                                <div class="">
                                    <input id="nome" type="text" class="form-control" name="nome" value="@if ($page == 'update'){{$cliente->nome}} @endif" required autofocus>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>                                
                            </section>     
                            <section class="col col-md-4 ">                                
                                <label for="cpf" class="control-label">CPF</label>
                                <div class="">
                                    <input id="cpf" type="text" class="form-control" name="cpf" value="@if ($page == 'update'){{$cliente->cpf}} @endif" required>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                            </section>
                        </div>                       
                        <div class="row">
                            <section class="col col-md-12">                                
                                <label for="endereco" class="control-label">Endereço Completo</label>
                                <div class="">
                                    <input id="endereco" type="text" class="form-control" name="endereco" value="@if ($page == 'update'){{$cliente->endereco}} @endif" required>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                            </section>
                        </div>
                        <footer class="panel-footer col-md-12">                 
                            <a href="{{ url('clientes')}}"  class="col-md-offset-10 btn btn-primary">
                                Voltar
                            </a>
                            &nbsp;
                            <button type="submit" class="btn btn-primary">
                                Confirmar
                            </button>
                        </footer>
                    </form>  
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
