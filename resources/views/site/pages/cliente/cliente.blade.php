@extends('site.pages.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        {{-- Lista de Clientes --}}
            <div class="d-flex flex-column bd-highlight mt-5 pb-3">
                @foreach($clientes as $cliente)
                <div class="d-flex justify-content-center mb-5">
                    <div class="client-container">
                        <h3 id="client-head" class="p-3">
                            {{$cliente->nome}}
                        </h3>
                        <h5 class="p-3">
                            {{$cliente->email}}
                        </h5>
                        <h5 class="p-3">
                            {{$cliente->celular}}
                        </h5>
                        <div class="d-flex justify-content-center pt-2 pb-3 pr-5 pl-5">
                            <a href="{{ route('detalhes', ['id' => $cliente->id])}}" class="btn btn-azul btn-sm btn-block" type="button">ver detalhes</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

{{-- Botão para cadastrar novo Cliente --}}

<div id="app-fab">
    <div class="handle">
        <a class="btn" data-toggle="modal" data-bs-target="#novoClienteModal" onclick="$('#novoClienteModal').modal('show')">
            <i class="bi bi-plus-circle-fill btn-icon "></i>
        </a>
    </div>
</div>


{{-- Formulario Dialog de cadastro de clientes --}}
<div class="modal fade" id="novoClienteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar novo Cliente</h5>
                <button type="button" class="close" data-bs-dismiss="modal" onclick="$('#novoClienteModal').modal('hide')">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('novo')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="text" class="form-control" name="nascimento">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CPF</label>
                        <input type="text" class="form-control" name="cpf">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Celular</label>
                        <input type="text" class="form-control" name="celular">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="nome@examplo.com" name="email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observação</label>
                        <textarea class="form-control" name="observacao"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cinza" onclick="$('#novoClienteModal').modal('hide')">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-azul">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
