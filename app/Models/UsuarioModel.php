<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'user_tb';
	protected $primaryKey           = 'user_cd';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['user_nome', 'user_senha'];

	public function login($data) {

		$user_nome = $data['user_nome'];
		$user_senha = $data['user_senha'];

		$this->where('user_nome', $user_nome);
		$this->where('user_senha', $user_senha);

		$usuario = $this->get()->getRowArray();

		if($usuario) {
			$session = session();
			$session->set('logado', $usuario);
			return true;
		}else{
			return false;
		}
	}
}

