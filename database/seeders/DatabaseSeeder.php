<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\tipo_doc;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'arnigomez@gmail.com';
        $user->rol = '1';
        $user->password = bcrypt('12345');
        $user->save();

        $doc = new tipo_doc;
        $doc->doc_nombre = 'Cédula';
        $doc->doc_estado = '1';
        $doc->save();
    }
}
