<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;

class PasswordTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testNoSession () {

        $payload = ['oldpassword' => 'a', 'newpassword' => 'ab'];
        $response = $this->call('PUT','/changePassword', $payload );
        $responseArray =json_decode($response->getOriginalContent(),true);
        $flag = true;

        if ( $responseArray ['error']) {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);

    }
    
    
    public function testIncorrectPassword () {

        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
        $payload = ['oldpassword' => 'ab', 'newpassword' => 'ab'];
        $response = $this->call('PUT','/changePassword', $payload );
        $responseArray =json_decode($response->getOriginalContent(),true);
        $flag = true;
        if ( $responseArray ['error']) {
            $flag = true;
        } else {
            $flag = false;
        }
        $this->assertEquals(true, $flag);
    }

    public function testPassword () {


        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );
        $payload = ['oldpassword' => 'a', 'newpassword' => 'ab'];
        $response = $this->call('PUT','/changePassword', $payload );
        $responseArray =json_decode($response->getOriginalContent(),true);
        $flag = true;

        if ( $responseArray ['error']) {

            $flag = false;

        } else {
            $flag = true;
        }

        $this->assertEquals(true, $flag);

    }
}
