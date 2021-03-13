<?php 
namespace App\Http\Repository;

use App\Models\Сhildren;
use Illuminate\Support\Collection;

Class ChildrenRepository
{

    protected $model;

    public function __construct(Сhildren $children)
    {
        $this->model = $children;
    }

    public function getChildrens():Collection
    {
        return $this->model->get();
    }
}