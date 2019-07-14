<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Soal;
use App\Pengaturan;
use App\Nilai;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
        factory(User::class,20)->create();
        factory(Soal::class,20)->create();
        factory(Pengaturan::class,20)->create();
        factory(Nilai::class,20)->create();
    }
}
