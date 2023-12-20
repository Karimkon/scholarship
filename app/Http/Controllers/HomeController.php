<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class HomeController extends Controller
{
    public function home()
    {
        $data['meta_title'] = 'Scholarsips';
      

        return view('home', $data);
    }

}
