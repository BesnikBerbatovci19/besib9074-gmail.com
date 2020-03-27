<?php

namespace App\Http\Controllers;

use App\Sms;

use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class SmsController extends Controller
{

    public function index()
    {
        return view('SmS.index');

    }


    public function store(Request $request)
    {

        //dd($request);
        $updatesms =\App\User::find(auth()->user()->id);



        if($updatesms->number_sms ==0){
            /*Nese  numri i sms ka mbaru dhe eshte i  barabart me 0 ather re kthen ne viwe e report*/
            return view('report.index');
        }else {
            /* insertimi i sms ne table*/
            $request->validate([
                    'titulli' => 'required|min:3|max:11',
                    'numri' => 'required|regex:/(383)/|min:11|max:11',
                    'sms_description' => 'required|min:3|max:164',]
            );
            //dd($request);
            $updatesms->update([
                'number_sms' => $updatesms->number_sms - 1,
            ]);

            $sms = \App\Sms::create(['user_id' => auth()->user()->id,
                'titulli' => $request->titulli,
                'Number' => $request->numri,
                'sms_description' => $request->sms_description,
            ]);

            return redirect('/')->with('status', 'Mesazhi u  dergua!');
        }


    }
}
