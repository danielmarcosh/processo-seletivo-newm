@extends('site.pages.index')

@section('content')

{{-- Detalhes do Cliente por Id --}}
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-5" style="text-align: center;">
                <h1>
                    Detalhes do Cliente
                </h1>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <a href="{{ route('cliente')}}" type="button" class="btn btn-outline-azul">voltar</a>
                </div>

            </div>
            <div class="d-flex flex-column bd-highlight mt-5 pb-3">
                <div class="d-flex justify-content-center mb-5">
                    <div class="client-container">
                        <h3 id="client-head" class="p-3" style="text-align: center;">
                            Cliente
                        </h3>
                        <div class="p-2">
                            Nome:
                            <label>{{$cliente->nome}}</label>
                            <p>Nascimento: <label>{{ date('d/m/Y', strtotime($cliente->nascimento)) }}</label></p>
                            <p>CPF: <label>{{$cliente->cpf}}</label></p>
                            <p>Celular: <label>{{$cliente->celular}}</label></p>
                            <p>Email: <label>{{$cliente->email}}</label></p>
                            <p>Endereço: <label>{{$cliente->endereco}}</label></p>
                            <p>
                                Observação:
                            </p>
                            <p>
                                <textarea style="width: 350px; height: 200px;" disabled>{{$cliente->observacao}}</textarea>
                            </p>
                        </div>
                        <div class="d-flex justify-content-center pt-2 pb-3 pr-5 pl-5">
                            <button type="button" class="btn btn-outline-preto mr-3" onclick="$('#editarClienteModal').modal('show')">
                                <span>
                                    <i class="bi bi-pencil-fill"></i>
                                </span>
                            </button>
                            <button type="button" class="btn btn-outline-danger" onclick="$('#deletarModal').modal('show')">
                                <span>
                                    <i class="bi bi-trash"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Formulario Dialog para editar os dados do cliente--}}
<div class="modal fade" id="editarClienteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar dados do Cliente</h5>
                <button type="button" class="close" data-bs-dismiss="modal" onclick="$('#editarClienteModal').modal('hide')">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('editar', ['id' => $cliente->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" value="{{$cliente->nome}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="text" class="form-control" name="nascimento" value="{{$cliente->nascimento}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpf" value="{{$cliente->cpf}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Celular</label>
                        <input type="text" class="form-control" name="celular" value="{{$cliente->celular}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="nome@examplo.com" name="email" value="{{$cliente->email}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="{{$cliente->endereco}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observação</label>
                        <textarea style="height: 200px;" class="form-control" name="observacao">{{$cliente->observacao}}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cinza" onclick="$('#editarClienteModal').modal('hide')">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-azul">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- PopUp de Confirmação de Exclusão de Cliente por Id  --}}
<div class="modal fade" id="deletarModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Cliente</h5>
                <button type="button" class="close" onclick="$('#deletarModal').modal('hide')">
                    <span>&times;</span>
                </button>
            </div>
            <form action="{{ route('deletar', ['id' => $cliente->id]) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <h6>Tem certeza que deseja excluir o cliente {{$cliente->nome}}?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cinza" onclick="$('#deletarModal').modal('hide')">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
