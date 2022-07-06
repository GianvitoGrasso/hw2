<!DOCTYPE html>
<html>
    <head>
        @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{ url("css/grafica.css") }}'>
        @show
    </head>
    <body>
        <nav>
            <div id="containerNav" >
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
            </div>
        </nav>
        <article>

            <section>
                @yield('content')
            </section>
        </article>
        <footer>
            <div id="flex-containerfooter">
                <div class="footeritems">Gianvito Grasso 1000026771</div>
            </div>
    </footer>
    </body>
</html>