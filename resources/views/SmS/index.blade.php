@extends('layouts.app')
@section('title')
   Plotsimi i formularit
@endsection
@section('title1')
   Plotsimi i  fromularit
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">

                <h1 text align="center">Formulari</h1>
                <form class="form-horizontal" method="post" action="sms-store" autocomplete="off">
                    @csrf

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="titulli">Titulli</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="titulli" id="titulli"
                                   placeholder="Sheno Tiullin" value="{{old('titulli')}}">
                            @error('titulli')
                            {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="number">Numri</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="numri" name="numri"
                                   placeholder="+383"value="{{old('numri')}}" >
                            @error('numri')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="sms_description">Mesazhi</label>
                        <div class="col-md-8">
                        <textarea class="form-control" id="sms_description" name="sms_description"
                                  placeholder="Sheno mesazhin" value="{{old('sms_description')}}"></textarea>
                            @error('sms_description')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif



@endsection
