<?php

namespace App\Classes;

use App\Repositories\CurrencyRepository;

class CurrencyCZK {
    
    /**
     * @var object
     */
    private CurrencyRepository $currencyRepository;
    
    public function __construct(CurrencyRepository $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }

    public function getCurrenciesFromRepository() {
        $currencies = $this->currencyRepository->getCurrenciesFromDatabase();

        return (array)$currencies;
    }


}