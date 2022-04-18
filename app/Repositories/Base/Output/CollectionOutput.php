<?php

namespace App\Repositories\Base\Output;

use Illuminate\Database\Eloquent\Builder;
use PhpParser\Node\Expr\FuncCall;

class CollectionOutput implements OutputInterface
{
  private $take;
  private $query;
  public function __construct(int $take = 100000)
  {
        $this->take = $take;
  }
 public function loadQuery(Builder $query): OutputInterface
 {
   $this->query = $query;
   return $this;
 }
 public function get()
 {
   return $this->query->take($this->take)->get();
 }
}
