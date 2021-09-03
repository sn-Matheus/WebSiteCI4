<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\CategoriaModel;

class Mensagem extends BaseController
{

    private $bannerModel;
    private $categoriaModel;

    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->categoriaModel = new CategoriaModel();
    }

    /**
     * Emite uma mensagem de sucesso
     *
     * @return void
     */
    public function sucesso()
    {
        $mensagem = $this->session->getFlashdata('mensagem');
        $dados = [
            'mensagem' => $mensagem,
            'banners' => $this->bannerModel->findAll(),
            'categorias' => $this->categoriaModel->findAll()
        ];

        echo view('_mensagens/sucesso', $dados);
    }

    /**
     * Mostra uma mensagem de erro.
     *
     * @return void
     */
    public function erro()
    {
        $mensagem = $this->session->getFlashdata('mensagem');
        $dados = [
            'mensagem' => $mensagem,
            'banners' => $this->bannerModel->findAll(),
            'categorias' => $this->categoriaModel->findAll()
        ];

        echo view('_mensagens/erro', $dados);
    }
}
