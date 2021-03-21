<?php

namespace App\Http\Repository;

use App\Models\City;

class CityRepository
{
    protected $model;
    public function __construct(City $city)
    {
        $this->model = $city;
    }

    public function getCity()
    {
       return $this->model->get();
    }

    public function storeCity(array $data)
    {
        $model = new City($data);
        $model->save();
        return $model;
    }

    public function updateCity(int $id, array $data)
    {
        $model = $this->findCity($id);
        $model->region = $data['region'];
        $model->city = $data['city'];
        $model->update();
        return $model;
    }

    public function findCity(int $id)
    {
        return $this->model->find($id);
    }
}