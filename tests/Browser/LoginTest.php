<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\LoginPage;
use App\User;
class LoginTest extends DuskTestCase
{
    //use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->create([
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]); 
        $this->browse(function (Browser $browser) use ($user) {
                $browser->visit(new LoginPage)
                    ->SignIn($user->email)
                    ->assertRouteIs('home');

                // $browser->visit('/')
                    // ->assertSee('Laravel')
                    // ->clickLink('Login')
                    // ->visit(new LoginPage)
                    // ->assertRouteIs('login')
                    // ->value('#email',$user->email)
                    // ->value('#password','krishna')
                    // ->press('Login')
                    // ->assertRouteIs('home');

        });
    }
}
