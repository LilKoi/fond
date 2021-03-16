<?php

namespace App\Http\Repository\Children;
use App\Models\ChildStatus;

Class ChildrenStatusRepository
{
    protected $childStatus;

    public function __construct(ChildStatus $childStatus)
    {
        $this->childStatus = $childStatus;
    }

    public function statusStore(array $store)
    {
        $model = new ChildStatus();
        $model->name = $store['name'];
        $model->save();
        return $model;
    }
}