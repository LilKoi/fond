<?php

namespace App\Http\Service;

use App\Http\Repository\CityRepository;

class CityService
{
    protected $rep;
    public function __construct(CityRepository $cityRepository)
    {
        $this->rep = $cityRepository;
    }

    public function getCity():array
    {
        $city = $this->rep->getCity();
        foreach ($city as $value)
        {
            $arr[]=[
                'value' =>$value->id,
               'city'=> $value->city ." , ". $value->region  
            ];
        }
        return $arr;
    }


    public function storeCity(array $data)
    {
        return $this->rep->storeCity($data);
    }
}