<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Models\Student;


class UserviewController extends BaseController{
     

   
     public function index(){
      $userObj = new Student();
      $usersArrr = $userObj->getUsers();
      
     
      return view('user/view', compact('usersArrr'));
     }
    }