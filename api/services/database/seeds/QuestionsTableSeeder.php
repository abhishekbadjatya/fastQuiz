<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'questionId' => 1,
                'questionText' => 'According to an old English poem, who was slain by a dragon?',
                'questionLevel' => 1,
            ),
            1 => 
            array (
                'questionId' => 2,
                'questionText' => 'Who is the maker of the Xbox?',
                'questionLevel' => 1,
            ),
            2 => 
            array (
                'questionId' => 3,
                'questionText' => 'When "The Titanic" set out on her maiden voyage, she had enough lifeboats for what percentage of the passengers and crew that were on board?',
                'questionLevel' => 1,
            ),
            3 => 
            array (
                'questionId' => 4,
                'questionText' => 'The land of Azeroth features in which video game?',
                'questionLevel' => 2,
            ),
            4 => 
            array (
                'questionId' => 5,
                'questionText' => 'Which of these is a small monkey found in Columbia and Brazil?',
                'questionLevel' => 2,
            ),
            5 => 
            array (
                'questionId' => 6,
                'questionText' => 'Where are the Kaieteur Falls, the world\'s largest single-drop waterfall by volume?',
                'questionLevel' => 2,
            ),
        ));
        
        
    }
}
