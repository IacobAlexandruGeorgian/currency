<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
// use App\Repositories\CurrencyRepository;

class getCurrency extends Command
{

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


    // private $currencyRepository;

    // public function __construct()
    // {
    //     $this->currencyRepository = CurrencyRepository::class;
    // }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $currencies = $this->getCurrenciesFromAPI();
    
        // $this->currencyRepository->
    }

    private function getCurrenciesFromAPI()
    {
        $currencies = [];

        $response = file_get_contents('https://api.exchangerate-api.com/v4/latest/CZK');
        $response = json_decode($response);
        
        $currencies['USD'] = 1 / $response['rates']['USD'];
        $currencies['EUR'] = 1 / $response['rates']['EUR'];
        $currencies['GBP'] = 1 / $response['rates']['GBP'];

        return $currencies;
    }
}
