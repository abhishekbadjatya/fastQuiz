<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;

class SignUpTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testCorrectInput ()
    {

        $payload = ['userName' => 'Sally', 'password' => 'ahdjba', 'emailId' => "sajal@someehtin.com", "maxLevelReached" => 1 , 'maxScore' => 0];


        $response = $this->call('POST','/authz/signup', $payload );
        $responseArray =json_decode($response->getOriginalContent());

        $flag = true;

        if (array_key_exists('userName', $responseArray)) {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);


    }

    public function testDuplicateUserName () {

        $payload = ['userName' => 'Sally', 'password' => 'ahdjba', 'emailId' => "sajal@someehtin.com", "maxLevelReached" => 1 , 'maxScore' => 0];


        $response = $this->call('POST','/authz/signup', $payload );
        $response = $this->call('POST','/authz/signup', $payload );
        $responseArray =json_decode($response->getOriginalContent(), true);
        $flag = true;

        if ($responseArray ['error'] == 'USERNAME_TAKEN') {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);


    }

    public function testMalformedPayload () {

        $payload = ['userName' => 'Sally', 'password' => '', 'emailId' => "sajal@someehtin.com", "maxLevelReached" => 1 , 'maxScore' => 0];


        $response = $this->call('POST','/authz/signup', $payload );
        $responseArray =json_decode($response->getOriginalContent(), true);
        $flag = true;

        if ($responseArray ['error'] == 'MALFORMED_JSON') {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);



    }
}
