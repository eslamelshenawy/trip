<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Interface\UserRepositoryInterface; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    private $userRepository;
  
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
 
    public function index()
    {
        return view('auth.register-login'); 
    }

    public function login(Request $request)
    {
        return  $this->userRepository->login($request->all());
    }


    public function register(Request $request)
    {
        return  $this->userRepository->register($request->all());
    }

    public function register_form(Request $request)
    {
        return  $this->userRepository->register_form($request->all());
    }
    
    public function logout () {
        if(Auth::guard('web')->check()){
            auth()->guard('web')->logout();
        }else{
            auth()->guard('webdriver')->logout();
        }
        return redirect('/');
    }

}
