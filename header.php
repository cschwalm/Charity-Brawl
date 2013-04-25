<?php

/*
 * Title: Charity Brawl
 * Date: 02/02/2013
 * Authors: Corbin Schwalm, Sean Slattery, Aaron Freth, Chris Norys
 * Version: 1.0
 *
 * This application provides the ability for average internet users to be able
 * to create a custom donation page for their cause. Website visitors are
 * encourged to donated to causes by means of a reward system.
 *
 * Main function starts below 'Application' class.
 */

/**
 * Provides the functionality for the photos of the application.
 * Functionality includes renaming by hash and resizing.
 *
 * @author Corbin Schwalm
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Limelight|Flamenco|Federo|Yesteryear|Josefin Sans|Spinnaker|Sansita One|Handlee|Droid Sans|Oswald:400,300,700"
    media="screen" rel="stylesheet" type="text/css" />
    <style>
      /* No content under the fixed bootstrap header. */
      body {
        padding-top: 60px;
      }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v1/"></script>
    <link href="css/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css"
    />
    <link href="css/bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet"
    type="text/css" />
    <link href="css/bootstrap/css/fontawesome.css" media="screen" rel="stylesheet" type="text/css"
    />
    <link href="css/bootstrap/css/style.css" media="screen" rel="stylesheet" type="text/css"
    />
    <title>Charity Brawl</title>
  </head>
  <body>
     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
          <a href="index.php"><img class="image  pull-left" src="css/bootstrap/img/logo.png"></a>
        <ul class="nav pull-right">
          <li><a href="index.php" class="a-1">Home<br /></a>
          </li>
          <li><a href="charity.php" class="a-1">Charities<br></a>
          </li>
          <li><a href="about.php" class="a-1">About<br></a></li>
          <li><?= isLoggedIn() ? '<a href="logout.php" class="a-1">Logout</a>' : '<a href="login.php" class="a-1">Login</a>'; ?></li>

        </ul>
      </div>
    </div>