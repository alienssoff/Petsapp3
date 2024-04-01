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
            <h1>Adoption</h1>  
            <img src="{{asset('images/'.$pet->photo)}}" class="photo" alt="Photo"> 
            <div class="info">
                <span>{{$pet->kind}}</span>
                <p>{{$pet->name}}</p>
                <p>{{$pet->photo}}</p>
                <p>{{$pet->kind}}</p>
                <p>{{$pet->weight}} kls</p>
                <p>{{$pet->age  }}Year</p>
                <p>{{$pet->breed }}</p>
                <p>{{$pet->location}}</p>
            </div>
            <form action="" method="POST">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="pet_id" value="{{$pet->id}}">
                <button class="btn">Adop Me</a></button>
            </form>
        </section>
</section>
  

@endsection