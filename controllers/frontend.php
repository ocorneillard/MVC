<?php
// simple function, before i knew about OOP


require ('../model/frontend.php');


function categories() {
  $categories = GetArmInCat();
  require ("../view/Postview.php");
}

function GetCat() {
  $armoire = GetArmInCat();
  require ("../view/avoir.php");
}

?>
