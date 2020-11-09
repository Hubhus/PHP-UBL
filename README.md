# PHP-UBL
Deserialize UBL v2.0 Invoices (xml) to PHP objects, or vice versa.

## Installation
```shell script
composer require noka-design/php-ubl
```

## Usage
```php
$serializer = \NOKA\PHPUBL\PHPUBL::getSerializer();
$xml = file_get_contents('path/to/invoice.sml');
$invoice = $serializer->deserialize($xml, \NOKA\PHPUBL\UBL\Invoice::class, 'xml');
```

## Credits
Classes generated using [xsd2php](https://github.com/goetas-webservices/xsd2php)

Uses [JMS Serializer](https://github.com/schmittjoh/serializer) for serializing/deserializing

Uses UBL 2.0 schema definitions from [Oasis](https://docs.oasis-open.org/ubl/os-UBL-2.0/UBL-2.0.html)