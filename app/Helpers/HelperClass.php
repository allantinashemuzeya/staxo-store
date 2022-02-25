<?php

namespace App\Helpers;

class HelperClass
{

    public function generatePriceId($data): string
    {
        return 'pr'.substr($data, 0, 3);
    }

    public function getPrice($data){
      return $data['price'];
    }


}
