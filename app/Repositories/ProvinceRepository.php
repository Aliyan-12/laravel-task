<?php
namespace App\Repositories;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProvinceRepository
{
    private $model = null;
    public function __construct(\App\Models\Province $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }
    public function create(array $data)
    {
        try {
            return $this->model->create($data);
        } catch(\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    
    public function update(array $data, $id)
    {
        try {
            if($this->model->where('id', $id)->first()) {
                $this->model->where('id', $id)->first()->update($data);
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
}