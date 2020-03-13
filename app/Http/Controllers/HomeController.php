<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function flights()
    {
        return view('flights');
    }

    public function showFlight()
    {



        return view('flight',['flight' => $_GET['flight'],'dictionaries'=>$_GET['dictionaries']]);

    }

    public function showFlights()
    {

        if (isset($_GET['originLocationCode']) && isset($_GET['destinationLocationCode'])) {
            if (!isset($_COOKIE['amadeus_token'])) {
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

                $amadeus_token = $ress['access_token'];
            } else {
                $amadeus_token = $_COOKIE['amadeus_token'];
            }


            $client = new Client();
            $res = $client->request('GET', 'https://test.api.amadeus.com/v2/shopping/flight-offers',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $amadeus_token
                    ],
                    'query' => $_GET
                ]);


            $ress = json_decode($res->getBody(), true);


            return view('flights', ['data' => $ress]);
        } else {
            return view('flights');
        }

    }
}
