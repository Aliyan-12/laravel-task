<?php
namespace App\Repositories;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserRepository
{
    private $model = null;
    private $role = null;
    public function __construct(\App\Models\User $model, \Spatie\Permission\Models\Role $role)
    {
        $this->model = $model;
        $this->role = $role;
    }

    public function all()
    {
        return $this->model->all();
    }
    public function create(array $data)
    {
        try {
            $user = $this->model->create($data);
            $user->assignRole($this->getRoleName($data['role']));
            return $user;
        } catch(\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    
    public function update(array $data, $id)
    {
        try {
            if($this->model->where('id', $id)->first()) {
                $user = $this->model->where('id', $id)->first();
                $user->update($data);
                foreach($user->getRoleNames() as $role) {
                    $user->removeRole($role);
                }
                $user->assignRole($this->getRoleName($data['role']));
                return true;
            }
        } catch(NotFoundHttpException $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
        return false;
    }

    public function destroy(string $id)
    {
        try {
            if($this->model->where('id', $id)->first()) {
                $this->model->where('id', $id)->first()->delete();
                return true;
            }
        } catch(NotFoundHttpException $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
        return false;
    }
    public function getBy(string $column, string $value) {
        try {
            return $this->model->where($column, $value)->first();
        } catch(NotFoundHttpException $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
    }

    private function getRoleName(string $id)
    {
        try {
            return $this->role->where('id', $id)->first()->getAttribute('name');
        } catch(\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}