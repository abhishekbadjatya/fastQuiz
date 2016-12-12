<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2016_12_12_003435_create_levels_table',
                'batch' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2016_12_12_003435_create_options_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_12_12_003435_create_questions_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_12_12_003435_create_users_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_12_12_003436_add_foreign_keys_to_options_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_12_12_003436_add_foreign_keys_to_questions_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_12_12_003436_add_foreign_keys_to_users_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}
