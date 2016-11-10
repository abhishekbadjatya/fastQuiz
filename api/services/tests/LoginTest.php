<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;

class LoginTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    
    public function testLoginCorrect () {

        $payload = ['userName' => 'abhi3', 'password' => 'a'];


        $response = $this->call('POST','/authz/login', $payload );
        $responseArray =json_decode($response->getOriginalContent(),true);
        $flag = true;

        if (array_key_exists('userName', $responseArray)) {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);

    }

    public function testIncorrectCredentials () {

        $payload = ['userName' => 'abhi3', 'password' => 'ab'];


        $response = $this->call('POST','/authz/login', $payload );
        $responseArray =json_decode($response->getOriginalContent(),true);
        $flag = true;

        if ( $responseArray ['error'] == 'INCORRECT_CREDENTIALS') {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);


    }

    public function testMalformedPayload () {

        $payload = ['userName' => '', 'password' => 'ab'];


        $response = $this->call('POST','/authz/login', $payload );
        $responseArray =json_decode($response->getOriginalContent(),true);
        $flag = true;

        if ( $responseArray ['error'] == 'MALFORMED_JSON') {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);

    }
}
