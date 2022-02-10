<?php

namespace edwinyoo44\libIPGeolocation;

class IPGeolocation {
	
	private static $locationCache;

	public static function getLocation(String $ip, string $tag): string {

		if (isset(self::$locationCache[$ip][$tag])) {
			return self::$locationCache[$ip][$tag];
		}

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/{$ip}?fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($ch, CURLOPT_TIMEOUT, 3);
		$result = curl_exec($ch); 
		curl_close($ch);

		$resultJSON = json_decode($result, true);

		$locationData = [
			"status" => "success",
			"continent" => "unknown",
			"continentCode" => "unknown",
			"country" => "unknown",
			"countryCode" => "unknown",
			"region" => "unknown",
			"regionName" => "unknown",
			"city" => "unknown",
			"district" => "unknown"
		];

		if (!isset($resultJSON['status'])) {
			return $locationData[$tag];
		}

		$locationData = [
			"status" => "success",
			"continent" => "localhost",
			"continentCode" => "localhost",
			"country" => "localhost",
			"countryCode" => "localhost",
			"region" => "localhost",
			"regionName" => "localhost",
			"city" => "localhost",
			"district" => "localhost"
		];

		if ($resultJSON['status'] == "success") {
			$locationData = $resultJSON;
		}

		self::$locationCache[$ip] = $locationData;
		
		return self::$locationCache[$ip][$tag];
	}

	public static function getContinent(String $ip): string {
		return self::getLocation($ip, 'continent');
	}

	public static function getContinentCode(String $ip): string {
		return self::getLocation($ip, 'continentCode');
	}

	public static function getCountry(String $ip): string {
		return self::getLocation($ip, 'country');
	}

	public static function getCountryCode(String $ip): string {
		return self::getLocation($ip, 'countryCode');
	}

	public static function getRegion(String $ip): string {
		return self::getLocation($ip, 'region');
	}

	public static function getRegionName(String $ip): string {
		return self::getLocation($ip, 'regionName');
	}

	public static function getCity(String $ip): string {
		return self::getLocation($ip, 'city');
	}

	public static function getDistrict(String $ip): string {
		return self::getLocation($ip, 'district');
	}






	
}
