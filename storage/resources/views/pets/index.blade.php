@extends('layouts.app')

@section('title', 'Pets Page - PetsApp')

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
    <h1>MODULE PETS</h1>
    <a class="add" href="{{ url ('pets/create')}}">
        <img src="{{asset('images/ico-add.svg')}}" width="30px" alt="">
        Add Pet
    </a>
    <table>
        <tbody>

     @foreach($pets as $pet)
        
            <tr>
                <td><img src="{{ asset ('images/' .$pet->photo)}}" alt="Pet"></td>
                <td>
                   <span>{{$pet->name}}</span>
                   <span>{{$pet->kind}}</span>
                </td>
                <td>
                    <a href="{{url('pets/'.$pet->id)}}" class="show">
                        <img src="{{asset ('images/ico-search.svg')}}" alt="">
                    </a>
                    <a href="{{url('pets/'.$pet->id .'/edit')}}" class="edit">
                        <img src="{{asset ('images/ico-pencil.svg')}}" alt="">
                    </a>
                    <form action="{{url('pets/'. $pet->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="button" class="btn-delete">
                            <img src="{{asset ('images/ico-delete.svg')}}" alt="Delete">
                        </button>
                    </form>
                </td>
            </tr>
    @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    {{$pets->links('layouts.paginator')}}
                </td>
            </tr>
        </tfoot>
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

    <script>
        $(document).ready(function () {
            $('body').on('click', '.btn-delete', function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f7a8c",
                    cancelButtonColor: "#1f7a8c",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit()
                        }
                    })
                })
            })
    </script>
@endsection