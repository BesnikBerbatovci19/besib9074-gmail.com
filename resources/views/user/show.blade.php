@extends('layouts.app')
@section('title')
     Shtimi   Perdoruesit
@endsection
@section('title1')
   Shtimi Perdoruesit
@endsection
@section('content')
    <div class="container">
        <h3 text align="center">Shtimi i perdoruesve te ri</h3>


        <form class="form-horizontal" method="post" action="/user/store" autocomplete="off">
            @csrf


            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="name">Emri</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Name"
                           value="{{old('name')}}">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="email">Email-i</label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="email" id="email" name="email" placeholder="Email">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="password"> Fjalkalimi</label>
                <div class="col-md-8">
                    <input type="password" class="form-control" id="password" name="password" required
                           autocomplete="new-password"
                           placeholder="Password">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="confirmpassword"> Konfirmo fjalkalimin</label>
                <div class="col-md-8">
                    <input type="password" class="form-control" id="confirmpassword"
                           name="confirmpassword"
                           required autocomplete="new-password" placeholder="Confirm Password">
                    @error('confirmpassword')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="sectionid">Zgjidh statusin e perdorusit</label>
                <div class="col-md-8">
                    <select class="form-control form-control-lg" name="is_admin" id="sectionid">
                        <option value="1">Admin</option>
                        <option value="0">User</option>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="number_sms">Numri i Mesazhave</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="number_sms" name="number_sms"
                           placeholder="Sheno numrin e mesazhave te lejuar">

                    @error('number_sms')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right"></label>
                <div class="col-md-10">
                    <button class="btn btn-info">Shto Perdoruesin</button>
                </div>
            </div>
        </form>
    </div>

@endsection
