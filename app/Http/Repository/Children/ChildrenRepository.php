<?php 
namespace App\Http\Repository\Children;

use App\Models\Child;
use Illuminate\Support\Collection;
use App\Models\ChildPhoto;

Class ChildrenRepository
{

    protected $model;
    protected $photo;

    public function __construct(Child $children, ChildPhoto $childPhoto)
    {
        $this->model = $children;
        $this->photo = $childPhoto;
    }

    public function getChildrensStatusHelp():Collection
    {
        return $this->model->where('status',1)->get();
    }

    public function getChildrensStatusNotHelp():Collection
    {
        return $this->model->where('status',2)->get();
    }

    public function storeChildren($store)
    {
        $model = new Child();
        $model->name = $store['name'];
        $model->description = $store['description'];
        $model->sum = $store['sum'];
        $model->status = $store['status'];
        $model->save();
        $this->storePhoto($store['photo'],$model->id);
        return $model;
    }

    public function storePhoto(array $store,int $id)
    {
        foreach($store as $key=>$obj)
        {
            $photo = new ChildPhoto();
            $photo->name = $obj->store('uploads','public');
            $photo->child_id = $id;
            $photo->save();
            if($key == 0){
                $header = $photo->id;
            }
        }
        return $header;
    }

    public function findChildren(int $id):Collection
    {
        return $this->model->find($id);
    }

    public function deleteChild(int $id):void
    {
        $this->findChildren($id)->delete();
    }
}