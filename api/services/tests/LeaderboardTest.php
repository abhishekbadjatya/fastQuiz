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

    public function getLeaderboard () {

        $response = $this->call('GET','/getLeaderboard' );
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
