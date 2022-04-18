<?php

namespace App\Repositories\Base\Query;

use Illuminate\Database\Eloquent\Builder;

interface QueryInterface
{
  public function buildQuery(Builder $query):Builder;
}
