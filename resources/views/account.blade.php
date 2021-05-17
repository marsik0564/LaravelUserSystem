@extends('layouts.layout')
@section('content')
        <div class="row flex-column relative justify-center sm:items-center py-4 sm:pt-0">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{ route('logout') }}" class="text-sm text-gray-700 underline">Log out</a>
            </div>
            <h1>Personal account</h1>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Profile</h3>
                        <hr>
                        <b>Login: </b>{{ Auth::user()->login }} <br>
                        <b>Full name: </b>{{ Auth::user()->name }} <br>
                        <b>Birthday: </b>{{ Auth::user()->birthday }} <br>
                        <b>Email: </b>{{ Auth::user()->email }} <br>
                        <b>Address: </b>{{ Auth::user()->address }} <br>
                        <b>City: </b>{{ Auth::user()->city }} <br>
                        <b>State: </b>{{ Auth::user()->state }} <br>
                        <b>Country: </b>{{ Auth::user()->country }} <br>
                    </div>
                </div>
            </div>
        </div>   
@endsection
