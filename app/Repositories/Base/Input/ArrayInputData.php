<?php

namespace App\Repositories\Base\Input;

class ArrayInputData implements InputDataInterface
{
  private $inputData;
  public function __construct(array $inputData)
  {
    $this->inputData = $inputData;
  }

  public function getData():array {
    return $this->inputData;
  }
}
