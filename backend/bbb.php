<?php
if(!empty($_POST['play'])){ // $characterの中には連想配列が格納される
  $character = $_POST['play'];
  echo $character;
}

if(!empty($_POST['your_name'])){
  $your_name = $_GET['your_name'];
  echo $your_name;
?>
