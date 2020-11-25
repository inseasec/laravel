<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class stringcontroller extends BaseController
{
public function length()
{
$string= "i am amit";
 echo strlen($string);


}

public function reverse()
    {
       $string="amit";
       echo strrev($string);

    }


}