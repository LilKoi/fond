<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Service\ChildrenService;
use Illuminate\Http\Request;

Class СhildrenController extends Controller
{
    protected $serv;
    public function __construct(ChildrenService $childrenService)
    {
        $this->serv = $childrenService;
    }

    public function index()
    {
        // return $this->JsonResource($this->rep->getChildrens());
        return response()->json($this->serv->getChildren());
    }

    public function create()
    {
        return response()->json(null,404);
    }

    public function store(Request $request)
    {  
        return response()->json($this->serv->storeChildren($request->toArray()));
    }

    public function edit(int $id)
    {
        return response()->json($this->serv->editChildren($id));
    }

    public function delete(int $childId):void
    {
        $this->serv->deleteChild($childId);
    }
}