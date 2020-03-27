<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {

        $data['user'] = User::all();

        return view('user.index',$data);
    }
    public function show(){

            return view('user.show');
        }
    public function store(Request $request){
        //dd(request()->all());

        $request->validate([
            'name' => 'required|min:3',
            'is_admin' => 'required',
            'email' => 'required|email',
            'number_sms' => 'required',
            'password' => 'required|min:6|',
            'confirmpassword' => 'required_with:password|same:password|min:6',


        ]);

            $user = User::create([
                'name' => $request->name,
                'is_admin' => $request->is_admin,
                'email' => $request->email,
                'number_sms' => $request->number_sms,
                'password' => Hash::make($request->password),


            ]);
        return redirect(route('user.index'));
    }
    public function edit($id){
        $data['user'] = User::find($id);
         return view('user.update',$data);
    }
    public function update(Request $request,User $user,$id){
        //dd($request);
       $data = $request->validate([
            'name' => 'sometimes|required|min:3',
            'is_admin' => 'sometimes|required',
            'email' => 'required|email',
            'number_sms' => 'required|',
           'password' => 'nullable|min:6|',
           'confirmpassword' => 'nullable|required_with:password|same:password|min:6',
        ]);

        $user = User::find($id);
        //$user->update($request->all())
        if($request->password == null){
            $user->update([
                'name' => $request->name,
                'is_admin' => $request->is_admin,
                'email' => $request->email,
                'number_sms' => $request->number_sms,
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'is_admin' => $request->is_admin,
                'email' => $request->email,
                'number_sms' => $request->number_sms,
                'password' => Hash::make($request->password),
            ]);
        }


        return redirect(route('user.index'));
    }

    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index');
    }
}
