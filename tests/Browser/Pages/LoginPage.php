<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class LoginPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@e' => '#email',
            '@p' => 'input[name=password]',
        ];
    }

    public function SignIn(Browser $browser, $email)
    {
            $browser->value('@e',$email)
            ->value('@p','password')
            ->press('Login')
            ->assertRouteIs('home');
    }
}
