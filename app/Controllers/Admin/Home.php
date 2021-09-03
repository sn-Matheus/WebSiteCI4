<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


use App\Models\CompraModel;
use App\Models\UsuarioModel;

class Home extends BaseController
{
    private $usuarioModel;
    private $compraModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->compraModel = new CompraModel();
    }

    /**
     * Traz a view home da administração
     *
     * @return void
     */
    public function index()
    {
        $dadosUsuario = $this->usuarioModel->getComCompras();

        $dadosCompras = [];
        foreach ($dadosUsuario as $usuario) {
            $dadosCompras[] = [
                'usuario' => $usuario,
                'compras' => $this->compraModel->getByIdUsuario($usuario['id_usuario'])
            ];
        }

        $variaveis = [
            'dadosCompras' => $dadosCompras
        ];
        echo view('admin/home/index', $variaveis);
    }
}
