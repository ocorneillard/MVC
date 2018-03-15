<?php $title = "First page"; ?>
<?php ob_start(); ?>
<nav>

</nav>

<header>
  <div class="header--box">
    <div class="header--box--img">
    </div>
    <div class="header--box--info">
      <p>Antiquités • Décoration • Aménagements d'intérieur</p>
      <p>☎ +32 495/20.59.34</p>
    </div>
    <div class="header--box--button">
      <a href="#">Présentation</a>
      <a href="#">Le stock</a>
      <a href="#">Contact</a>
    </div>
  </div>
</header>

<main>
  <div class="main--title">
    <p>LE STOCK</p>
  </div>
  <div class="main--search">
    <p>FOUILLER LE STOCK</p>
    <form class="" action="index.html" method="post">
      <input type="text" name="" value="">
      <input type="submit" name="rechercher" value="">
    </form>
  </div>
  <section class="main--stock">
    <p>DERNIERS OBJETS</p>

  </section>

  <section class="main--categories">
    <p>FOUILLER LE STOCK</p>
  </section>
</main>
<div class="end">
  <div class="end--txt">
    <p>"L'ennui naquit un jour de l'uniformité"</p>
  </div>
</div>

<footer>
  <p>© 2018 Didier Motte +32 495 20 59 34 - dmotte@skynet.be - Plan d'accès</p>
  <p>Décorateur, Antiquités, Aménagement d'intérieurs, Belgique</p>
  <p>Restez à jour via: Facebook  Instagram </p>
  <p>Conçu & développé par pixeline</p>

</footer>


<?php $content = ob_get_Clean(); ?>
<?php require ('template.php'); ?>
