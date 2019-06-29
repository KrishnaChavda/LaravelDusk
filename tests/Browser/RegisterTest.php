<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * test
     * @return void
     */
    public function test_a_user_can_register()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('name','Krishna Chavda')
                    ->type('email','ss@krishaweb.net')
                    ->type('password','Krishna6196')
                    ->type('password_confirmation','Krishna6196')
                    ->press('Register')
                    ->assertPathIs('/home');
        });
    }
}
