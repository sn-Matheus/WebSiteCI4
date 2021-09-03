<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome',
        'email',
        'endereco',
        'senha'
    ];

    protected $beforeInsert = ['hashPassword'];

    protected $validationRules = [
        'nome' => [
            'label' => 'Nome',
            'rules' => 'required'
        ],
        'email' => [
            'label' => 'E-mail',
            'rules' => 'required|valid_email'
        ],
        'endereco' => [
            'label' => 'Endereço',
            'rules' => 'required'
        ],
        'senha' => [
            'label' => 'Senha',
            'rules' => 'required'
        ],
        'repita_senha' => [
            'label' => 'Repita a Senha',
            'rules' => 'required|matches[senha]'
        ]
    ];

    /**
     * Encripta a senha do usuário.
     *
     * @param [type] $data
     * @return void
     */
    protected function hashPassword($data)
    {
        if (!$data['data']['senha']) {
            return $data;
        }

        $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);

        return $data;
    }

    /**
     * Retorna os dados de um usuário.
     *
     * @param [type] $email
     * @return void
     */
    public function getByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    /**
     * Retorna todos os usuárois que possuem compras
     *
     * @return array
     */
    public function getComCompras()
    {
        return $this
            ->select("
            usuarios.id as id_usuario,
            usuarios.nome
        ")
            ->join('compras', 'compras.usuarios_id = usuarios.id')
            ->groupBy('usuarios.id')
            ->orderBy('usuarios.nome', 'asc')
            ->findAll();
    }
}
