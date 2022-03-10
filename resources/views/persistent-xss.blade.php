<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Persistentes XSS</title>

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
            <div class="text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Persistentes XSS</a></div>
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Bei persistenten XSS-Angriffen wird der Code in der betroffenen Webseite gespeichert. Es muss nun unter Umständen nicht mehr auf einen bestimmten Link geklickt werden, der einen Schadcode enthält. Der Code wird automatisch beim Öffnen der Webseite abgerufen und ausgeführt.<br><br>
                <a class="text-white" href="/persistent-xss?id=1">Klicke mich um den Post mit dem Schadcode aufzurufen!</a><br/>
                @if ($post)
                    <div class="mt-4">
                        <h1 class="text-2xl font-bold">{{$post->title}}</h1>
                        {!!$post->content!!}
                    </div>
                @endif
            </div>
            <h2 class="font-bold text-2xl mt-10">Was ist passiert?</h2>
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Als auf "Klicke mich um den Post mit dem Schadcode aufzurufen!" geklickt wurde, wurde der Benutzer auf einen Beitrag weitergeleitet, die Schadcode enthielt. Der Schadcode wurde durch ein Formular eingeschleust, dass dazu diente neue Beiträge zu erstellen, es aber nicht verhinderte, Schadcode einzuschleusen. Außerdem wurde auf der Beitragsseite selber die Ausführung von Code im Beitrag selber nicht verhindert.
                Dieser Beitragstext (mit Schadcode) wurde in der Datenbank gespeichert: <p class="py-4 text-white">Dieser Beitrag enth&#228;lt ein Script, dass in der Datenbank der Webseite gespeichert worden ist, zur Sammlung von Ger&#228;teinformationen. Das Skript wird automatisch mit dem Aufrufen dieser Seite ausgef&#252;hrt.&lt;script&gt;alert(&quot;&#220;ber einen persitenten XSS-Angriff konnten wir Informationen &#252;ber dein Ger&#228;t abfangen und k&#246;nnen diese nun ohne dein Wissen weiterverarbeiten.\nGer&#228;teinformationen: &quot; + navigator.userAgent)&lt;/script&gt;</p>
                Bei diesem Angriff sind alle Benutzer betroffen, die diesen Beitrag aufgerufen haben. Das Script ist permanent auf der Webseite gespeichert.
            </div>
        </div>
    </div>
</div>
</body>
</html>
