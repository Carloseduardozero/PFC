<?php

//Valores passados são o array e o objeto XML
function array_para_xml( $data, &$xml_data){
  foreach( $data as $key => $value){
    if( is_array($value) ){
      if( is_numeric($key) ){
          $key = 'item'.$key;
      }
      $subnode = $xml_data->addChild($key);
      array_para_xml($value, $subnode);
    } else {
      $xml_data->addChild($key, htmlspecialchars($value));
    }
  }
}

//Declaração de um array
$array = array(

  "Nome" => "Joanderson",
  "Sobrenome" => "Santos",
  "Idade" => 19

);

//Criação de um objeto
$xml = new SimpleXMLElement('<data/>');

//Chamado da função
array_para_xml($array,$xml);

$result = $xml->asXml();

var_dump ($result);