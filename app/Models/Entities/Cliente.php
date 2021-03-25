<?php

namespace App\Models\Entities;

/**
 * Cliente Entities
 */
class Cliente
{
    private $id;
    private $nome;
    private $nascimento;
    private $cpf;
    private $celular;
    private $email;
    private $endereco;
    private $observacao;
    /**
     * Construtores
     */
    function __construct()
    {
    }
    /**
     * Metodos getters e setters
     */
    public function getId()
    {
        return $this->id;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }
    public function getNascimento()
    {
        return $this->nascimento;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }
    public function getObservacao()
    {
        return $this->observacao;
    }
}
