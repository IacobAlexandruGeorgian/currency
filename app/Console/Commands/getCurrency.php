<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\CurrencyRepository;

class getCurrency extends Command
{
    /**
     * @var object
     */
    private CurrencyRepository $currencyRepository;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getCurrency:CZK';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the currency for CZK';

    public function __construct(CurrencyRepository $currencyRepository)
    {
        parent::__construct();
        $this->currencyRepository = $currencyRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currencies = [];
        $currencies = $this->getCurrenciesFromAPI();

        if (!empty($currencies)) {
            $this->currencyRepository->addEditCurrencies($currencies);
        }
    }

    private function getCurrenciesFromAPI()
    {
        $currencies = [];

        $response = file_get_contents('https://api.exchangerate-api.com/v4/latest/CZK');
        $response = json_decode($response);

        if (property_exists($response, 'rates')) {
            $currencies['USD'] = 1 / $response->rates->USD;
            $currencies['EUR'] = 1 / $response->rates->EUR;
            $currencies['GBP'] = 1 / $response->rates->GBP;
        }

        return $currencies;

    }
}
