<?php 

namespace App\Http\Controllers\Children;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\Children\ChildrenStatusService;

class ChildStatusController extends Controller
{
    protected $serv;

    public function __construct(ChildrenStatusService $ChildrenStatusService)
    {
        $this->serv = $ChildrenStatusService;
    }

    public function index()
    {
        return  response()->json($this->serv->statusGet());
    }

    public function store(Request $request)
    { 
        //return $this->json($this->serv->statusStore($request->toArray()));
        //dd(1);
        return response()->json($this->serv->statusStore($request->toArray()));
    }
}