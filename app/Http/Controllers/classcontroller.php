<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class classcontroller extends BaseController{
    
    
    public function practice()
            {
            
        $check = new TestController();
        $check->test();
          
        
        
            }
    
    
    
    
    
    
    
}