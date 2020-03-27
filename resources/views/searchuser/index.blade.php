@extends('layouts.app')
@section('title')
    Kerkim
@endsection
@section('title1')
    Kerkim
@endsection
@section('content')




        <form class="form-horizontal" method="get" action="/search/searchuserhistory" autocomplete="off">

            @csrf

            <div class="form-group row" >
                <label class="col-md-2 col-form-label text-md-right" for="h1"></label>
                <div class="col-md-6" >
                   <h1>Kerko</h1>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="from">From</label>
                <div class="col-md-6">
                    <input class="form-control"  name="from" id="from">
                    @error('from')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="to">To</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="to" id="to">
                    @error('to')
                    {{$message}}
                    @enderror

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right"></label>
                <div class="col-md-10">
                    <button class="btn btn-success">Search</button>
                </div>
            </div>

        </form>


    <h3 class="history1">Historia e perdoruesit</h3>

    <h5>Emri i  Perdorusit: {{Auth()->user()->name}}</h5>


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
                @foreach($items as $item)
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
        {{ $items->links() }}



    <script>
        $('#from').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
        $('#to').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
    </script>


@endsection
