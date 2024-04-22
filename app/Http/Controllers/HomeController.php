<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index(){

    	return view('index');

    }

    protected function birthcertificate(){

    	return view('birthcertificate');

    }

    protected function deathcertificate(){

    	return view('deathcertificate');

    }

    protected function faqs(){

    	return view('faqs');
    	
    }
}
