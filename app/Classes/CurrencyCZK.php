<?php

namespace App\Classes;

use App\Repositories\CurrencyRepository;

class CurrencyCZK {
    
    private $currencyRepository;
    

    public function __construct()
    {
        $this->currencyRepository = CurrencyRepository::class;
    }


}