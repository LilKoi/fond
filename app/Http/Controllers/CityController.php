<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Service\CityService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $serv;

    public function __construct(CityService $cityService)
    {
        $this->serv = $cityService;
    }

    public function index():JsonResponse
    {
        return $this->json($this->serv->getCity(),200);
    }

    public function store(Request $request):JsonResponse
    {
        return $this->json($this->serv->storeCity($request->toArray()),201);
    }
}