<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editNotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in') // lebih baik gunakan clickLink untuk teks link
                    ->assertPathIs('/login')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('email', 'testing@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    
                    ->clickLink('Notes')
                    ->clickLink('Edit')
                    ->assertSee('Title')
                    ->type('title', 'rabu')
                    ->assertSee('Description')
                    ->type('description', 'hai ini eka')
                    ->press('UPDATE');
        });
    }
}
