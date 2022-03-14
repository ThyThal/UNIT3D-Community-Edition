<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\NoteController
 */
class NoteControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $note = \App\Models\Note::factory()->create();
        $user = \App\Models\User::factory()->create();

        $response = $this->delete(route('staff.notes.destroy', ['id' => $note->id]));

        $response->assertOk();
        $this->assertDeleted($staff.note);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $notes = \App\Models\Note::factory()->times(3)->create();

        $response = $this->get(route('staff.notes.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.note.index');
        $response->assertViewHas('notes', $notes);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = \App\Models\User::factory()->create();
        $note = \App\Models\Note::factory()->create();

        $response = $this->post(route('staff.notes.store', ['username' => $note->username]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}