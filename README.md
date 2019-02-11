# monit-lib

This is a simple PHP library to retrieve the Status of a Monit instance.

## Install

```bash
composer require arkadiusjonczek/monit-lib
```

## Usage

```php
$client = new Guzzlehttp\Client();
$url    = 'http://myserver1.com/_status?format=xml';
$user   = 'username';
$pass   = 'password';

$monit  = new Monit\Monit($client, $url, $user, $pass);
$status = $monit->getStatusXml();

print_r($status); 
```

## TODO

- improve code
- add tests