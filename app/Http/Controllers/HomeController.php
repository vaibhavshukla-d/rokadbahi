<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        $type_of_business=Auth::user()->type_of_business;
        if($type_of_business =='Sale/Purchase')
        {
            return view('salepurchase.dashboard');
        }
        else
        {
            return view('dashboard');
        }
    }
}
