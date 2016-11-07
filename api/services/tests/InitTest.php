<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;

class InitTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testWithoutLogin () {

        $response = $this->call('GET','/authz/getsession' );
        $responseArray =json_decode($response->getOriginalContent(),true);

        $flag = true;

        if ( $responseArray['error'] == 'SESSION_DOES_NOT_EXIST') {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);



    }
    public function testWithSession () {

        $response = $this->withSession(['username' => 'abhi3'])->call('GET','/authz/getsession' );
        
        $responseArray =json_decode($response->getOriginalContent());

        $flag = true;

        if (array_key_exists('userName', $responseArray)) {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(true, $flag);
    }
}
