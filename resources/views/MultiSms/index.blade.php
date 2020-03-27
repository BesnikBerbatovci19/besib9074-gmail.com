@extends('layouts.app')
@section('title')
    Plotsimi i Fromularit
@endsection
@section('title1')
    Plotsimi i Fromularit
@endsection
@section('content')


    <div class="row ">
        <div class="col-12">
            @if (session('status'))

                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                        <div class="toast-header">
                            <strong class="mr-auto">Njoftim</strong>

                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            {{ session('status') }}
                        </div>
                    </div>
            @endif
                @if($errors->any())
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                        <div class="toast-header">
                            <strong class="mr-auto">Njoftim</strong>

                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            {{$errors->first()}}
                        </div>
                    </div>
                @endif

            <h3 text align="center">Multi Sms</h3>
            <form class="form-horizontal" method="post" action="/Multi-store" autocomplete="off">
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
                    <label class="col-md-2 col-form-label text-md-right" for="numri">Numrat</label>
                    <div class="col-md-8">
                            <textarea class="form-control" id="numri" name="numri" placeholder="Sheno Numrat"
                                      value="{{old('numri')}}"></textarea>
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

        <script>
            $(document).ready(function () {
                $('.toast').toast('show');
            });
        </script>





@endsection
