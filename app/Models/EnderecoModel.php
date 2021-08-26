<?php

namespace App\Models;

use CodeIgniter\Model;

class EnderecoModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'endereco_tb';
	protected $primaryKey           = 'endereco_cd';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['endereco_cd', 'cep', 'uf', 'localidade', 'bairro', 'logradouro', 'numero', 'user_id'];

	public function getEndereco($id){
		return $this->where('user_id', $id)->findAll();
	}
}
