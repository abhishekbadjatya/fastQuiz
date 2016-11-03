<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('LevelsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('QuestionsTableSeeder');
        $this->call('OptionsTableSeeder');
        $this->call('MigrationsTableSeeder');
        
    }
}
