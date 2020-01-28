<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{	
    public function index(){
        return view('Templates/index');
    }

    public function notices(){
        return view('');
    }
    public function branches(){
        return view('Templates/branches');
    }
    public function downloads(){
        return view('');
    }
}
