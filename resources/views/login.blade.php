@extends('layouts.layout')
@section('content')
    <div class="row flex-column relative justify-center sm:items-center py-4 sm:pt-0">
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        </div>
        <h1>Log in</h1>
        @include('inc.messages')
        <form class="col-3 border rounded" method="POST" action="{{ route('login') }}">
            @csrf 
            <div class="form-group">
                <label for="login" class="col-form-label-lg">Your login</label>
                <input class="form-control" id="login" name="login" type="text" value="" placeholder="Login">
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label-lg">Enter password</label>
                <input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary" name="submit" type="submit">Log in</button>
            </div>
        </form>
    </div>
@endsection
