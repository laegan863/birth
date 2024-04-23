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

    protected function terms(){

        return view('terms_of_use');

    }

    protected function privacy(){

        return view('privacy');
        
    }

    protected function cookie(){

        return view('cookie');

    }

    protected function refund(){

        return view('refund_policy');

    }

    protected function how_to_get_birth(){

        return view('how_to_get_birth');

    }
}
