<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ShareController extends BaseController
{
    public function link()
    {
      return view('link');  
    }
}
