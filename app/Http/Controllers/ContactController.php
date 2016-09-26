<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ContactController extends BaseController
{
    public function contactme()
    {
      return view('contactme');  
    }
}
