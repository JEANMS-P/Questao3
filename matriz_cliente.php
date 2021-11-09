<?php 


$clientes = array(

    "Jose" => array("Idade"=> 25,"CPF"=>"087883456-18","RG"=>"2006089107117"),
    "Maria" => array("Idade"=> 18,"CPF"=>"057825456-15","RG"=>"2001089097112"),
    "Ana" => array("Idade"=> 24,"CPF"=>"037825445-30","RG"=>"2019089097118")
);

echo $clientes["Maria"]["RG"]."<br>";
echo $clientes["Ana"]["Idade"]."<br>";

 foreach ($clientes as $cliente => $info) {
   echo $cliente.": <br>";
    foreach ($info as $key => $value){
      echo $key." - ".$value."<br>";
    }
 }