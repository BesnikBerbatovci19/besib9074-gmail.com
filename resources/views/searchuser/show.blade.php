@extends('layouts.app')
@section('title')
    Rezultati i Kerkimi
@endsection
@section('title1')
   Rezultati i Kerkimi
@endsection
@section('content')
    <h1 text align="center">Historia e perdoruesit</h1>

    <h5>{{Auth()->user()->name}}</h5>

    <div id="datasearch" text align="right">
        <h5> From: {{ request('from')  }}</h5>
        <h5> To: {{ request('to') }}</h5>
    </div>

    <div class="row">
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
                @foreach($results as $item)
                    <td>
                        {{$item->Titulli}}
                    </td>
                    <td>
                    {{$item->Number}}
                    <td>
                        {{$item->sms_description}}
                    </td>
                    <td>
                        {{$item->created_at}}
                    </td>
            </tr>
            @endforeach
            </tbody>

        </table>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right"></label>
            <div class="col-md-10">
                <button class="btn btn-success" href="/user/searchuser">Kthehu te kerkimi</button>
            </div>
        </div>




@endsection
