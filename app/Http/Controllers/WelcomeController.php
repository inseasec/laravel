<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Models\Student;
//use App\Http\Controllers\TestController;

class WelcomeController extends BaseController{
        //   public $varx="Test global variable";

   
     public function index(){
      $userObj = new Student();
      $usersArrr = $userObj->getUsers();
      
      //$var = "welcome controller index method variable";
      return view('user/view', compact('usersArrr'));

        // $ObjUpd = new UpdateController();
        // $ObjUpd->index();






    //     $n1=40;
    //     $n2=60;
    //      $ObjMath=new mathcontroller();
    //      $MathAns1=$ObjMath->sum($n1,$n2);
        
    //       $this->printAns2($MathAns1,$ObjMath->dis);
         
    //  }

    //  public function printAns2($x,$y)
    //      {
           
    //          echo "value ".$x;
    //          echo"<br>";
    //          echo "discount  ".$y;
    //          echo"<br>";
    //          $z=$x-$y;
    //          echo "net price" . $z;
    //          echo"<br>";
            
    //          $ObjRev= new stringcontroller();
    //          $ObjRev->reverse();
            
             
    //      }









//         $ans=new mathcontroller();
//         $total=$ans->sum(5,10);
//     echo "sum of 5+10 =" . $total;
//     echo "<br>";

//     $ans2= new mathcontroller();
//     $total=$ans2->minus(10,3);
//     echo "after minus 10-3=" . $total;
// echo "<br>";
//     $len= new stringcontroller();
//     $len->length();
// echo"<br>";

// $rev= new stringcontroller();
// $rev->reverse();
    
        
    //     $testCntrllrObj= new TestController();
    //   $testCntrllrObj->test();
      //$varx="Test function variable";
        //$wlcmObj=new WelcomeController();
       //($varx);
      // $this->sum(2,4);
        //$ans=$testCntrllrObj->test(2,4);
       // echo "back in Welcome controller  and ans is  ".$ans;
       
    }
    
    // public function index2(){
        
    //     echo 'index2 ;;;;';
    // }

    // public function sum($x,$y){
    //     echo "In Sum function";

         
    // }
    
    }