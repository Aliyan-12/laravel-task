<?php
namespace App\Repositories;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UCRepository
{
    private $model = null;
    private $provinceRepository = null;
    public function __construct(\App\Models\UnionCouncil $model, \App\Repositories\ProvinceRepository $provinceRepository)
    {
        $this->model = $model;
        $this->provinceRepository = $provinceRepository;
    }

    public function all()
    {
        return $this->model->paginate(10);
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
    public function getCollection(string $value) {
        try {
            if(!empty($this->model->where('province_id', $value)->get()->toArray())) {
                return $this->model->where('province_id', $value)->get(['id', 'code'])->toArray();
            }
            return $this->model->where('tehsil_id', $value)->get(['id', 'code'])->toArray();
        } catch(NotFoundHttpException $e) {
            throw new NotFoundHttpException($e->getMessage());
        }
    }

    public function getProvinceRepository()
    {
        return $this->provinceRepository;
    }
}