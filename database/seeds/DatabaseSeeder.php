<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //para executar todas as seeds de uma vez 
        $this->call(ArticlesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
