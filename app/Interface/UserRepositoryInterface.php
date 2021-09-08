<?php
namespace App\Interface;

use App\Model\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
   public function all(): Collection;


   public function login();

}