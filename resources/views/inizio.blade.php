@extends('layouts.base')

@section('content')
                <div id="flex-base">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
@endsection