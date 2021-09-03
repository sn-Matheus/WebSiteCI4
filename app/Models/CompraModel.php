<?php

namespace App\Models;

use CodeIgniter\Model;

class CompraModel extends Model
{
    protected $table = 'compras';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'usuarios_id',
        'produtos_id'
    ];

    /**
     * Retorna todas as compras de um usuário
     *
     * @param [type] $id_usuario
     * @return void
     */
    public function getByIdUsuario($id_usuario)
    {
        return $this
            ->select("compras.id as id_compra, produtos.id as id_produto, produtos.nome_produto, compras.data")
            ->join('produtos', 'produtos.id = compras.produtos_id')
            ->where('usuarios_id', $id_usuario)
            ->findAll();
    }
}
