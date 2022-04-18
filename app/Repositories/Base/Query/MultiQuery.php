<?php

namespace App\Repositories\Base\Query;
use Illuminate\Database\Eloquent\Builder;

class MultiQuery implements QueryInterface
{
  private $queries;
  public function __construct(Array $queries)
  {
    $this->queries = $queries;
  }

  public function buildQuery(Builder $query) :Builder
  {
    foreach($this->queries as $queryObject) {
      $query = $queryObject->buildQuery($query);
    }

    return $query;
  }
}
