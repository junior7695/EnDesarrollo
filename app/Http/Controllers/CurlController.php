<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class CurlController extends Controller
{
        public function getCURL()

{

    $response = Curl::to('http://10.70.203.43/api/v2/carnetizado/_proc/get_patriot?api_key=935b2b819f4dae8c9febdfbb85a149e9d5063cec27fc0ca6a444b8e390a0a919')

                ->withData(['params'=>["v11911108","0014475901"]])

                ->post();

    dd($response);

}
}
