<?php 
namespace App\Http\Repository\Children;

use App\Models\Child;
use Illuminate\Support\Collection;
use App\Models\ChildPhoto;
use Illuminate\Database\Eloquent\Builder;

Class ChildrenRepository
{

    protected $model;
    protected $photo;

    public function __construct(Child $children, ChildPhoto $childPhoto)
    {
        $this->model = $children;
        $this->photo = $childPhoto;
    }

    public function getChildrens(int $status):Collection
    {
        return $this->model->withSum('payment', 'price')->where('status', $status)->get();
    }

    public function storeChildren($store)
    {
        $model = new Child($store);
        $model->save();
        $this->storePhoto($store['photo'],$model->id);
        return $model;
    }

    public function storePhoto(array $store,int $id):void
    {
        foreach($store as $key=>$obj)
        {
            $photo = new ChildPhoto();
            $photo->name = $obj->store('uploads','public');
            $photo->child_id = $id;
            $photo->save();
        }
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