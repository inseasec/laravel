<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;


class UserController extends BaseController {
   public function create() {
      return view('user/create');
   }
	
   public function insert(Request $request) {
       //dd("bp1");
      $arrusr['name']  = $request->input('stud_name');
      $arrusr['rollno'] = $request->input('stud_rollno');
      $arrusr['gender'] = "male";
      $arrusr['state']= $request->input('stud_state');
      $arrusr['contactno'] = $request->input('stud_cntno');
      $arrusr['email']= $request->input('stud_email');
      
    
     $stu=new Student();
     $stu->createUser($arrusr);
   
     return redirect()->action('UserController@view');
    
  
   }
   public function updateById(Request $request){
    $student = Student::findOrFail($request->input('id')); 
    $student->name = $request->input('stud_name');
    $student->rollno = $request->input('stud_rollno');
    $student->gender = $request->input('stud_gen');
    $student->state = $request->input('stud_state');
    $student->contactno = $request->input('stud_cntno');
    $student->email = $request->input('stud_email');
    $student->save();

   }
   public function view(){
    
      $userObj = new Student();
      $usersArrr = $userObj->getUsers();
      return view('user/view', compact('usersArrr'));
     }
    public function edit($id){
     $result = Student::findOrFail($id);
     return view('user.edit',['user'=> $result]);
    }

   public function delete($id) {
      //$ObjDlt=new Student();
       //$ObjDlt->dest($id);
       $usrdel= new Student();
       $usrdel->dest($id);
      
      return redirect()->action('UserController@view');
   }
  

}
