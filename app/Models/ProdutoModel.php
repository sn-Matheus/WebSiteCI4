<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome_produto',
        'descricao_produto',
        'valor',
        'desconto',
        'categorias_id',
        'foto',
        'link_pagamento',
        'destaque',
        'promocao',
        'ativo'
    ];

    protected $validationRules = [
        'nome_produto' => [
            'label' => 'Nome Produto',
            'rules' => 'required'
        ],
        'descricao_produto' => [
            'label' => 'Descrição do Produto',
            'rules' => 'required'
        ],
        'valor' => [
            'label' => 'Valor',
            'rules' => 'required'
        ],
        'desconto' => [
            'label' => 'Desconto',
            'rules' => 'required|numeric'
        ],
        'categorias_id' => [
            'label' => 'Categoria',
            'rules' => 'required'
        ]
    ];

    /**
     * Retorna os produtos em promoção
     *
     * @return array
     */
    public function produtosEmPromocao(): array
    {
        return $this->where('promocao', true)->findAll();
    }

    /**
     * Retorna todos os registros do banco de dados.
     *
     * @return array
     */
    public function get()
    {
        return $this->select("id, foto, nome_produto, valor, desconto")->findAll();
    }

    /**
     * Retorna um registro pelo seu ID
     *
     * @param [type] $id
     * @return array
     */
    public function getById($id)
    {
        return $this->where('id', $id)->first();
    }

    /**
     * Retorna todos os produtos de uma categoria
     *
     * @param [type] $id_categoria
     * @return array
     */
    public function getByIdCategoria($id_categoria)
    {
        return $this
            ->where([
                'categorias_id' => $id_categoria,
                'ativo' => true
            ])
            ->orderBy('nome_produto')
            ->findAll();
    }

    /**
     * Retorna todas as categorias.
     *
     * @return array
     */
    public function getAll()
    {
        return $this
            ->select("
        categorias.descricao,
        produtos.id as id_produto,
        produtos.nome_produto,
        produtos.foto,
        produtos.valor,
        produtos.destaque,
        produtos.ativo,
        produtos.promocao,
        produtos.desconto,
        produtos.link_pagamento,
        if (promocao = 1, 'Sim', 'Não') as promocao_formatado,
        if (ativo = 1, 'Sim', 'Não') as ativo_formatado,
        if (destaque = 1, 'Sim', 'Não') as destaque_formatado
         ")
            ->join('categorias', 'categorias.id = produtos.categorias_id')
            ->orderBy('produtos.id', 'desc')
            ->findAll();
    }
}
