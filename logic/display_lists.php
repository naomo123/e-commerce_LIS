<?php
function existsRandom($number, $array)
{
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] == $number)
            return true;
    }
    return false;
}

$products = simplexml_load_file('files/productos.xml');
$length = count($products);
$numbers = array();
for ($i = 0; $i < 3; $i++) {
    do {
        $rand = rand(0, $length - 1);
    } while (existsRandom($rand, $numbers));
    $numbers[$i] = $rand;
}
$filtered = array();
foreach ($products->producto as $product) {
    if ($product->existencias != 0)
        $filtered[] = $product;
}
usort($filtered, function ($a, $b) {
    return (float)$a->precio - (float)$b->precio;
});