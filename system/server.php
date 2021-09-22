<?php
require '../vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($path) {
    case '/system/':
    case '/system':
        break;
    case '/system/pagar':
        $json = file_get_contents("php://input");
        $data = json_decode($json);
        $preference = new MercadoPago\Preference();
        $item = new MercadoPago\Item();
        $item->title = 'Mi producto';
        $item->quantity = 1;
        $item->unit_price = 75.56;
        $preference->items = array($item);
        $preference->save();
        var_dump($preference->get('id'));
        break;
    default:
        break;
}
