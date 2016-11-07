<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testBasicExample()
    {
        // $this->visit('/')
        //      ->see('Laravel');

        $payload = ['userName' => 'Sally', 'password' => 'ahdjba', 'emailId' => "sajal@someehtin.com", "maxLevelReached" => 1 , 'maxScore' => "0"];


        $response = $this->call('POST','/authz/signup', $payload );
        
        $response = $this->call('POST','/authz/signup', $payload );

        
        //$responeArray = (array)$response->getData();
        print_r($response->getOriginalContent());

    }
}
