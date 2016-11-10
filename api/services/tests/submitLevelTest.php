<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class submitLevelTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testnewGameRoute()
    {
        $this->get('/newGame')
             ->seeJsonStructure([
                "level",
                "questions" => [
                    "*" => [
                        "questionId",
                        "questionText",
                        "options" => [
                            "*"=>[
                                "optionId",
                        "optionLabel"
                            ]
                        ]
                    ]
                ]
            ]);
    }

    public function testsubmitLevelRoute()
    {
        
        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 1,"optionId" => "3"],
                                                           ["questionId" => 2,"optionId" => "6"],
                                                           ["questionId" => 3,"optionId" => "8"]
            ],"level" => 1
            ])
             ->seeJsonStructure([
                "isGameOver",
                "score",
                "totalScore",
                "totalNoOfQuestionsInCurrentLevel",
                "previous" => [
                    
                        "correctAnswers" => [
                            "*"=>[
                                "questionId",
                                "correctAnswerOptionId"
                            ]
                        ]
                    
                ],
                "hasQualified" 
             ]);
    }


    public function testsubmitLevelRouteWithWrongQuestion()
    {
        
        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 5,"optionId" => "3"],
                                                           ["questionId" => 2,"optionId" => "6"],
                                                           ["questionId" => 3,"optionId" => "8"]
            ],"level" => 1
            ])
             ->seeJsonEquals([
                'ERROR'=>"QUESTION NOT IN CURRENT LEVEL"
             ]);
    }

    public function testhasQualifiedFalse()
    {
        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 1,"optionId" => "3"],
                                                           ["questionId" => 2,"optionId" => "6"],
                                                           ["questionId" => 3,"optionId" => "8"]
            ],"level" => 1
            ])
             ->seeJson([
                'hasQualified' => false
             ]);
    }

    public function testhasQualifiedTrue()
    {
        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 1,"optionId" => "1"],
                                                           ["questionId" => 2,"optionId" => "5"],
                                                           ["questionId" => 3,"optionId" => "8"]
            ],"level" => 1
            ])
             ->seeJson([
                'hasQualified' => true
             ]);
    }
    


public function testisGameOverTrueForLastLevel()
    {
        
        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 5,"optionId" => "3"],
                                                           ["questionId" => 6,"optionId" => "6"],
                                                           ["questionId" => 4,"optionId" => "8"]
            ],"level" => 2
            ])
             ->seeJson([
                'isGameOver' => true
             ]);
    }


}
