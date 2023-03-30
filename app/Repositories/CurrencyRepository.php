<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CurrencyRepository {
    
    public function addEditCurrencies($currencies) {
        if (DB::table('currency')->where('id', 1)->exists()) {
            // update
            $currencies['updated_at'] = Carbon::now();
            DB::table('currency')->where('id', 1)->update($currencies);
        } else {
            // add
            $currencies['created_at'] = Carbon::now();
            DB::table('currency')->insert($currencies);
        }
    }

    public function getCurrenciesFromDatabase() {
        $currencies = DB::table('currency')->where('id', 1)->first(['USD', 'EUR', 'GBP']);

        return $currencies;
    }

}