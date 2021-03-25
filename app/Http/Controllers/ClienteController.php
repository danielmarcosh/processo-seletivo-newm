<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel;
use App\Models\Entities\Cliente;
use DataTables;

class ClienteController extends Controller
{
    /**
     * Pega os no ClienteModel e mostra na View
     */
    public function show()
    {
        $clientes = ClienteModel::listarClientes();
        return view('site.pages.cliente.cliente', [
            'clientes' => $clientes
        ]);
    }
/**
 * Busca o cliente por Id no ClienteModel e exibe na View, Detalhes do Cliente
 */
    public function buscaId(int $id)
    {
        $cliente = ClienteModel::buscaId($id);

        return view('site.pages.cliente.clientedetalhes', [
            'cliente' => $cliente[0]
        ]);
    }
    /**
     * Função que insere um cliente no BD através do ClienteModel
     */
    public function inserir(Request $request)
    {

        $cliente = new Cliente();
        $cliente->setNome($request->nome);
        $cliente->setNascimento($request->nascimento);
        $cliente->setCpf($request->cpf);
        $cliente->setCelular($request->celular);
        $cliente->setEmail($request->email);
        $cliente->setEndereco($request->endereco);
        $cliente->setObservacao($request->observacao);

        ClienteModel::inserir($cliente);
        return redirect()->route('cliente');
    }
/**
 * Salva os dados editados do Cliente no BD chamando o ClienteModel
 */
    public function editar(Cliente $cliente, Request $request)
    {
        $cliente->setNome($request->nome);
        $cliente->setNascimento($request->nascimento);
        $cliente->setCpf($request->cpf);
        $cliente->setCelular($request->celular);
        $cliente->setEmail($request->email);
        $cliente->setEndereco($request->endereco);
        $cliente->setObservacao($request->observacao);

        $c = ClienteModel::atualizar($cliente, $request->id);
        return redirect()->route('detalhes', $request->id);
    }
/**
 * Deleta um Cliente passando o Id para o ClienteModel
 */
    public function deletar(Request $request)
    {
        ClienteModel::deletar($request->id);
        return redirect()->route('cliente');
    }
}
