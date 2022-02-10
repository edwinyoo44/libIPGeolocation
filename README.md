# libIPGeolocation
A virion for PocketMine-MP.

You can use this to get the geolocation of an IP from ip-api.com.

## Usage
```
use edwinyoo44\libIPGeolocation\IPGeolocation;


IPGeolocation::getContinent(String $ip);

IPGeolocation::getContinentCode(String $ip);

IPGeolocation::getCountry(String $ip);

IPGeolocation::getCountryCode(String $ip);

IPGeolocation::getRegion(String $ip);

IPGeolocation::getRegionName(String $ip);

IPGeolocation::getCity(String $ip);

IPGeolocation::getDistrict(String $ip);

IPGeolocation::isProxy(String $ip); // return bool



```