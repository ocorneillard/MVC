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

  </div>
  <div class="main--search">

  </div>
  <section class="main--stock">

  </section>

  <section class="main--categories">

  </section>
</main>
<div class="end">

</div>


<?php $content = ob_get_Clean(); ?>
<?php require ('template.php'); ?>
