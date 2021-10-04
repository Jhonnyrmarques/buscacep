<?php

  function get_address(){

    // Verificando se possui um cep
    if(isset ($_POST['cep'])){

      $cep = $_POST['cep'];
      $address = searchCepApi($cep);
      
    }else{
      $address = emptyAddress();
    }

    return $address;
    
  }


  function searchCepApi(String $cep){
      
    $url = "https://viacep.com.br/ws/$cep/xml/";

    return simplexml_load_file($url);
  
  }

  // Se não tiver nenhum cep, retorna um objeto vazio
  function emptyAddress(){
      return (object) [
          'cep' => '',
          'logradouro' => '',
          'bairro' => ''
      ];
  }

  

?>


