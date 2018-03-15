<?php


function GetCat() {
  $db = DbConnect();
  $req = $db->prepare('SELECT * FROM categories ORDER BY name');
  $req->execute();
  $categoriesArm = $req->fetchAll(PDO::FETCH_ASSOC);
  return $categoriesArm;
}

function GetArmInCat() {
  $db = DbConnect();
  $req = $db->prepare('SELECT * FROM categories JOIN stock ON stock.categories_id = categories.id ORDER BY stock.name');
  $req->execute();
  $ArmInCat = $req->fetchAll(PDO::FETCH_ASSOC);
  return $ArmInCat;
}

// function oneArm() {
//   $db = DbConnect();
//   $req = $db->prepare('SELECT * FROM stock WHERE id = ?');
//   $req->execute();
//   $onArm = $req->fetchAll(PDO::FETCH_ASSOC);
//   return $oneArm;
// }



function DbConnect() {
$bdd = new PDO('mysql:host=localhost;dbname=DidierMotte;charset=utf8','root', 'Five137');
return $bdd;
}
