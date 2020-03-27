@extends('layouts.app')
@section('title')
    Kerkim i Avancuar
@endsection
@section('title1')
    Kerkim i Avancuar
@endsection
@section('content')


            <form  class="form-horizontal " method="get" action="/search/show" autocomplete="off">
                <h3 text align="center">Kerkimi i Avancuar</h3>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="fromto">From</label>
                    <div class="col-md-8">
                        <input class="form-control" name="fromto" id="fromto" placeholder="2020-02-02"/>
                        @error('fromto')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="todate">To</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="todate" id="todate" placeholder="2020-02-02">
                        @error('todate')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="sectionid">Check for adamin</label>
                    <div class="col-md-8">
                        <select class="form-control form-control-lg" name="is_admin" id="sectionid">
                            <option value="0">Default</option>

                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach

                        </select>

                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right"></label>
                    <div class="col-md-8">
                        <button class="btn btn-success">Kerko</button>
                    </div>
                </div>

            </form>


            @if(isset($results))
                <br>
                <div id="datasearch" text align="right">
                    <h5> From: {{ request('fromto')  }}</h5>
                    <h5> To: {{ request('todate') }}</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Titulli</th>
                        <th scope="col">Numri</th>
                        <th scope="col">Pershkrimi</th>
                        <th scope="col">Data</th>
                    </thead>
                    </tr>

                    <tbody>
                    <tr>
                        @foreach($results as $user)
                            <td>
                                {{$user->Titulli}}
                            </td>
                            <td>

                                {{$user->Number}}
                            </td>
                            <td>

                                {{$user->sms_description}}

                            </td>

                            <td>
                                {{$user->created_at}}
                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
    @endif

    <script>
        $('#fromto').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
        $('#todate').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
    </script>
@endsection























































{{--@foreach($order as $order)
       <ul>
           <li>{{$order->Titulli}}</li>
           <li>{{$order->Number}}</li>
           <li> {{$order->sms_description}}</li>
           <li>{{$order->data}}</li>
       </ul>--}}

