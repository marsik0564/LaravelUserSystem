@extends('layouts.layout')
@section('content')
    <div class="row flex-column relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 items-center pt-0">
        <div class="block">
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><h2>Log in</h2></a>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"><h2>Register</h2></a>
        </div>
        @include('inc.messages')
    </div>
@endsection