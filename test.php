<?php
$url = 'https://api.coindesk.com/v1/bpi/currentprice.json';
$response = file_get_contents($url);
    //curl
    //life_get_contents
if($response === FALSE){
    die('Datanya gak ada BRO!!!');
}
$data = json_decode($response, true);
print_r($data);

?>

<!--
'https://api.coindesk.com/v1/bp1/currentprice.jdon' -->