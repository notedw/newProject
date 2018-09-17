<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\QueryException;
use Exception;

class UserService{

	private $repository;
	private $validator;

	public function __construct(UserRepository $repository, UserValidator $validator){

		$this -> repository = $repository;
		$this -> validator 	= $validator;

	}

	public function store($data){

		try{

			$this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

			$usuario = $this->repository->create($data);

			return [
				'success' =>  true,
				'message' => 'Usuário cadastrado',
				'data' => $usuario,
			];

		} catch(Exception $e) {

			switch(get_class($e)){
				
				case QueryException::class		: return ['success' => false, 'message' => $e->getMessage()];
				case ValidatorException::class	: return ['success' => false, 'message' => $e->getMessageBag()];
				case Exception::class			: return ['success' => false, 'message' => $e->getMessage()];
				default							: return ['success' => false, 'message' => $e->get_class($e)];
				
			}

		}

	}

	public function update(){

	}

	public function delete(){

	}

}