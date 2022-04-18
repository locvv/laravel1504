<?php

namespace App\Repositories;

use App\Entities\Post;
use App\Repositories\Base\Input\InputDataInterface;
use App\Repositories\Base\BaseRepository;

/**
 * Class PostRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PostRepositoryEloquent extends BaseRepository implements PostRepository
{
    public function query()
    {
        return Post::query();
    }
    public function createPost(InputDataInterface $inputData)
    {
        return $this->query()->create($inputData->getData());
    }
}
