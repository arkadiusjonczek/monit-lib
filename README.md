# monit-lib

This is a simple PHP library to retrieve the Status of a Monit instance.

## Install

```bash
composer require arkadiusjonczek/monit-lib
```

## Usage

```php
$url  = 'http://myserver1.com/_status?format=xml';
$user = 'username';
$pass = 'password';

$monit  = new Monit/Monit($url, $user, $pass);
$status = $monit->getStatusXml();

print_r($status); 
```

## TODO

- improve code
- add tests