<?php

namespace App\Repositories\Base\Input;

use Illuminate\Http\Request;
class InputDataFromRequest implements InputDataInterface
{
  private $request;
  public function __construct(Request $request)
  {
    $this->request = $request;
  }

  public function getData():array {
    return $this->request->all();
  }

}
