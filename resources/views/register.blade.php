@extends('layouts.base')

@section('head')
@parent
<script src='{{ url("js/check_registrazione.js") }}' defer="true"></script>
@endsection

@section('content')
<div id="flex-containersection">
    <p>REGISTRATI</p>
    <main>
        <form name="formReg" method="post" >
        @csrf
            @if($error == 'empty_fields')
            <span id="nomeSpan">Compilare tutti i campi</span>
            @endif
            <label>Nome<input type="text" name="nome" id="nome" value="{{ old("nome") }}" placeholder="nome"></input></label>
            <span class="hidden" id="nomeSpan">Nome utente non disponibile</span>
            <label>Cognome <input type="text" name="cognome" id="cognome" value="{{ old("cognome") }}" placeholder="cognome"></label>
            <span class="hidden" id="cognomeSpan">Cognome utente non disponibile</span>
            <label>Username <input type="text" name="username" id="username" value="{{ old("username") }}" placeholder="nome utente"></label>         
            <span class="hidden" id="usernameSpan">Username utente non disponibile</span>               
            @if($error == 'usernamenonvalido')
            <span id="usernameSpan">Username utente non disponibile</span>
            @endif
            <label>Email <input type="text" name="email" id="email" value="{{ old("email") }}" placeholder="email"></input></label>
            <span class="hidden" id="emailSpan">Indirizzo email non valido</span>
            @if($error == 'emailnonvalida')
            <span id="emailSpan">Indirizzo email non disponibile</span>
            @endif
            <label>Password <input type="Password" name="password" id="password" placeholder="password"></label>
            <span class="hidden" id="passSpan">Inserisci almeno 8 caratteri</span>
            @if($error == 'passwordcorta')
            <span id="passSpan">Inserisci almeno 8 caratteri</span>
            @endif
            <label>Conferma Password <input type="Password" name="conferma_password" id="confpass" placeholder="conferma password"></label>
            <span class="hidden" id="confpassSpan">Le password non coincidono</span>
            @if($error == 'passworderrata')
            <span id="confpassSpan">Le password non coincidono</span>
            @endif
            <label>&nbsp;<input type="submit" value="Registrati"></label>
        </form>
    </main>
    <p>Hai gia un account?&nbsp;<a href="{{ route('login') }}">Accedi</a></p>
</div>
@endsection

