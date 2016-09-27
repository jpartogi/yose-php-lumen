<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AstroportController extends BaseController
{
    public function astroport()
    {
      return view('astroport');
    }
}
