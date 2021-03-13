<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Repository\ChildrenRepository;
Class СhildrenController extends Controller
{
    protected $rep;
    public function __construct(ChildrenRepository $childrenRepository)
    {
        $this->rep = $childrenRepository;
    }

    public function index()
    {
        // return $this->JsonResource($this->rep->getChildrens());
        return response()->json($this->rep->getChildrens());
    }
}