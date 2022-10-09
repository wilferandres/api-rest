<?php 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/Api-servicios/Api/items/read");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
echo $res;


curl_close($ch);

/*$data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'), true);
echo $data; */
?>