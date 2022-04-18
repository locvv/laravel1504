<?php

namespace App\Repositories\Base\Output;

use Illuminate\Database\Eloquent\Builder;

interface OutputInterface
{
  public function loadQuery(Builder $query):self;
  public function get();
}
