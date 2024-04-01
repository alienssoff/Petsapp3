@extends('layouts.app')

@section('title', 'Create Pet Page - PetsApp')

@section('content')
<header class="nav level-2">

    <a href="{{url('pets')}}">
        <img src="{{asset ('images/ico-back.svg')}}" alt="back">
    </a>
    <img src="{{asset ('images/logo.svg')}} "width="200px" alt="Logo">
   
    <a href="" class="mburger">
        <img src="{{asset('images/burger.svg')}}"alt="Hamburguer">
    </a>
</header>
<section class="register create">
    <form action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <img src="{{ asset('images/ico-upload.svg') }}" id="upload" width="240px" alt="Upload">
        <input type="text" name="name" placeholder="Name"  value="{{old('name')}}">
        <input type="file" name="photo" id="photo" accept="image/*" >
        <input type="text" name="kind" placeholder="Kind"  value="{{old('kind')}}">
        <input type="text" name="weight" placeholder="Weight"  value="{{old('weight')}}" >
        <input type="email" name="email" placeholder="Email"  value="{{old('email')}}" >
        <input type="text" name="age" placeholder="Age" >
        <input type="text" name="breed" placeholder="Breed" >
        <input type="text" name="location" placeholder="Location" >
        <button type="submit">ADD</button>
    </form>
    
</section>

@section('js')

<script>
$(document).ready(function () {
    $('#upload').click(function (e) {
        e.preventDefault();
        $('#photo').click()
       
    });
    $('#photo').change(function (e) {
        e.preventDefault();
        let reader = new FileReader()
        reader.onload = function(event)
{
    $('#upload').attr('src', event.target.result);
}            
reader.readAsDataURL(this.files[0])
    });
});
</script>

@if (count($errors->all())>0)
@php $error = '' @endphp
@foreach($errors ->all() as $message)
    @php $error .='<li>' . $message . '</li>' @endphp
@endforeach
 <script>
    $(document).ready(function(){
        Swal.fire({
            position: "top-end",
            title: "Ops!",
            html: "@php echo $error @endphp",
            icon: "error",
            showConfirmButton: false,
            timer: 5000
        })
    })
 </script>
 @endif
@endsection