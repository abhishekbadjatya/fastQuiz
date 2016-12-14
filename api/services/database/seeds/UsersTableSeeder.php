<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'userId' => 1,
                'userName' => 'a',
                'password' => '$2y$10$9FaTkCmf4eDV4JMZ0eVYveWxS9jfW40ZR4eDF2Uwz5G/xt/NYamGG',
                'emailId' => 'a',
                'maxLevelReached' => 1,
                'maxScore' => 1,
            ),
            1 => 
            array (
                'userId' => 2,
                'userName' => 'abhi',
                'password' => '$2y$10$vRw.ag4/20uMEqDG9xyVWOI7HTX/CsntFESYBP1/ct.UGXlZVbXle',
                'emailId' => 'a',
                'maxLevelReached' => 1,
                'maxScore' => 1,
            ),
            2 => 
            array (
                'userId' => 3,
                'userName' => 'abhi1',
                'password' => '$2y$10$g8yrY9T0diijaHIGwNAZoudtXuRJeW.kqtgqaUTWT/umjpqLdSoXi',
                'emailId' => 'a',
                'maxLevelReached' => 1,
                'maxScore' => 1,
            ),
            3 => 
            array (
                'userId' => 4,
                'userName' => 'abhi2',
                'password' => '$2y$10$o0Xwq8YOzeuVVf.FC8NPteAyxYnksc70Ns6UiKmGmaAm0O3QzWkHa',
                'emailId' => 'a',
                'maxLevelReached' => 1,
                'maxScore' => 1,
            ),
            4 => 
            array (
                'userId' => 5,
                'userName' => 'abhi3',
                'password' => '$2y$10$Vy71zUqskIax4ZCikeNk8u96yGTeL1HfOPCl2r88W0DRjn8c46cfW',
                'emailId' => 'a',
                'maxLevelReached' => 1,
                'maxScore' => 1,
            ),
            5 => 
            array (
                'userId' => 6,
                'userName' => 'abhishek',
                'password' => '$2y$10$ebp0KbSPHNboL46u8U3sVuFdl.vaTeqGrr3QoJagYAS6L0rNdpCj6',
                'emailId' => 'sample',
                'maxLevelReached' => 1,
                'maxScore' => 0,
            ),
        ));
        
        
    }
}
