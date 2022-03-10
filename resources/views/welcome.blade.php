<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>XSS & SQL Injection</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h1 class="text-white font-bold text-4xl">Cross-Site-Scripting (XSS) & SQL Injection</h1>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="text-lg leading-7 font-semibold"><a href="/reflected-xss" class="underline text-gray-900 dark:text-white">Reflektiertes XSS</a></div>
                            </div>

                            <div class="">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Reflektierte XSS-Angriffe, auch als nicht-persistente Angriffe bekannt, treten auf, wenn ein bösartiges Skript von einer Web-Anwendung in den Browser des Opfers injiziert wird. Das Skript wird über einen Link aktiviert, der eine Anfrage an eine Website mit einer XSS-Schwachstelle sendet, die die Ausführung von bösartigen Skripten ermöglicht
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="text-lg leading-7 font-semibold"><a href="/persistent-xss" class="underline text-gray-900 dark:text-white">Persistentes XSS</a></div>
                            </div>

                            <div class="">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Persistentes XSS, auch bekannt als stored XSS, ist die gefährlichere Schwachstelle. Es tritt auf, wenn ein bösartiges Skript direkt in eine anfällige Web-Anwendung injiziert wird. Somit wird der Schadcode immer ausgeführt, wenn das Opfer die Webseite benutzt und funktioniert ohne Benutzerinteraktion.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">

                                <div class="text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white"></a></div>
                            </div>

                            <div class="">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <div class=" text-lg leading-7 font-semibold text-gray-900 dark:text-white"><a href="/sql-injection" class="underline text-gray-900 dark:text-white">SQL Injection</a></div>
                            </div>

                            <div class="">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    SQL Injection ist das Ausnutzen einer Sicherheitslücke in Zusammenhang mit SQL-Datenbanken. Die Sicherheitslücke entsteht durch einen Programmierfehler in einem Programm, das auf die Datenbank zugreift.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
