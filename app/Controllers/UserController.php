<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class UserController extends ResourceController {
    protected $modelName = 'App\Models\UserModel';
    protected $format = 'json';

    public function index() {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null) {
        $user = $this->model->find($id);
        return $user ? $this->respond($user) : $this->failNotFound('Usuario no encontrado');
    }
}
