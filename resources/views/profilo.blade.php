<!DOCTYPE html>
<html>
    <head>
        <script>
            const BASE_URL = "{{ url('/') }}/";
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{ url("css/home.css") }}'>
        <script src='{{ url("js/profilo.js") }}' defer="true"></script>
    </head>
    <body>
        <nav>
            <div id="containerNav" >
                <a class="itemsNav" href="{{ url('login') }}">Home</a>
                <a class="itemsNav" href="{{ url('profilo') }}">Benvenuto {{ $username }}</a>
                <p class="itemsNav"><a href="{{ url('logout') }}">Logout</a></p>
            </div>
        </nav>
        <article>
            <section>
                <div class ="flex">
                    <p>Il tuo Profilo:</p>
                    <div class="first">
                        <p>Nome: {{ $nome }}</p>
                        <p>Cognome: {{ $cognome }}</p>
                        <p>Username: {{ $username }}</p>
                        <p>Email: {{ $email }}</p>
                        <p>DataCreazione: {{ $created_at }}</p>
                        <p>UltimaModifica: {{ $updated_at }}</p>
                        <p>NumeroPreferiti: {{ $NumeroPreferiti }}</p>
                    </div>
                </div>
                <div class ="flex-button">
                    <button>Cancella il profilo</button>
                </div>
            </section>
        </article>
        <footer>
            <div id="flex-containerfooter">
                <div class="footeritems">Gianvito Grasso 1000026771</div>
            </div>
    </footer>
    </body>
</html>