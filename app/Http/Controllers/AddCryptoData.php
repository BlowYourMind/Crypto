<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\CryptoAssets;
use Illuminate\Support\Facades\Cache;

class AddCryptoData extends Controller
{
    public function createDataCrypto()
    {

        Cache::remember('crypto_assets', 30, function () {
            $url = $_ENV["API_URL"];
            $parameters = [
                'start' => '1',
                'limit' => '150',
                'convert' => 'USD',
            ];
            $apiKey =$_ENV["API_KEY"];
            $qs = http_build_query($parameters);
            $report = file_get_contents("{$url}{$apiKey}&{$qs}");
            $report = json_decode($report);
            $array = [];
            foreach ($report->data as $data) {
                $array[] = new CryptoAssets(
                    $data->name,
                    $data->symbol,
                    $data->quote->USD->price,
                    $data->quote->USD->percent_change_1h,
                    $data->quote->USD->percent_change_24h,
                    $data->quote->USD->percent_change_7d,
                );

            }
            return $array;
        });
    }

    public function show()
    {
        if (Cache::get("crypto_assets") == null) {
            $this->createDataCrypto();
        }
        return view('CryptoData' , [
            "cryptos" => Cache::get("crypto_assets"),
            "balance" => Balance::where('userId', '=', auth()->user()->getAuthIdentifier())->first(),
            ]);

    }
}


