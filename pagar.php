<?php
require __DIR__  . '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

printf($path);