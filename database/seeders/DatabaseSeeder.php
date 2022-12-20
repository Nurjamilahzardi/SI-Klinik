<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Obat;
use App\Models\Perawat;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(10)->create();

        Dokter::factory(10)->create();



       Pasien::factory(5)->create();
       Perawat::factory(5)->create();

      Obat::factory(5)->create();




        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Bajrul Hakimi',
            'email' => 'bajrul@gmail.com',
            'password' => 'qwerty'
        ]);

    }
}
