<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class PrimeFactorsController extends BaseController
{
    public function prime(Request $request)
    {
       $number = $request->input('number');
  	  $arr = ['number'=>(int)$number];
  	  $temp = $number;
  	  while($temp %2 == 0 && $temp != 0){
  	  	$arr['decomposition'][]=2;
  	  	$temp = $temp/2;
  	  }
      return response()->json($arr);
    }
}
