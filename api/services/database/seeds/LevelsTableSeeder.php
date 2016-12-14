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
            2 => 
            array (
                'levelId' => 3,
                'levelLabel' => 'l3',
            ),
            3 => 
            array (
                'levelId' => 4,
                'levelLabel' => 'l4',
            ),
            4 => 
            array (
                'levelId' => 5,
                'levelLabel' => 'l5',
            ),
            5 => 
            array (
                'levelId' => 6,
                'levelLabel' => 'l6',
            ),
            6 => 
            array (
                'levelId' => 7,
                'levelLabel' => 'l7',
            ),
            7 => 
            array (
                'levelId' => 8,
                'levelLabel' => 'l8',
            ),
            8 => 
            array (
                'levelId' => 9,
                'levelLabel' => 'l9',
            ),
            9 => 
            array (
                'levelId' => 10,
                'levelLabel' => 'l10',
            ),
        ));
        
        
    }
}
