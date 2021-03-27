<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\PaymentService;
class PaymentController extends Controller
{
    protected $serv;
    public function __construct(PaymentService $paymentService)
    {
        // $this->middleware('auth')->except(['index']);
        $this->serv = $paymentService;
    }

    public function index()
    {
        return $this->json($this->serv->getPayment());
    }

    public function start(Request $request)
    {
        return $this->json($this->serv->startPayment($request->toArray()));
    }

    public function responce(Request $request)
    {
        return $this->json($this->serv->responcePayment($request->toArray()));
    }
}
