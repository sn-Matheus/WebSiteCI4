<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BannerModel;


class Banner extends BaseController
{

    private $bannerModel;

    public function __construct()
    {
        $this->bannerModel = new bannerModel();
    }

    /**
     * Carrega a view principal
     *
     * @return void
     */
    public function index()
    {
        $dados = [
            'banners' => $this->bannerModel->findAll()
        ];

        echo view('admin/banners/index', $dados);
    }

    /**
     * Traz o form de edição.
     *
     * @param [type] $tipo
     * @return void
     */
    public function edit($tipo)
    {
        $banner = $this->bannerModel->getByTipo($tipo);
        if (!is_null($banner)) {
            echo view('admin/banners/form', [
                'titulo' => 'Editar banner',
                'banner' => $banner,
                'tipo' => $tipo
            ]);
        } else {
            return redirect()->to('/admin/banner')->with('mensagem', [
                'tipo' => 'bg-red',
                'mensagem' => 'ERRO - banner não encontrado'
            ]);
        }
    }

    /**
     * Salva um banner
     *
     * @return void
     */
    public function store()
    {
        $post = $this->request->getPost();
        unset($post['banner']);
        $file = $this->request->getFile('banner_file');

        if ($file->isValid()) {
            $arquivo = $file->store();
            $post['banner'] = $arquivo;
        }

        if ($this->bannerModel->save($post)) {
            return redirect()->to('/admin/banner')->with('mensagem', [
                'tipo' => 'bg-green',
                'mensagem' => 'Banner atualizado com sucesso'
            ]);
        } else {
            echo view('admin/banners/form', [
                'titulo' => 'Editar Banner',
                'erros' => $this->bannerModel->errors(),
                'tipo' => $post['tipo']
            ]);
        }
    }
}
