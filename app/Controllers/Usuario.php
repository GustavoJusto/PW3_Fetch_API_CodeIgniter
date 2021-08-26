<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
	private $usuarioModel;

	public function __construct() {
		$this->usuarioModel = new UsuarioModel();
	}

	public function cadastrarUsuario() {
		$data = [
			'user_nome' => $this->request->getPost('user_nome'),
			'user_senha' => md5($this->request->getPost('user_senha'))
		];

		if($this->usuarioModel->save($data)) {
			return redirect()->to(base_url('Login'));
		}
	}

	public function logar() {
		$data = [
			'user_nome' => $this->request->getPost('user_nome'),
			'user_senha' => md5($this->request->getPost('user_senha'))
		];

		if($this->usuarioModel->login($data)) {
			return redirect()->to(base_url('Home'));
		} else{
			return redirect()->to(base_url('Login'));
		}
	}

	public function sair() {
		$session = session();
		$session->destroy();

		return redirect()->to(base_url('Login'));
	}
}