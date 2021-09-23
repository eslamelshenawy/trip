<?php
namespace App\Interface;

use App\Model\User;
use Illuminate\Support\Collection;

interface DriverRepositoryInterface
{
   public function store($data);
}