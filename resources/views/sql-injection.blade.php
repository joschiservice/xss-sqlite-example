<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SQL Injection</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">Zurück zur Startseite</a>
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-gray-400">
        <div class="p-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">SQL Injection</a></div>
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Eine SQL-Injection nutzt eine Schwachstelle auf einer Webseite aus, die es erlaubt Datenbankabfragen zu ändern und/oder eigene zu erstellen. Dadurch können geschützte & sensible Daten gestohlen werden. Klicken Sie im nachfolgenden Formular einfach auf "Nach Benutzer ID suchen", um die SQL Injection zu starten. Statt bloß die Daten für einen Benutzer zurückzugeben, werden hier mehrere Benutzer inklusive sensiblen Daten wie z.B. E-Mail-Adressen zurückgegeben.
                <form method="get">
                    <input name="id" type="text" class="text-white bg-transparent border-slate-500 border-2 mr-2" value="0 OR 1=2 UNION SELECT email from users"/>
                    <button class="text-white" type="submit">Nach Benutzer ID Suchen</button>
                </form>
                <h1 class="mt-4 font-bold">Gefundene Benutzer:<br/></h1>
                <ul>
                    @foreach ($data as $item)
                        <li>- {{$item->name}}</li>
                    @endforeach
                </ul>
            </div>
            <h2 class="font-bold text-2xl mt-10">Was ist passiert?</h2>
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Als auf "Nach Benutzer ID suchen" geklickt wurde, wurde eine manipulierte Suchanfrage geschickt. Statt nur den Benutzernamen zurückzugeben, werden nun alle E-Mail-Adressen zurückgegeben.
                <p class="py-4 text-white">&lt;script type=&quot;text/javascript&quot;&gt;alert(&quot;Der XSS-Angriff war erfolgreich&quot;)&lt;/script&gt;</p>
                Bei diesem Angriff sind nur die Benutzer betroffen, die auf den bestimmten Link geklickt haben, da der Code nicht gespeichert wird auf der Webseite, sondern über den Parameter übergeben wird.
            </div>
        </div>
    </div>
</div>
</body>
</html>
