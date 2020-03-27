@extends('layouts.app')
@section('title')
    Rreth Programit
@endsection
@section('title1')
    Rreth Programit
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <a href="/user">Perdoruesit</a>
            <p>Linku <b>Perdoruesi</b>. Perdoret per shtimin, editimit ose fshirjen e perdoruseve dhe eshte i lejuar vetem
                per
                perdoruesit qe e kan statusin e <b>Adminit</b>.
            </p>
            <a href="/">Sms</a>
            <p>Linku <b>Sms</b>. Perdoret per dergimin e Mesazhave, ne kete link mund te dergoni vetem nje mesazh me tekst dhe titull dhe eshte i lejuar per dy statuse te adminave <per>

                </per><b>Admin</b> dhe <b>Perdorues i thjesht</b>. Vrejtje numri nuk duhet te jet me i gjat se 11 numra dhe duhet te jet ne fillim me shifra <b>383</b> </p>
                <a href="/user/searchuser">Historia e Perdoruesit</a>
                <p>Linku <b>Historia e Perdoruesit</b>. Perdoret per te shfaqur histori n e perdoruesit qe ka derguar mesazhe </p>
        </div>
        <div class="col-lg-6">
            <a href="/searchadmin">Historia</a>
            <p>Linku <b>Historia</b>. Perdoret per te kerkuar historin e perdoruesve qe kan derguar mesazha sipas kohes
                dhe eshte i lejuar vetem per perdoruesit qe kan statusin e <b>Adminit</b>
            </p>

            <a href="/Multi">Multi Sms</a>
            <p>Linku <b>Multi Sms</b>. Perdoret per dergimin e nje ose me shum mesazha ne ket formular mund te dergoni me shum se nje mesazha me titull te njet dhe tekst por
            me numra te ndryshum. Per te qen numri valid qe ta dergosh ne fillim duhet te ket shifren <b>383</b> dhe pastaj dy  numrat e tjer duhen te jen
                numrat e operatorve te kosoves siq jan <b>"43,44,45,46,48,49"</b> dhe numri nuk duhet te ket me shum se 11 shifra dhe duhet te ndahet me
                <b>" , "</b>.
            </p>
        </div>
    </div>


@endsection
