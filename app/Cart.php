<?php

namespace App;

use Gloudemans\Shoppingcart\Cart as GloudemansCart;
use Illuminate\Database\Eloquent\Model;

class Cart extends GloudemansCart
{
    public function total($decimals = null, $decimalPoint = null, $thousandSeperator = null)
    {
        return $this->numberFormat(round($this->totalFloat()), $decimals, $decimalPoint, $thousandSeperator);
    }
}
