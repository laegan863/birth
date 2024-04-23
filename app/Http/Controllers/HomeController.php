<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected function what_is_a_vital_record(){

    	return view('what-is-a-vital-record');

    }
    protected function contact(){

    	return view('contact-us');

    }

    protected function how_to_obtain_a_copy(){

    	return view('how-to-obtain-a-copy');

    }

    protected function about(){

    	return view('about-us');

    }

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
