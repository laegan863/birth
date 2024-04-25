<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function success($trans_id){
        // dd($trans_id);
    	return view('success', ['trans_id' => $trans_id]);

    }
    protected function death_certificate_form($type){

    	return view('death-certificate-form', ['type' => $type]);

    }
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
