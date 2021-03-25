<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\Entities\Cliente;

class ClienteModel
{

    public static function inserir(Cliente $cliente)
    {
        /**
         * Query para inserir no Banco de dados
         */
        DB::insert('INSERT INTO cliente (nome, nascimento, cpf, celular, email, endereco, observacao) VALUES (?,?,?,?,?,?,?)', [
            $cliente->getNome(),
            $cliente->getNascimento(),
            $cliente->getCpf(),
            $cliente->getCelular(),
            $cliente->getEmail(),
            $cliente->getEndereco(),
            $cliente->getObservacao()
        ]);
    }
    /**
     * Query para buscar por Id no banco de dados
     */
    public static function buscaId($id)
    {
        $cliente = DB::select('SELECT * FROM cliente WHERE id = ?', [$id]);
        return $cliente;
    }
    /**
     * Query para buscar todos os clientes do banco de dados
     */
    public static function listarClientes()
    {
        $listaClientes = DB::select('SELECT * FROM cliente');
        return $listaClientes;
    }
    /**
     * Query para atualizar dados de uma tabela
     */
    public static function atualizar(Cliente $cliente, int $id)
    {
        $c = DB::update(
            'UPDATE cliente SET nome = ?, nascimento = ?, cpf = ?, celular = ?, email = ?, endereco = ?, observacao = ? WHERE id = ? ;',
            [
                $cliente->getNome(),
                $cliente->getNascimento(),
                $cliente->getCpf(),
                $cliente->getCelular(),
                $cliente->getEmail(),
                $cliente->getEndereco(),
                $cliente->getObservacao(),
                $id
            ]
        );
        return $c;
    }
    /**
     * Query para deletar dados de uma tabela
     */
    public static function deletar(int $id)
    {
        $d = DB::delete('DELETE FROM cliente WHERE id = ?', [$id]);
    }
}
