<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if(!isset($_COOKIE['amadeus_token'])) {
            $client = new Client();
            $res = $client->request('POST', 'https://test.api.amadeus.com/v1/security/oauth2/token', [
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => 'yh8Fp5OJyTHzkD90pzhBOUyOuMzHVzVt',
                    'client_secret' => 'fmmh2vcsPWfl3SVW'
                ]
            ]);


            $ress = json_decode($res->getBody(), true);

            // return $ress->type;
            setcookie('amadeus_token', $ress['access_token'], time() + ($ress['expires_in'] - 10), '/');
        }

    }
}
