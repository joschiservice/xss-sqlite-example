<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reflektiertes XSS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">Zurück zur Startseite</a>
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-gray-400">
        <div class="p-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                                            class="underline text-gray-900 dark:text-white">Reflektiertes
                    XSS</a></div>
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Reflektierte XSS-Angriffe, auch als nicht-persistente Angriffe bekannt, treten auf, wenn ein bösartiges
                Skript von einer Web-Anwendung in den Browser des Opfers injiziert wird. Das Skript wird über einen Link
                aktiviert, der eine Anfrage an eine Website mit einer XSS-Schwachstelle sendet, die die Ausführung von
                bösartigen Skripten ermöglicht<br><br>
                <a class="text-white"
                   href="/reflected-xss?code=%3Cscript%20type%3D%22text%2Fjavascript%22%3Ealert%28%22Der%20XSS-Angriff%20war%20erfolgreich%22%29%3C%2Fscript%3E">Klicke
                    mich um den XSS-Angriff auszuführen!</a>
                {!!app('request')->input('code')!!}
            </div>
            <h2 class="font-bold text-2xl mt-10">Was ist passiert?</h2>
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Als auf "Klicke mich um den XSS-Angriff auszuführen!" geklickt wurde, wurde der Benutzer auf eine Seite
                weitergeleitet, die XSS nicht verhindert. Der GET-Parameter "code" enthielt hierbei den folgenden
                Schadcode:
                <p class="py-4 text-white">&lt;script type=&quot;text/javascript&quot;&gt;alert(&quot;Der XSS-Angriff
                    war erfolgreich&quot;)&lt;/script&gt;</p>
                Bei diesem Angriff sind nur die Benutzer betroffen, die auf den bestimmten Link geklickt haben, da der
                Code nicht gespeichert wird auf der Webseite, sondern über den Parameter übergeben wird.
            </div>
        </div>
    </div>
</div>
</body>
</html>
