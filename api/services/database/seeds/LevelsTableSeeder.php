<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('levels')->delete();
        
        \DB::table('levels')->insert(array (
            0 => 
            array (
                'levelId' => 1,
                'levelLabel' => 'l1',
            ),
            1 => 
            array (
                'levelId' => 2,
                'levelLabel' => 'l2',
            ),
        ));
        
        
    }
}
