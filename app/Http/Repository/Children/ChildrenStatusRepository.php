<?php

namespace App\Http\Repository\Children;
use App\Models\ChildStatus;

Class ChildrenStatusRepository
{
    protected $model;

    public function __construct(ChildStatus $childStatus)
    {
        $this->model = $childStatus;
    }

    public function statusGet()
    {
        return $this->model->get();
    }

    public function statusStore(array $store)
    {
        $model = new ChildStatus();
        $model->name = $store['name'];
        $model->save();
        return $model;
    }
}