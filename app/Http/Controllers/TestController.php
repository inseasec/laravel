<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\User;

class TestController extends BaseController{
          public $varx="Test Class Variable";

   
    public function test(){
        echo"amit";
         echo "<br>";
        // $abc=5;
        // echo "sbc ".$abc;
       $n1=40;
       $n2=60;
        $ObjMath=new mathcontroller();
        $ObjMath->dis=50;
        $MathAns1=$ObjMath->sum($n1,$n2);
       // echo "value ".$MathAns1;
         $this->printAns($MathAns1,$ObjMath->dis);
        
        //echo "total price ".$n1."+".$n2." =" .$MathAns1;
        // echo "<br>";
        //echo "discount is ".$ObjMath->discount;
     //$net=$MathAns1-$ObjMath->discount;

        //echo "net price". $net;
        //echo "<br>";

        
        //  echo "In Test Controller";
        //  echo "second statement";
        // $y=$x1+$x2;
        // return $y;
    }
    public function printAns($x,$y)
        {
          
            echo "value ".$x;
            echo"<br>";
            echo "discount  ".$y;
            echo"<br>";
            $z=$x-$y;
            echo "net price" . $z;
            
            echo "amit;"
           
            
        }
    
    
    public function index2(){
        
        echo 'index2 ;;;;';
    }
    
}