<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CodesController extends Controller
{

    public function workCode($search = '')
    {
        return 'Soy el codigo de trabajo' .  $search;
    }

    public function commercialCode($search = '')
    {
        return 'soy el codigo de comercio' . $search;
    }


}
