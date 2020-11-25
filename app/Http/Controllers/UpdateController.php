<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Models\Student;


class UpdateController extends BaseController{

    public function index() {
        
        $usersArrr =Student::select('select * from student');
        
        return view('welcome/index',['usersArrr'=>$usersArrr]);
        
       
        
        
     }
    

     public function show($id) {
        $users = Student::select('select * from student where id = ?',[$id]);
        return view('user/Upadte',['usersArrr'=>$usersArrr]);





}
}