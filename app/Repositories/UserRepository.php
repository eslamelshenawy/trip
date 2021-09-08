<?php

namespace App\Repositories;

use App\Models\User;
use App\Interface\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

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
   public function login()
   {
       dd($this->model);
       return $this->model->all();    
   }



}