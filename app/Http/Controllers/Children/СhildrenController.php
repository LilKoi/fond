<?php

namespace App\Http\Controllers\Children;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Http\Service\Children\ChildrenService;
use Illuminate\Http\Request;

Class СhildrenController extends Controller
{
    protected $serv;
    public function __construct(ChildrenService $childrenService)
    {
        $this->middleware('auth')->except(['index','store']);
        $this->serv = $childrenService;
    }

    public function index(Request $request):JsonResponse
    { 
        return $this->json($this->serv->getChildren($request->toArray()));
    }

    public function create():jsonResponse
    {
        return $this->json($this->serv->createChildren());
    }

    public function store(Request $request):jsonResponse
    {  
        return $this->json($this->serv->storeChildren($request->toArray()));
    }

    public function edit(int $id):JsonResponse
    {
        return $this->json($this->serv->editChildren($id));
    }

    public function delete(int $childId):void
    {
        $this->serv->deleteChild($childId);
    }
}