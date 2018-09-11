# monit-lib

This is a simple PHP library to retrieve the Status of a Monit instance.

## Usage

```php
$url  = 'http://myserver1.com/_status?format=xml';
$user = 'username';
$pass = 'password';

$monit  = new Monit/Monit();
$status = $monit->getStatusXml($url, $user, $pass);

print_r($status); 
```

## TODO

- improve code
- add tests