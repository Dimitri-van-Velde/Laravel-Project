@extends('layouts.layout')


@section('topmenu')
    <nav class="card">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sn:items-stretch sm:justify-start">
                    <div class="sm:block sm:ml-6">
                        <div class="flex space-x-4">

                            <a href="{{route('open.games.index')}}" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-150">Games</a>
                            <a href="{{route('cart.index')}}" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-150">Winkelwagen</a>
                            @guest()
                            <a href="{{route('login')}}" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-150">Login</a>
                            <a href="{{route('register')}}" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-150">Registreer</a>
                            @endguest
                            @hasanyrole('user|salesperson|admin')
                            <a href="{{route('logout')}}" class="text-gray-800 hover:text-teal-600 transition ease-in-out duration-150" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none">
                                @csrf
                            </form>
                            @endhasanyrole
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <section class="text-gray-800 hover:text-teal-600 body-font">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sn:items-stretch sm:justify-start">
                    <div class="sm:block sm:ml-6">
                        <div class="flex space-x-4">
                    <p class=" hover:text-teal-600 transition ease-in-out duration-150"> Welkom op onze website!</p> <br>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>

@endsection
