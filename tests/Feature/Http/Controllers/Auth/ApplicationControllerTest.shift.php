<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Auth\ApplicationController
 */
class ApplicationControllerTest extends TestCase
{
    /**
     * @test
     */
    public function create_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('application.create'));

        $response->assertOk();
        $response->assertViewIs('auth.application.create');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('application.store'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}