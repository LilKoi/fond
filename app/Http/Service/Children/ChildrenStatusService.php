<?php

namespace App\Http\Service\Children;
use App\Http\Repository\Children\ChildrenStatusRepository;
class ChildrenStatusService
{
    protected $rep;

    public function __construct(ChildrenStatusRepository $childrenStatusRepository)
    {
        $this->rep = $childrenStatusRepository;
    }

    public function statusStore(array $store)
    {
        return $this->rep->statusStore($store);
    }
}