<?php

namespace App\Repositories\Base\Query;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class GetByDateFieldRange implements QueryInterface
{
  private $dateField;
  private $startDate;
  private $endDate;
  public function __construct($dateField,$startDate,$endDate)
  {
    $this->dateField = $dateField;
    $this->startDate = Carbon::parse($startDate)->startOfDay();
    $this->endDate = Carbon::parse($endDate)->endOfDay();
  }

  public function buildQuery(Builder $query) :Builder
  {
    return $query->whereBetween($this->dateField, [$this->startDate, $this->endDate]);
  }
}
