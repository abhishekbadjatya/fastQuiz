<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;

class LeaderboardTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testGetLeaderboard () {
        $payload = ['userName' => 'abhi3', 'password' => 'a'];
        $response = $this->call('POST','/authz/login', $payload );

        $response = $this->call('GET','/getLeaderboard' );
        $responseArray =json_decode($response->getOriginalContent(),true);

        $flag = true;
        if (  array_key_exists('error', $responseArray) ) {

            $flag = true;

        } else {
            $flag = false;
        }

        $this->assertEquals(false, $flag);

    }
}
