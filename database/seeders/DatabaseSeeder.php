<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->truncate();
        DB::table("users")->truncate();
        DB::table('posts')->insert([
            'title' => "Persistentes XSS",
            'content' => 'Dieser Beitrag enthält ein Script, dass in der Datenbank der Webseite gespeichert worden ist, zur Sammlung von Geräteinformationen. Das Skript wird automatisch mit dem Aufrufen dieser Seite ausgeführt.<script>alert("Über einen persitenten XSS-Angriff konnten wir Informationen über dein Gerät abfangen und können diese nun ohne dein Wissen weiterverarbeiten.\nGeräteinformationen: " + navigator.userAgent)</script>',
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
    }
}
