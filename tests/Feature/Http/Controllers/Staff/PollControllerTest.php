<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\PollController
 */
class PollControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function create_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('staff.polls.create'));

        $response->assertOk();
        $response->assertViewIs('Staff.poll.create');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $poll = \App\Models\Poll::factory()->create();

        $response = $this->delete(route('staff.polls.destroy', ['id' => $poll->id]));

        $response->assertOk();
        $this->assertDeleted($staff.poll);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $poll = \App\Models\Poll::factory()->create();

        $response = $this->get(route('staff.polls.edit', ['id' => $poll->id]));

        $response->assertOk();
        $response->assertViewIs('Staff.poll.edit');
        $response->assertViewHas('poll', $poll);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $polls = \App\Models\Poll::factory()->times(3)->create();

        $response = $this->get(route('staff.polls.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.poll.index');
        $response->assertViewHas('polls', $polls);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $poll = \App\Models\Poll::factory()->create();

        $response = $this->get(route('staff.polls.show', ['id' => $poll->id]));

        $response->assertOk();
        $response->assertViewIs('Staff.poll.show');
        $response->assertViewHas('poll', $poll);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('staff.polls.store'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Staff\PollController::class,
            'store',
            \App\Http\Requests\StorePoll::class
        );
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $poll = \App\Models\Poll::factory()->create();
        $option = \App\Models\Option::factory()->create();

        $response = $this->post(route('staff.polls.update', ['id' => $poll->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Staff\PollController::class,
            'update',
            \App\Http\Requests\StorePoll::class
        );
    }

    // test cases...
}