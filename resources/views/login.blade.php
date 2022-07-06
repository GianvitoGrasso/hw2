@extends('layouts.base')

@section('content')
<div id="flex-containersection">
    <p>LOGIN</p>
    <main>
        <form name="login" method='post'>
        @csrf
                @if($error == 'empty_fields')
                <div><span id="nomeSpan">Compilare tutti i campi</span></div>
                @endif
                @if($error == 'wrong')
                <div><span id="nomeSpan">User o Password Errati</span></div>
                @endif
                <label>Username <input type="text" name="username" placeholder="username" value="{{ old("username") }}"></input></label>
                <label>Password <input type="Password" name="password" placeholder="password"></label>
                <label>&nbsp;<input type="submit" value="Login"></label>
        </form>
    </main>
    <p>Non hai un account?&nbsp;<a href="{{ route('register') }}">Iscriviti</a></p>
</div>
@endsection