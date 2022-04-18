<?php

namespace App\Repositories;

use App\Repositories\Base\Input\InputDataInterface;

/**
 * Interface PostRepository.
 *
 * @package namespace App\Repositories;
 */
interface PostRepository
{
    public function createPost(InputDataInterface $inputData);
}
