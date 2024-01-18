<!DOCTYPE html>
<html lang="pt-ao">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ $titlePage ? $titlePage . ' - TopHit' : 'TopHit'  }} </title>
        <link rel="stylesheet" href="{{ url('assets/styles/css/global.css') }}">
    </head>
    <body>
        <div id="appLayout">
            <div id="left">
                <x-header />
                <x-global.descApp />
            </div>
            <div id="rigth">
                <main id="main">
                    {{ $slot }}
                </main>
                <x-footer />
            </div>
        </div>
    </body>
</html>
