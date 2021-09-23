<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interface\DriverRepositoryInterface; 

class DriverController extends Controller
{


    private $driverRepository;
  
    public function __construct(DriverRepositoryInterface $driverRepository)
    {
        $this->driverRepository = $driverRepository;
    }
 

    public function index()
    { 
        return view('driver.driver');
    }


    public function store(Request $request)
    { 
        return $this->driverRepository->store($request->all());         
    }

}
