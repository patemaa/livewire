<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <style>
            body {
                display: flex;
                justify-content: start;
                margin: 0;
            }

            body nav {
                position: fixed;
                width: 5rem;
                display: flex;
                padding: 1rem;
                flex-direction: column;
                align-items: flex-start;
                border-right: 1px solid black;
                height: 100vh;
            }

            body nav a {
                margin-bottom: .5rem;
            }

            body nav a:visited {
                color: inherit;
            }

            body nav a.current {
                font-weight: 600;
            }

            body div {
                padding: 1rem;
                padding-left: 8rem;
            }

        </style>
    </head>
    <body>
        <nav>
            <a href="/" @class(['current' => request()->is('/')])>Todos</a>
            <a href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
        </nav>

        {{ $slot }}
    </body>
</html>
