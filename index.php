<?php

/*
 * Title: Charity Brawl
 * Date: 02/02/2013
 * Authors: Corbin Schwalm, Sean Slattery, Aaron Freth, Chris Norys.
 * Version: 1.0
 *
 * This application provides the ability for average internet users to be able
 * to create a custom donation page for their cause. Website visitors are
 * encourged to donated to causes by means of a reward system.
 *
 */

require_once ('includes/functions.php');

$dB = new Database();

$randomCharities = array(6);

$randomCharities = $dB->getRandomCharity(6);

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Limelight|Flamenco|Federo|Yesteryear|Josefin Sans|Spinnaker|Sansita One|Handlee|Droid Sans|Oswald:400,300,700"
    media="screen" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap-dropdown.js"></script>
    <link href="css/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css"
    />
    <link href="css/bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet"
    type="text/css" />
    <link href="css/bootstrap/css/fontawesome.css" media="screen" rel="stylesheet" type="text/css"
    />
    <link href="css/bootstrap/css/style.css" media="screen" rel="stylesheet" type="text/css"
    />
    <!-- Typekit fonts require an account and a kit containing the fonts used.
    see https://typekit.com/plans for details. <script type="text/javascript"
    src="//use.typekit.net/YOUR_KIT_ID.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
-->
    <title>Charity Brawl</title>
  </head>
<body>

	<div class="nav-home">
        <img class="image  pull-left" src="css/bootstrap/img/logo-2.png">
        <ul class="nav pull-right">
          <li><a href="index.php" class="a-1">Home<br /></a>
          </li>
          <li><a href="charity.php" class="a-1">Charities<br></a>
          </li>
          <li><a href="about.php" class="a-1">About<br></a></li>
          <?= isLoggedIn() ? '<li><a href="logout.php" class="a-1">Logout</a>' : '<li><a href="login.php" class="a-1">Login</a>'; ?>
          </li>
        </ul>
    </div>
    <div class="container-fluid container-fluid-1">
      <div class="container container-1">
        <div class="row-fluid">
          <span class="span12">
            <h1 class="heading">Making Giving Fun!
              <br>
            </h1>
            <p class="p-1">and best your friends with your generosity</p>
            <button class="btn btn-large btn-primary">Try it now&nbsp;→</button>
          </span>
        </div>
      </div>
    </div>
    <div class="container container-2">
      <div class="row-fluid">
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[0]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[0]->getShortDescription(); ?></p>
          <a href="charity.php?charityName=<?= $randomCharities[0]->getHandle(); ?>"><img class="image  pull-left" src="<?= $randomCharities[0]->getPhotoFilename(); ?>"></a>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[1]->getCommonName(); ?>
            <br>
          </h2>
          <p class="p-2"><?= $randomCharities[1]->getShortDescription(); ?></p>
          <a href="charity.php?charityName=<?= $randomCharities[1]->getHandle(); ?>"><img class="image  pull-left" src="<?= $randomCharities[1]->getPhotoFilename(); ?>"></a>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[2]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[2]->getShortDescription(); ?></p>
          <a href="charity.php?charityName=<?= $randomCharities[2]->getHandle(); ?>"><img class="image  pull-left" src="<?= $randomCharities[2]->getPhotoFilename(); ?>"></a>
        </span>
      </div>
      <div class="row-fluid">
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[3]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[3]->getShortDescription(); ?></p>
          <a href="charity.php?charityName=<?= $randomCharities[3]->getHandle(); ?>"><img class="image  pull-left" src="<?= $randomCharities[3]->getPhotoFilename(); ?>"></a>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[4]->getCommonName(); ?>
            <br>
          </h2>
          <p class="p-2"><?= $randomCharities[4]->getShortDescription(); ?></p>
          <a href="charity.php?charityName=<?= $randomCharities[4]->getHandle(); ?>"><img class="image  pull-left" src="<?= $randomCharities[4]->getPhotoFilename(); ?>"></a>
        </span>
        <span class="span4">
          <h2 class="heading heading-1"><?= $randomCharities[5]->getCommonName(); ?></h2>
          <p class="p-2"><?= $randomCharities[5]->getShortDescription(); ?></p>
          <a href="charity.php?charityName=<?= $randomCharities[5]->getHandle(); ?>"><img class="image  pull-left" src="<?= $randomCharities[5]->getPhotoFilename(); ?>"></a>
        </span>
      </div>
    </div>
    <?php require_once ('footer.php');