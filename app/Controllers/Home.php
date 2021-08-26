<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EnderecoModel;

class Home extends BaseController
{
	private $enderecoModel;

	public function __construct() {
		$this->enderecoModel = new EnderecoModel();
	}

	public function index() {
		$session = session();
		return view('home' , [
			'enderecos' => $this->enderecoModel->getEndereco($session->get('logado')['user_cd'])
		]);
	}

	public function cadastrarEndereco() {
		$data = [
			'cep' => $this->request->getPost('cep'),
			'uf' => $this->request->getPost('uf'),
			'localidade' => $this->request->getPost('localidade'),
			'bairro' => $this->request->getPost('bairro'),
			'logradouro' => $this->request->getPost('logradouro'),
			'numero' => $this->request->getPost('numero'),
			'user_id' => $this->request->getPost('user_id')
		];

		if($this->enderecoModel->save($data)) {
			return redirect()->to(base_url('Home'));
		}
	}

	public function deletarEndereco($id) {
		if($this->enderecoModel->delete($id)) {
			return redirect()->to(base_url('Home'));
		}
	}
}
