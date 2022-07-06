<!DOCTYPE html>
<html>
    <head>
        <script>
            const BASE_URL = "{{ url('/') }}/";
            const csrf_token = "{{ csrf_token() }}";
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{ url("css/home.css") }}'>
        <script src='{{ url("js/home.js") }}' defer="true"></script>
    </head>
    <body>
        <nav>
            <div id="containerNav" >
                <a class="itemsNav" href="{{ url('login') }}">Home</a>
                <a class="itemsNav" href="{{ url('profilo') }}">Benvenuto {{ $username }}</a>
                <form name="form" id="form">
                <label><p>Scrivi il nome di uno sportivo :</p> <input type="text" name="contenuto" id="contenuto"> 
                    <input type="submit" value="Cerca"></label>
                </form>
                <p class="itemsNav"><a href="{{ url('logout') }}">Logout</a></p>
            </div>
        </nav>
        <article>
            <section>
                <div class ="flex-containersection">
                    <p>I tuoi Preferiti:</p>
                </div>
                <div class ="flex-button">
                    <button>Cancella tutti i preferiti</button>
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