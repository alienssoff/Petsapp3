{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>--}}
@extends('layouts.app')

@section('title', 'Dashboard Page - PetsApp')

@section('content')

@include('layouts.menuburger')

    <header class="nav level-1">
        <a href="">
            <img src="{{asset ('images/ico-back.svg')}}" alt="back">
        </a>

        <img src="{{asset('images/logo.svg')}} " width="200px" alt="Logo">
       
        <a href="javascript:;" class="mburger">
            <img src="{{asset('images/burger.svg')}}" alt="">
        </a>
    </header>

    <section class="module">
    <section class="dashboard">
        <h1>Dashboard: Admin</h1>
        <menu>
            <ul>
                <li>
                    <a href="{{url('users')}}">
                        <img src="{{asset('images/ico-users.svg')}}" alt="Users">
                        Module User
                    </a>
                </li>
                <li class="pet">
                    <a href="{{url('pets')}}">
                        <img src="{{asset ('images/ico-pets.svg')}}" alt="Pets">
                        Module Pets
                    </a>
                </li>
                <li>
                    <a href="{{url('adoptions')}}">
                        <img src="{{asset('images/ico-adoptions.svg')}} " alt="Adoptions">
                        Module Adoptions
                    </a>
                </li>
            </ul>
        </menu>
    </section>
    </section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('body').on('click', '.mburger',  function () {
            $('.menu').addClass('open')
        })
        $('body').on('click', '.closem',  function () {
            $('.menu').removeClass('open')
        })
    })
</script>
@endsection