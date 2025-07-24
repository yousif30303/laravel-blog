<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testVisitLaracastsFromWelcomePage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1/laravel-blog/public/')
                    ->pause(1000)
                    ->assertSee('Laravel')

                    // Find and click the 'Laracasts' link (case-sensitive)
                    ->clickLink('Laracasts')

                    ->pause(3000) // Wait for Laracasts page to load (external)+-
                    ->screenshot('laracasts-page');
        });
    }
}
