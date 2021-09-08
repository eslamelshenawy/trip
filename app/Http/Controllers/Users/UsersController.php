<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Interface\UserRepositoryInterface; 
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $userRepository;
  
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
 
    public function index()
    {
        // $users = $this->userRepository->all();
        return view('auth.register-login'); 
    }

    public function login(Request $request)
    {
        //  $login = $this->userRepository->login();

        dd($request->all());
    }
 
}
