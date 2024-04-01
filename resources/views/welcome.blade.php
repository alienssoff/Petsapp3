@extends('layouts.app')


@section ('content')
<header>
    <h1>El Club De Los</h1>
    <h2> Peludos</h2>
    <img src="{{asset('images/logo.svg')}}" alt="Logo">
</header>
<section class="homepage">
    
    <a href="{{url('login/')}}">Enter</a>
</section>
@endsection

