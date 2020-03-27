<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sms;
use Illuminate\Support\Facades\DB;
use App\User;

class SearchController extends Controller
{
    //
    public function index()
    {


        $data['users'] = \App\User::all();
        // $data['search'] = \App\Sms::paginate(12);
        //dd($data['search']);
        return view('searchadmin.index', $data);
    }

    public function searchuser()
    {
        /*Kerkimi ne baz te userit te authentikum qe ne fillim shfaq te gjith sms te ati useri te insertuar ne ate muaj qe eshte*/
        $items = \App\Sms::whereDate('created_at', '>=',date('Y-m-01'))
            ->whereDate('created_at', '<=',date('Y-m-d'))
            ->where('user_id', '=', auth()->user()->id)->paginate(12);

        return view('searchuser.index', compact('items'));

    }

    public function searchuserhistory(Request $request){
        //dd($request);

        $request->validate([
            "from" => 'required|date_format:Y-m-d',
            "to" => 'date_format:Y-m-d',
        ]);
        $results = Sms::whereDate('created_at', '>=', $request->from)
            ->whereDate('created_at', '<=', $request->to)
            ->where('user_id' ,"=",auth()->user()->id)
            ->get();

        return view('searchuser.show',compact('results'));
    }

    public function show(Request $request)
    {
        //dd($request->all());
        /*Kerkimi  i  avancuar qe eshte per admina dhe mund te kerkoj gjith userat*/
        $request->validate([
            "fromto" => 'required|date_format:Y-m-d',
            "todate" => 'date_format:Y-m-d',
            "is_admin" => 'required|numeric'
        ]);

        if ($request->is_admin == 0) {
            $results = Sms::whereDate('created_at', '>=', $request->fromto)
                ->whereDate('created_at', '<=', $request->todate)
                ->get();
        } else {
             $results = Sms::whereDate('created_at', '>=', $request->fromto)
                ->whereDate('created_at', '<=', $request->todate)->
                where('user_id' ,"=",$request->is_admin)
                ->get();
        }
        $users = \App\User::all();

        return view('searchadmin.index', compact('results','users'));

    }
}
