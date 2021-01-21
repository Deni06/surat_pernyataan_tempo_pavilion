<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('GetApi')) {
	function GetApi() {
  		$Api = "ad2a33755081c26a5c26f6c806362d28"; 
  		return $Api;		
	}
}

if ( ! function_exists('showProvince')) { 
	function showProvince() {
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    GetApi()
		  ),
		));
			$response = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);
		 if ($err) {
			$result = 'error';
			return 'error';
		} else {
			return $response;
		}
	}
}

if ( ! function_exists('showCity')) { 
	function showCity($province) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$province",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    GetApi()
		  ),
		));
		  $response = curl_exec($curl);
		  $err = curl_error($curl);
		  curl_close($curl);
		  if ($err){
			$result = 'error';
			return 'error';
		  } else {
			return $response;
		  }
	}
}


if ( ! function_exists('hitungOngkir')) { 
	function hitungOngkir($origin,$destination,$weight,$courier) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
		  CURLOPT_HTTPHEADER => array(
		  	"content-type: application/x-www-form-urlencoded", GetApi() ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err){
			$result = 'error';
			return 'error';
		  } else {
			return $response;
		  }
	}
}
