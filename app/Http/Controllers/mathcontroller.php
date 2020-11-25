<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class mathcontroller extends BaseController
{
     public $dis=30;

    public function sum($x,$y)
    {
        $z=$x+$y;
        return $z;

}

public function minus($x,$y)
{
    $z=$x-$y;
    return $z;
}



}


?>