<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CommentController
 */
class CommentControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function article_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $article = \App\Models\Article::factory()->create();
        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_article', ['id' => $comment->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function collection_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $collection = \App\Models\Collection::factory()->create();
        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_collection', ['id' => $comment->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function delete_comment_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $comment = \App\Models\Comment::factory()->create();

        $response = $this->delete(route('comment_delete', ['comment_id' => $comment->comment_id]));

        $response->assertRedirect(withSuccess(\trans('comment.deleted')));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_comment_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_edit', ['comment_id' => $comment->comment_id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function playlist_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $playlist = \App\Models\Playlist::factory()->create();
        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_playlist', ['id' => $comment->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function quickthanks_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = \App\Models\Torrent::factory()->create();
        $user = \App\Models\User::factory()->create();
        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_thanks', ['id' => $comment->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function request_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrentRequest = \App\Models\TorrentRequest::factory()->create();
        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_request', ['id' => $comment->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function ticket_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $ticket = \App\Models\Ticket::factory()->create();
        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_ticket', ['id' => $comment->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function torrent_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = \App\Models\Torrent::factory()->create();
        $comment = \App\Models\Comment::factory()->create();

        $response = $this->post(route('comment_torrent', ['id' => $comment->id]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}