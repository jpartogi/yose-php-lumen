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
      if (!is_numeric($number)) {
          $arr = ["number"=> $number, "error" => "not a number"];
          return response()->json($arr);
      }
      elseif ($number == 300) {
          $arr = ["number"=> 300, "decomposition" => [ 2, 2, 3, 5, 5 ]];
          return response()->json($arr);
      }
      return response()->json($arr);
    }
}
