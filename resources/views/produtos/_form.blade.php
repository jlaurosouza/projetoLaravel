@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Cadastrar Novo Produto</b>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="row">
                            <section class="col col-md-8">                                
                                <label for="descricao" class="control-label">Descrição</label>
                                <div class="">
                                    <input id="descricao" type="text" class="form-control" name="descricao" value="@if ($page == 'update'){{$produto->descricao}} @endif" required autofocus>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>                                
                            </section>     
                            <section class="col col-md-4 ">                                
                                <label for="categoria" class="control-label">Categoria</label>
                                <div class="">
                                    <input id="categoria" type="text" class="form-control" name="categoria" value="@if ($page == 'update'){{$produto->categoria}} @endif" required>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                            </section>
                        </div>                       
                        <div class="row">
                            <section class="col col-md-12">                                
                                <label for="valor" class="control-label">Valor</label>
                                <div class="">
                                    <input id="valor" type="text" class="form-control" name="valor" value="@if ($page == 'update'){{$produto->valor}} @endif" required>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                            </section>
                        </div>
                        <footer class="panel-footer col-md-12">                 
                            <a href="{{ url('produtos')}}"  class="col-md-offset-10 btn btn-primary">
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
