<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Exception;




class BeneficiariesController extends Controller
{
	public function index()
	{

	return view('beneficiaries.index');

	}

	public function show(Request $request)
	{
		$ci = $request->nacionalidad.$request->cedula;
		$cod_carnet = $request->codigo;

		$response_json_patria = Curl::to('http://10.70.203.43/api/v2/carnetizado/_proc/get_patriot?api_key=935b2b819f4dae8c9febdfbb85a149e9d5063cec27fc0ca6a444b8e390a0a919')
				->withData(['params'=>[$ci,$cod_carnet]])
				->post()
				;

		$response_patria = json_decode($response_json_patria);

		$response_json_saime = Curl::to('http://10.70.203.43/api/v2/saime/_proc/get_persona?api_key=5d836bf0fcad0b5a66cc46557a20a6e8998153608ba5214cbf3fd7466cc241d5')
				->withData(['params'=>[$ci]])
				->post();
		$response_saime = json_decode($response_json_saime);
		
	return view ('beneficiaries.show', compact('response_patria','response_saime'));

	}

}
    

