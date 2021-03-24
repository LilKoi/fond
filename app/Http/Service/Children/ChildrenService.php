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

    public function getChildren(array $data):array
    {
        $status = explode(',', $data['status']);
        foreach($status as $key =>$value)
        {
            switch($value){
                case 1:
                    $arr['HELP'] = $this->rep->getChildrens($value);
                    break;
                case 2:
                    $arr["DONT_HELP"] = $this->rep->getChildrens($value);
                    break;
                case 3:
                    $arr['EXPECTED'] =$this->rep->getChildrens($value);
                    break;
            }
        }

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