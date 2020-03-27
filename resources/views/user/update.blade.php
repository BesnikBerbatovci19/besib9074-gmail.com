@extends('layouts.app')
@section('title')
   Editimi i  Perdoruesve
@endsection
@section('title1')
    Editimi i Perdoruesve
@endsection
@section('content')


    <div>

        <form class="form-horizontal" method="post" action="/user/update/{{$user->id}}" autocomplete="off">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="name">Emri</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Emri"
                           value="{{$user->name}}">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="email">Email-i</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="email" id="email" name="email" placeholder="Email"
                           value="{{$user->email}}">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="password">Fjalkalimi</label>
                <div class="col-md-8">
                    <input type="password" class="form-control" id="password" id="password" name="password"
                           placeholder="Password">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="confirmpassword">Konfirmo fjalkalimin</label>
                <div class="col-md-8">
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                           placeholder="Confirm Password">
                    @error('confirmpassword')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for=is_admin>Zgjidh statusin e perdorusit</label>
                <div class="col-md-8">
                    <select class="form-control form-control-lg " name="is_admin" id="is_admin">
                        <option value="1" @if($user->is_admin == 1) selected @endif>Admin</option>
                        <option value="0" @if($user->is_admin == 0) selected @endif>User</option>
                    </select>


                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="number_sms">Numri i mesazhave</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="number_sms" name="number_sms"
                           value="{{$user->number_sms}}">

                    @error('number_smm')
                    {{ $message }}
                    @enderror

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right"></label>
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">Perditso</button>
                </div>
            </div>
        </form>

        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right"></label>
            <div class="col-md-10">
                <form class="form-horizontal" method="post" action="/user/delete/{{$user['id']}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Fshi</button>
                </form>
            </div>
        </div>

    </div>

    </div>


@endsection
