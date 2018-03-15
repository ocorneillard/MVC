<?php
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
