<?php

namespace App\Repositories\Base;

abstract class BaseRepository implements RepositoryInterface
{
    abstract public function query();
    public function get()
    {
    }
}
