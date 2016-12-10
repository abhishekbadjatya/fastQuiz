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
    use DatabaseTransactions;
    public function testnewGameRoute()
    {
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
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
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );

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
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
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
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
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
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
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
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
        
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
