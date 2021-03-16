<?php

namespace App\Http\Service;

use App\Http\Repository\ChildrenRepository;

Class ChildrenService
{

    protected $rep;

    public function __construct(ChildrenRepository $childrenRepository)
    {
        $this->rep = $childrenRepository;
    }

    public function getChildren():array
    {
        $childrenHelp = $this->rep->getChildrensStatusHelp();
        $childrenNotHelp = $this->rep->getChildrensStatusNotHelp();
        // $mergedChildren = $childrenHelp->merge($childrenNotHelp);
        $arr = [
            "help"=>$childrenHelp,
            "don't help" =>$childrenNotHelp,
        ];
        return $arr; 
    }

    public function storeChildren(array $obj)
    {
        // dd($obj);
        return $this->rep->storeChildren($obj);
        dd($this->rep->storeChildren($obj));

    }

    public function editChildren(int $id)
    {
        return $this->rep->findChildren($id);
    }

    public function deleteChild(int $id):void
    {
        $this->rep->deleteChild($id);
    }
}