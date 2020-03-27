@extends('layouts.app')
@section('title')
    Perdoruesit
@endsection
@section('title1')
 Perdoruesit
@endsection
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">

                <h1 text align="center">Administrimi</h1>

                    <a class="btn btn-success" href="/user/register"> Shto Perdoruesit</a>

                <hr>


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Emri i userit</th>
                        <th scope="col">Email-i</th>
                        <th scope="col">Statusi i Perdoruesit</th>
                        <th scope="col">Editimi</th>


                    </thead>
                    @foreach($user as $user)
                        @csrf
                        <tbody>
                        <tr>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['email']}}</td>


                            @if($user['is_admin'] == 1)
                                <td>Admin</td>
                            @else
                                <td>user</td>
                            @endif
                            <td>
                                <a class="btn btn-primary btn-round" href="/user/{{$user['id']}}/edit">Edito</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
