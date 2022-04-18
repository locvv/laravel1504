<?php

namespace App\Repositories\Base\Query;
use Illuminate\Database\Eloquent\Builder;

class SearchAnyQuery implements QueryInterface
{
  private $searchString;
  private $seachColumns;
  public function __construct($searchString, Array $seachColumns)
  {
    $this->searchString = $searchString;
    $this->seachColumns = $seachColumns;
  }

  public function buildQuery(Builder $query) :Builder
  {
    return $query->where(function($query) {
      foreach($this->seachColumns as $index => $seachColumn) {
        if($index == 0) {
          $query->where($seachColumn, 'LIKE', '%'.$this->searchString.'%'); 
        } else {
          $query->orWhere($seachColumn, 'LIKE', '%'.$this->searchString.'%');
        }
      }
    });
  }
}
