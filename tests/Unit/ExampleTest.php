<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->artisan('consoletest')
            ->expectsQuestion('What is your name?','krishna')
            ->expectsQuestion('Which language do you program in?','PHP')
            ->expectsOutput('Your name is krishna and you program in PHP.')
            ->assertExitCode(0);
    }
}
