<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\BackupController
 */
class BackupControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('staff.backups.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.backup.index');

        // TODO: perform additional assertions
    }

    // test cases...
}