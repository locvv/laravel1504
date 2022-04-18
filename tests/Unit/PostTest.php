<?php

namespace Tests\Unit;

use App\Repositories\PostRepository;
use Tests\TestCase;
use App\Repositories\Base\Input\ArrayInputData;

class PostTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCreatePost()
    {
        $postRepository = app()->make(PostRepository::class);
        $postData = [
            'name' => 'data 1'
        ];
        $inputData = new ArrayInputData($postData);

        $newPost = $postRepository->createPost($inputData);

        $this->assertTrue(is_object($newPost));
    }
}
