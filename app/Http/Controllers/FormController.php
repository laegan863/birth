<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\birth_certificates;

use Carbon\Carbon;

class FormController extends Controller
{
    protected function birth_page($type){

        return view('form_birth')->with('type',$type);

    }

    protected function birth_form1(Request $request){

    	if(empty($request->query('state'))){
    		return redirect()->route('form.birthpage');
    	}else{
    		return view('form_birth_continue')
            ->with(['state' => $request->query('state'), 'type' => $request->query('type')]);
    	}
    
    }

    protected function submit_form(Request $request){

        $data = $request->all();
        date_default_timezone_set('America/New_York');
        $data["date_applied"] = \Carbon\Carbon::now()->format('Y-m-d');
        $data["transaction_id"] = uniqid();
        $data["status"] = "pending";
        unset($data["_token"]);

        $model = new birth_certificates;
        $model->fill($data);
        $sql = $model->save();

        if ($sql) {
                
            session()->put(['client_data' => $data]);

        }

    }


}
