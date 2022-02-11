# libIPGeolocation
A virion for PocketMine-MP.

You can use this to get the geolocation of an IP from ip-api.com.

## Usage
```
use edwinyoo44\libIPGeolocation\IPGeolocation;


IPGeolocation::getStatus(String $ip); // return string success or error

IPGeolocation::getContinent(String $ip); // return string

IPGeolocation::getContinentCode(String $ip); // return string

IPGeolocation::getCountry(String $ip); // return string

IPGeolocation::getCountryCode(String $ip); // return string

IPGeolocation::getRegion(String $ip); // return string

IPGeolocation::getRegionName(String $ip); // return string

IPGeolocation::getCity(String $ip); // return string

IPGeolocation::getDistrict(String $ip); // return string

IPGeolocation::isProxy(String $ip); // return bool



```