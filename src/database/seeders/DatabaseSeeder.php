<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'İsmail YILDIZ',
            'email'=>'dupi@live.com',
            'password'=>bcrypt('123456')
        ]);
    }
}
