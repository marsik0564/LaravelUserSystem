@extends('layouts.layout')
@section('content')
        <div class="row flex-column relative justify-center sm:items-center py-4 sm:pt-0">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
            </div>
            <h1>Registration</h1>
            @include('inc.messages')
            <form class="col-3 border rounded" method="POST" action="{{ route('register') }}">
                @csrf 
                <div class="form-group">
                    <label for="login" class="col-form-label-lg">Your login</label>
                    <input class="form-control" id="login" name="login" type="text" value="{{ old('login') }}" placeholder="Login">
                </div>
                <div class="form-group">
                    <label for="name" class="col-form-label-lg">Your full name</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Full name">
                </div>
                <div class="form-group">
                    <label for="birthday" class="col-form-label-lg">Your birthday</label>
                    <input class="form-control" id="birthday" name="birthday" type="text" value="{{ old('birthday') }}" placeholder="Birthday">
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label-lg">Your email</label>
                    <input class="form-control" id="email" name="email" type="text" value="{{ old('email') }}" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="address" class="col-form-label-lg">Your address</label>
                    <input class="form-control" id="address" name="address" type="text" value="{{ old('address') }}" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="city" class="col-form-label-lg">Your city</label>
                    <input class="form-control" id="city" name="city" type="text" value="{{ old('city') }}" placeholder="City">
                </div>
                <div class="form-group">
                    <label for="state" class="col-form-label-lg">Your state</label>
                    <input class="form-control" id="state" name="state" type="text" value="{{ old('state') }}" placeholder="State">
                </div>
                <div class="form-group">
                    <label for="country" class="col-form-label-lg">Your country</label>
                    <input class="form-control" id="country" name="country" type="text" value="{{ old('country') }}" placeholder="Country">
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label-lg">Your password</label>
                    <input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="col-form-label-lg">Confirm your password</label>
                    <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" value="" placeholder="Confirm password">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary" name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>   
@endsection
