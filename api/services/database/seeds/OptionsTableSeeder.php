<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'optionId' => 1,
                'optionLabel' => 'Beowulf',
                'questionId' => 1,
                'isCorrect' => 1,
            ),
            1 => 
            array (
                'optionId' => 2,
                'optionLabel' => 'Weland',
                'questionId' => 1,
                'isCorrect' => 0,
            ),
            2 => 
            array (
                'optionId' => 3,
                'optionLabel' => 'Merlin',
                'questionId' => 1,
                'isCorrect' => 0,
            ),
            3 => 
            array (
                'optionId' => 4,
                'optionLabel' => 'Nintendo',
                'questionId' => 2,
                'isCorrect' => 0,
            ),
            4 => 
            array (
                'optionId' => 5,
                'optionLabel' => 'Microsoft',
                'questionId' => 2,
                'isCorrect' => 1,
            ),
            5 => 
            array (
                'optionId' => 6,
                'optionLabel' => 'Apple',
                'questionId' => 2,
                'isCorrect' => 0,
            ),
            6 => 
            array (
                'optionId' => 7,
                'optionLabel' => '75',
                'questionId' => 3,
                'isCorrect' => 0,
            ),
            7 => 
            array (
                'optionId' => 8,
                'optionLabel' => '100',
                'questionId' => 3,
                'isCorrect' => 0,
            ),
            8 => 
            array (
                'optionId' => 9,
                'optionLabel' => '50',
                'questionId' => 3,
                'isCorrect' => 1,
            ),
            9 => 
            array (
                'optionId' => 10,
                'optionLabel' => 'Warcraft',
                'questionId' => 4,
                'isCorrect' => 1,
            ),
            10 => 
            array (
                'optionId' => 11,
                'optionLabel' => '
Commander Keen',
                'questionId' => 4,
                'isCorrect' => 0,
            ),
            11 => 
            array (
                'optionId' => 12,
                'optionLabel' => 'Marmot',
                'questionId' => 5,
                'isCorrect' => 0,
            ),
            12 => 
            array (
                'optionId' => 13,
                'optionLabel' => '
Marmoset',
                'questionId' => 5,
                'isCorrect' => 1,
            ),
            13 => 
            array (
                'optionId' => 14,
                'optionLabel' => '
Essequibo, Guyana',
                'questionId' => 6,
                'isCorrect' => 1,
            ),
            14 => 
            array (
                'optionId' => 15,
                'optionLabel' => 'Canaima, Venezuela',
                'questionId' => 6,
                'isCorrect' => 0,
            ),
        ));
        
        
    }
}
