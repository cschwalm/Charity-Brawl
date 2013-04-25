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

if (!empty($_POST['username']) && !empty($_POST['password'])) {

    $dB = new Database();

    if ($dB->authenticate($_POST['username'], $_POST['password']) === TRUE) {

        $_SESSION['username'] = $_POST['username'];

        $_SESSION['key'] = LOGGED_IN_KEY;

        header('Location: index.php');

        exit;
    }

     header('Location: login.php?error=TRUE');

     exit;
}

require_once('header.php');

?>
    <div class="container container-2">

        <!-- ERROR MESSAGE FOR INCORRECT LOGIN CODE -->
        <?php if (!empty($_GET['error'])) {
            echo '<div class="alert alert-error">
  		<button type="button" class="close" data-dismiss="alert">&times;</button>
  		<strong>Login Failed</strong> - Please check your username and password and try again.</div>';
		} ?>

      <div class="row-fluid">
      <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Username</label>
    <div class="controls">
      <input type="text" id="username" name="username" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>

      </div>
    </div>
    <?php require_once('footer.php');