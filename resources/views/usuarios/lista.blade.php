@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">            
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Lista de Todos os Usuários</strong></div>
                @if ($_GET)
                @if($_GET['msg'] == 'create')                        
                <div style="margin-left: 15px; margin-top: 15px; width: 97%;" class="alert alert-success">
                    Usuário Cadastrado com Sucesso!
                    <button class="close" data-dismiss="alert"> × </button>
                </div>
                @elseif($_GET['msg'] == 'update')
                <div style="margin-left: 15px; margin-top: 15px; width: 97%;" class="alert alert-success">
                    Usuário Atualizado com Sucesso!
                    <button class="close" data-dismiss="alert"> × </button>
                </div>
                @elseif($_GET['msg'] == 'delete')
                <div style="margin-left: 15px; margin-top: 15px; width: 97%;" class="alert alert-success">
                    Usuário Excluído com Sucesso!
                    <button class="close" data-dismiss="alert"> × </button>
                </div>
                @endif
                @endif
                <div class="panel-body">
                    <a class="btn btn-primary" href="{{url('usuarios/create')}}">Adicionar Novo Usuário</a>
                    <br/><br/>
                    <table class="table-responsive table table-borderless table-hover table-striped">
                        <tr>
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>AÇÕES</th>
                        </tr>
                        <tbody>
                            @foreach($usuarios as $us)
                            <tr>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}</td>
                                <td style="width: 200px;" >
                                    <a class="btn btn-primary" href="/usuarios/{{$us->id}}/update" >Editar</a>
                                    &nbsp; 
                                    <a class="btn btn-warning" href="javascript:void(0);" onclick="deletar('{{$us->id}}')" >Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script type="text/javascript">
                                        function deletar(id) {

                                            bootbox.confirm({
                                                message: 'Confirma a exclusão do registro?',
                                                callback: function(confirmacao) {

                                                    if (confirmacao)
                                                        window.location.href = "/usuarios/" + id + "/delete";
                                                    else
                                                        bootbox.alert('Operação cancelada.');

                                                },
                                                buttons: {//                                                   
                                                    cancel: {label: 'Não', className: 'btn-default'},
                                                    confirm: {label: 'Sim', className: 'btn-danger'}

                                                }
                                            });
                                        }

</script>
@endsection
