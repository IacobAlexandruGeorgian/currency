<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\CurrencyCZK;

class CurrencyController
{
    private $currencyCZK;

    public function __construct()
    {
        $this->currencyCZK = CurrencyCZK::class;
    }


}
