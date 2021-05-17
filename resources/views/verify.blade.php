@extends('layouts.layout')
@section('content')
    <div class="row flex-column relative justify-center sm:items-center py-4 sm:pt-0">
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <a href="{{ route('logout') }}" class="ml-4 text-sm text-gray-700 underline">Log out</a>
        </div>
        <h1>Two Factor Verification</h1>
        <p class="text-muted">
            You have received an email which contains two factor login code.
        </p>
        @include('inc.messages')
        <form class="col-3 border rounded" method="POST" action="{{ route('verify') }}">
            @csrf 
            <div class="form-group">
                <label for="email_verification_code" class="col-form-label-lg">Enter code</label>
                <input class="form-control" id="email_verification_code" name="email_verification_code" type="text" value="" placeholder="">
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary" name="submit" type="submit">Verify</button>
            </div>
        </form>
    </div>
@endsection
