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
                'userId' => 7,
                'userName' => 'sajal',
                'password' => '$2y$10$f45TBFxwp8BIadBt.U.yIeCqBRzO5z0.McQrfugRZ2vOGnGsL.nvy',
                'emailId' => 'sample',
                'maxLevelReached' => 1,
                'maxScore' => 0,
            ),
            6 => 
            array (
                'userId' => 8,
                'userName' => 'sajal1',
                'password' => '$2y$10$22dfR60BgakYPgyVjw5/t.M2oXF5m64JJ.5sMI5A.Dter5lbGOTH2',
                'emailId' => 'sample',
                'maxLevelReached' => 1,
                'maxScore' => 0,
            ),
            7 => 
            array (
                'userId' => 9,
                'userName' => '',
                'password' => '$2y$10$LNl8w5/Y2LH83dSA.2d8wefNO8kC3KpKnMuH2WvFFNsWqhvjypQsG',
                'emailId' => 'sample',
                'maxLevelReached' => 1,
                'maxScore' => 0,
            ),
            8 => 
            array (
                'userId' => 10,
                'userName' => 'sajal2',
                'password' => '$2y$10$gaBDdqCUWzEc8vacRpoVo.6xD3oE7otMpIwhkXhCvqWC8DEbsxSWS',
                'emailId' => 'sample',
                'maxLevelReached' => 1,
                'maxScore' => 0,
            ),
            9 => 
            array (
                'userId' => 11,
                'userName' => 'sajal3',
                'password' => '$2y$10$DruYczXKbl69Zcf8FTpPZetwzLzne4UurUoKhu6Yo0MKZ0/CNDl0O',
                'emailId' => 'sample',
                'maxLevelReached' => 1,
                'maxScore' => 0,
            ),
        ));
        
        
    }
}
