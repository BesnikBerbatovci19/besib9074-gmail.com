<?php

namespace App\Http\Controllers;

use App\Rules\Numerarray;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\Validator;

class MultiSmsController extends Controller
{
    public function index()
    {

        return view('MultiSms.index');
    }

    public function store(Request $request)
    {
          //dd($request);
        $updatesms = \App\User::find(auth()->user()->id);
        //dd($updatesms);
        if ($updatesms->number_sms <= 0) {
            /*Nese  numri i sms ka mbaru dhe eshte i  barabart me 0 ather re kthen ne viwe e report*/
            return view('report.index');
        } else {
            //dd($request->all());
            $request->validate([
                'titulli' => 'required|min:3|max:11',
                'numri' => ['required'],
                'sms_description' => 'required|min:3|max:164',
            ]);
             //dd($request->numri);
            $trim = str_replace(' ','',$request->numri);

             $number = str_replace(array("\n", "\r"),'', $trim);

             $numri = explode(",",$number);

            $ruls = [];
            foreach ($numri as $numri) {
                if (strlen($numri) == 11 && $numri[0] == 3 && $numri[1] == 8 && $numri[2] == 3 && $numri[3] == 4 && ($numri[4] == 3 || $numri[4] == 4
                    || $numri[4] == 5 || $numri[4] == 6 || $numri[4] == 8 || $numri[4] == 9)) {
                    $ruls[] = $numri;
                }else{
                    return Redirect::back()->withErrors(['Mesazhat nuk shkuan ka ndonje gabim']);
                }
            }
            $count = count($ruls);
            if ($count > $updatesms->number_sms) {
                return view('report.limit');
            } else {
                foreach ($ruls as $row) {
                    \App\Sms::create([
                        'user_id' => auth()->user()->id,
                        'titulli' => $request->titulli,
                        'Number' => $row,
                        'sms_description' => $request->sms_description,
                    ]);
                    $updatesms->update([
                        'number_sms' => $updatesms->number_sms - 1,
                    ]);

                }
                    return redirect(route('multi.index'))->with('status', 'Mesazhat u derguan ');


            }
        }
    }
}

