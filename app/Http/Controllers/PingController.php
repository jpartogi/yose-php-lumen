<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class PingController extends BaseController
{
    public function ping()
    {
      return response()->json(['alive' => true]);
    }
}
