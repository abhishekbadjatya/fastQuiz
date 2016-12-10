<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class endGameTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testendGameRoute()
    {
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );

        $this->json('POST', '/endGame', ['answers' => [["questionId" => 1,"optionId" => "3"],
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
                    
                ]
             ]);
    }

    public function testisGameOverTrue()
    {
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
        
        $this->json('POST', '/endGame', ['answers' => [["questionId" => 1,"optionId" => "3"],
                                                           ["questionId" => 2,"optionId" => "6"],
                                                           ["questionId" => 3,"optionId" => "8"]
            ],"level" => 1
            ])
             ->seeJson([
                'isGameOver' => true
             ]);
    }
    
    
    public function testendGameRouteWithWrongQuestion()
    {
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
        $this->json('POST', '/endGame', ['answers' => [["questionId" => 5,"optionId" => "3"],
                                                           ["questionId" => 2,"optionId" => "6"],
                                                           ["questionId" => 3,"optionId" => "8"]
            ],"level" => 1
            ])
             ->seeJsonEquals([
                'ERROR'=>"QUESTION NOT IN CURRENT LEVEL"
             ]);
    }



   


}
