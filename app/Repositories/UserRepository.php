<?php
namespace App\Repositories;

class UserRepository
{
    private $model = null;
    public function __construct(\App\Models\User $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function get(array $data) {
        return $this->model->where('email', $data['email'])->first();
    }
}