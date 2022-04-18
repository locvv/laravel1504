<?php

namespace App\Repositories\Base\Output;

use Illuminate\Database\Eloquent\Builder;

class ObjectOutputInterface implements OutputInterface
{
    private $query;
    public function loadQuery(Builder $query): OutputInterface
    {
      $this->query = $query;
      return $this;
    }

    public function get() {
      return $this->query->first();
    }
}
