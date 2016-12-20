<?php

// $jsonurl = "http://cne.cloudapi.junar.com/api/v2/datastreams/GENER-BRUTA-HORAR-SING/data.json/?auth_key=9f004c35b9ab2cab488d94124215b7b425d6b1a1";
// $json = file_get_contents($jsonurl,0,null,null);
// $json_output = json_decode($json);


// foreach ( $json_output->result as $resultado )
// {
//     echo $resultado->fLength;
// }

$url = "http://cne.cloudapi.junar.com/api/v2/datastreams/GENER-BRUTA-HORAR-SING/data.json/?auth_key=9f004c35b9ab2cab488d94124215b7b425d6b1a1";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
$json = curl_exec($ch);
if(!$json) {
    echo curl_error($ch);
}
curl_close($ch);

$json_output = json_decode($json);
foreach ( $json_output->result as $resultado )
{
    echo $resultado->{'fLength'}."<br />";
}

function getDatosBrutosSing(){

}
