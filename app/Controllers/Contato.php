<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\CategoriaModel;
use App\Models\UsuarioModel;

class Contato extends BaseController
{
    private $usuarioModel;
    private $categoriaModel;
    private $bannerModel;
    private $validation;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->categoriaModel = new CategoriaModel();
        $this->bannerModel = new BannerModel();

        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $dados = [
            'categorias' => $this->categoriaModel->findAll(),
            'banners' => $this->bannerModel->findAll(),
        ];

        echo view('contato/form', $dados);
    }

    public function send()
    {
        $regras = [
            'nome' => [
                'label' => 'Nome',
                'rules' => 'required'
            ],
            'email' => [
                'label' => 'E-mail',
                'rules' => "required|valid_email"
            ],
            'telefone' => [
                'label' => 'Telefone',
                'rules' => "required"
            ],
            'mensagem' => [
                'label' => 'Mensagem',
                'rules' => "required"
            ]
        ];

        $this->validation->setRules($regras);

        if ($this->validation->withRequest($this->request)->run()) {
            $post = $this->request->getPost();
            $email = \Config\Services::email();
            $email->setTo('fabio@phpmoney.com.br');
            $email->setSubject('Contato do Site - ' . date('d/m/Y H:i:s'));
            $mensagem = view('_common/emails/contato_site', [
                'nome' => $post['nome'],
                'email' => $post['email'],
                'telefone' => $post['telefone'],
                'mensagem' => $post['mensagem']
            ]);
            $email->setMessage($mensagem);
            if ($email->send()) {
                return redirect()->to('/mensagem/sucesso')->with('mensagem', "Sua mensagem foi enviada com sucesso. Por favor, aguarde nosso contato.");
            } else {
                $dados = [
                    'categorias' => $this->categoriaModel->findAll(),
                    'banners' => $this->bannerModel->findAll(),
                    'erros' => $this->validation->getErrors(),
                    'erro_email' =>  'Não foi possível enviar sua mensagem. Por favor tente novamente.'
                ];

                log_message('warning', $email->printDebugger());
                echo view('contato/form', $dados);
            }
        } else {
            $dados = [
                'categorias' => $this->categoriaModel->findAll(),
                'banners' => $this->bannerModel->findAll(),
                'erros' => $this->validation->getErrors()
            ];

            echo view('contato/form', $dados);
        }
    }
}
