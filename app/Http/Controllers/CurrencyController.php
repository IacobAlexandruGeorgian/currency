<?php

namespace App\Http\Controllers;

use App\Classes\CurrencyCZK;

class CurrencyController
{
    /**
     * @var object
     */
    private CurrencyCZK $currencyCZK;

    public function __construct(CurrencyCZK $currencyCZK)
    {
        $this->currencyCZK = $currencyCZK;
    }

    public function getCurrencies() {
        $currencies = $this->currencyCZK->getCurrenciesFromRepository();

        return $currencies;
    }


}
