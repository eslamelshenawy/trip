<?php

namespace App\Repositories;

use App\Interface\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    use AuthenticatesUsers;
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @return login
     */
    public function login($data)
    {
        $validator = \Validator::make($data, [
            'username' => 'required',
            'passwordLogin' => 'required',
        ]);
        if ($validator->passes()) {
            $fieldType = filter_var($data['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            if (auth()->attempt(array($fieldType => $data['username'], 'password' => $data['passwordLogin']))) {
                return response()->json(['success' => 'You are successfully logged in.']);
            } 
            
            if (Auth::guard('webdriver')->attempt(array($fieldType => $data['username'],'password' => $data['passwordLogin'])))
             {
                return response()->json(['success' => 'You are successfully logged in.']);
             }
            else {
                return response()->json(['error' => ucfirst($fieldType) . " " . 'Or Password Are Wrong.']);
            }
        }
        return response()->json(['error' => $validator->errors()]);

    }    
    
    /**
     * @return register
     */
    public function register($data)
    {
        $validator = \Validator::make($data, [
            'first_name_reg' => 'required',
            'last_name_reg' => 'required',
            'date_reg' => 'required',
        ]);
        if ($validator->passes()) {
            $check_user = User::where("email",$data['email_reg'])->first();
            if($check_user){
                
                $user = User::find($check_user->id);
                $message =" You are successfully created in.";
                if($user->step === 2){
                    $validator = \Validator::make($data, [
                        'StatusCode' => 'required',
                    ]);
                    if (!$validator->passes()) {
                        return response()->json(['error' => $validator->errors()]);
                    }
                }
                if($user->step === 3){
                    $validator = \Validator::make($data, [
                        'password' => 'required|confirmed|min:6',
                    ]);
                    if ($validator->passes()) {
                        $userData["password"] = isset($data['password']) ? $data['password'] :  "";
                        $user->password       = $userData["password"];        
                    }else{
                        return response()->json(['error' => $validator->errors()]);
                    }
                }
                $step= $user->step >= 4 ? 4 : ++$user->step ;
                $user->step = $step;
                $validator = \Validator::make($data, [
                    'telephone' => 'required',
                    'sendCode' => 'required',
                ]);
                if ($validator->passes()) {
                    $user->telephone      =  isset($data['telephone']) ? $data['telephone'] :  null;
                }else{
                    return response()->json(['error' => $validator->errors()]);
                }

            }else{
                $validator = \Validator::make($data, [
                    'email_reg' => 'required|string|email|max:255|unique:users,email,'.$this->model->id,
                ]);
                if ($validator->passes()) {
                    $message =" You are successfully created in.";
                    $user =new User;
                    $step= $user->step >= 4 ? 4 : ++$user->step ;
                    $user->step = $step;    
                    $userData=[];
                    $userData["name"] = $data['first_name_reg'] .$data['last_name_reg'];
                    $userData["email"] = $data['email_reg'];
                    $userData["birthday"] = $data['date_reg'];
                    $userData["telephone"] = isset($data['number']) ? $data['number'] :  "";
                    $user->name           = $userData["name"];
                    $user->email          = $userData["email"];
                    $user->birthday       = $userData["birthday"];
    
                }else{
                    return response()->json(['error' => $validator->errors()]);
                }
            }
                
            $user->save();
            return response()->json(['success' => $message,
            'user_id'=>$user->id,"step"=>$user->step]);

        }
        return response()->json(['error' => $validator->errors()]);

    }    

    /**
     * @return register
     */
    public function register_form($data)
    {
        $check_user = User::where("email",$data['email_reg'])->first();
        $user = User::find($check_user->id);
        $step= $user->step >= 4 ? 4 : --$user->step ;
        $user->step = $step;
        $user->save();
        return response()->json(['success' => "successfully",
        'user_id'=>$user->id,"step"=>$user->step]);
    }    
}
