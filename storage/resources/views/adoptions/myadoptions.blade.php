@extends('layouts.app')

@section('title', 'Adoptions Page - PetsApp')

@section('content')


<header class="nav level-2">

    <a href="{{route('dashboard')}}">
        <img src="{{asset ('images/ico-back.svg')}}" alt="back">
    </a>
    <img src="{{asset ('images/logo.svg')}} "width="200px" alt="Logo">
   
    <a href="" class="mburger">
        <img src="{{asset('images/burger.svg')}}"alt="Hamburguer">
    </a>
</header>
<section class="module">
    <h1>My Adoptions</h1>
    <a class="add" href="{{ url ('adoptions/create')}}">
        <img src="{{asset('images/ico-add.svg')}}" width="30px" alt="">
        Add Adoption
    </a>
    <table>
        <tbody class='adoptions'>
        @forelse ($adps as $adop)
            <tr>
                <td>
                    <img src="{{ asset('images/'.$adop->user->photo) }}" alt="User">
                    <img src="{{ asset('images/'.$adop->pet->photo) }}" alt="User">
                </td>
                <td>
                    <span>{{ $adop->user->fullname }}</span>
                    <span>{{ $adop->pet->name }}</span>
                    <span>{{ $adop->created_at->diffforhumans() }}</span>
                </td>
            </tr>
            @empty
                
            <p class="no-adoptions">   
                Adoptions no yet... 
                <br>
                Please adopt 🥺
            </p>
            @endforelse
        </tbody>
        
    </table>
</section>
@endsection

@section('js')
    @if (session('message'))
        <script>
        $(document).ready(function () {
            Swal.fire({
                position: "top-end",
                title: "Great job!",
                text: "{{ session('message') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 5000
            })
        })
        </script>
    @endif
@endsection


