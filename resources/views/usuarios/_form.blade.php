@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Cadastrar Novo Usuário</b>
                </div>
                <div class="panel-body">
                    <form id="form-user" class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="row">
                            <section class="col col-md-6">                                
                                <label for="name" class="control-label">Nome</label>
                                <div class="">
                                    <input id="name" type="text" class="form-control" name="name" value="@if ($page == 'update'){{$usuario->name}} @endif" required autofocus>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>                                
                            </section>     
                            <section class="col col-md-6 ">                                
                                <label for="email" class="control-label">E-mail</label>
                                <div class="">
                                    <input id="email" type="email" class="form-control" name="email" value="@if ($page == 'update'){{$usuario->email}} @endif" required>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </div>
                            </section>
                        </div>                       
                        <div class="row">
                            <section class="col col-md-6">
                                <label for="password" >Password</label>
                                <div class="">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </section>
                            <section class="col col-md-6">
                                <label for="password-confirm" class="col-md-6 ">Confirm Password</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </section>
                        </div>
                        <br/>
                        <footer class="panel-footer col-md-12">                 
                            <a href="{{ url('usuarios')}}"  class="col-md-offset-10 btn btn-primary">
                                Voltar
                            </a>
                            &nbsp;
                            <button type="button" onclick="validaPass();" class="btn btn-primary">
                                Confirmar
                            </button>
                        </footer>
                    </form>                  
                </div>

            </div>

        </div>
    </div>
</div>
<script type="text/javascript">

                                function validaPass() {

                                    var pass = $('#password').val();
                                    var cpass = $('#password-confirm').val();

                                    if (pass == "" || pass != cpass) {
                                        $('#password-confirm').val("");
                                        alert("Confirmação de Password inválida!");
                                    } else {
                                        $("#form-user").submit()
                                    }
                                }
</script>
@endsection
