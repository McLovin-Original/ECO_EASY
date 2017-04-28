<?php

function randomAlpha($lenght){
  $characters="ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvxyz0123456789";
  $Cantidad=strlen($characters);
  $randomAlphanum="";
  for ($i=0; $i <$lenght ; $i++) {
    $randomAlphanum.=$characters[rand(0, $Cantidad - 1)];
  }
  return $randomAlphanum;
}

 ?>
