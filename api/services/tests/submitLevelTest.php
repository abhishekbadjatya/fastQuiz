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

        $response = $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 1,"optionId" => "3"],
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
    public function testsubmitLevelRouteUpdatingMaxScoreAndLevel()
    {
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $this->call('POST','/authz/login', $payload );

        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 1,"optionId" => "1"],
                                                           ["questionId" => 2,"optionId" => "5"],
                                                           ["questionId" => 3,"optionId" => "9"]
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
        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 8,"optionId" => "3"],
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
        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 1,"optionId" => "2"],
                                                           ["questionId" => 2,"optionId" => "6"],
                                                           ["questionId" => 3,"optionId" => "10"],
                                                           ["questionId" => 4,"optionId" => "14"],
                                                           ["questionId" => 5,"optionId" => "16"]
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
        
        $this->withSession(['score' => 1])->json('POST', '/submitLevel', ['answers' => [["questionId" => 50,"optionId" => "200"],
                                                           ["questionId" => 49,"optionId" => "196"],
                                                           ["questionId" => 48,"optionId" => "192"]
            ],"level" => 10
            ])
             ->seeJson([
                'isGameOver' => true
             ]);
    }

    public function testNoSession () {

        $this->json('POST', '/submitLevel', ['answers' => [["questionId" => 5,"optionId" => "3"],
                                                           ["questionId" => 6,"optionId" => "6"],
                                                           ["questionId" => 4,"optionId" => "8"]
            ],"level" => 2
            ])
             ->seeJson([
                'error' => 'SESSION_DOES_NOT_EXIST'
             ]);
    }

    public function testNewGameForScore()
    {
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
        
        $this->withSession(['score' => 1])->json('GET', '/newGame')
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


}
