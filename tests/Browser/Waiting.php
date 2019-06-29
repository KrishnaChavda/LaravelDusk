<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
class Waiting extends DuskTestCase
{
    //use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     //create fake data in database
    //     $user = factory(User::class)->create();
    //     $this->browse(function (Browser $browser) {
    //         $browser->loginAs(User::find(1))
    //         ->visit('/home')

    //         //->puse(2000)
    //         //this function waiting for 5 sec not more than that, defulte set
    //         ->waitForText('Krishna',6)
    //                 ->assertSee('Krishna');
    //     });
    // }

    // public function test_refrash_pageoto_anothere_route_after_three_sec()
    // {
    //     //create fake data in database
    //     $user = factory(User::class)->create();
    //     $this->browse(function (Browser $browser) {
    //         $browser->loginAs(User::find(1))
    //         ->visit('/home')
    //         ->assertPathIs('/home')
    //         ->waitForLocation('/')
    //         ->assertPathIs('/');
                    
    //     });
    // }

    public function test_model()
    {
        //create fake data in database
        $user = factory(User::class)->create();
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
            ->visit('/home')
            ->assertPathIs('/home')
            ->click('#launch')
            ->whenAvailable('#exampleModal',function($model){
                $model->assertSee('Modal title')
              ->click('#close');
            })
            
            ->assertSee('Krishna');
                    
        });
    }
}
