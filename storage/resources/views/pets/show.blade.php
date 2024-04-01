@extends('layouts.app')

@section('title', 'Show Pet - PetsApp')

@section('content')


<header class="nav level-0">

    <a href="{{url('pets')}}">
        <img src="{{asset ('images/ico-back.svg')}}" alt="back">
    </a>
    <img src="{{asset ('images/logo.svg')}} "width="200px" alt="Logo">
   
    <a href="" class="mburger">
        <img src="{{asset('images/burger.svg')}}"alt="Hamburguer">
    </a>
</header>
<section class="module">
        <section class="show">
            <h1>Show Pet</h1>  
            <img src="{{asset('images/'.$pet->photo)}}" class="photo" alt="Photo"> 
            <div class="info">
                <span>{{$pet->kind}}</span>
                <p>{{$pet->name}}</p>
                <p>{{$pet->photo}}</p>
                <p>{{$pet->kind}}</p>
                <p>{{$pet->weight}}</p>
                <p>{{$pet->age  }}</p>
                <p>{{$pet->breed }}</p>
                <p>{{$pet -> location}}</p>
            </div>
        </section>
</section>
  

@endsection