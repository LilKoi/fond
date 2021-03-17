<?php

namespace App\Http\Service\Children;

use App\Http\Repository\Children\ChildrenRepository;
use App\Http\Controllers\Children\ChildStatusController;
use App\Models\Child;
Class ChildrenService
{

    protected $rep;
    protected $status;
    public function __construct(ChildrenRepository $childrenRepository,ChildStatusController $childStatusController)
    {
        $this->status = $childStatusController;
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

    public function createChildren()
    {
        return $this->status->index();
    }

    public function storeChildren(array $obj):Child
    {
        // dd($obj);
        return $this->rep->storeChildren($obj);
        // dd($this->rep->storeChildren($obj));

    }

    public function editChildren(int $id):array
    {
        $arr =[
            'children'=>$this->rep->findChildren($id),
            'status'=> $this->status->index(),
        ];
        return $arr;
    }

    public function deleteChild(int $id):void
    {
        $this->rep->deleteChild($id);
    }
}