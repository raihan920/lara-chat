<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/js/app.js', 'resources/css/app.scss'])
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> Hello world!!! </h2>
                </div>
            </div>
        </div>
    </body>
</html>
