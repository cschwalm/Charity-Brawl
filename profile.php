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

if (empty($_GET['username']))
    die('Can\'t access access this page directly.');

$username = $_GET['username'];

$u = new User($username);

?>

<?= $u->getFirstAndLastName(); ?>

<?php require_once ('footer.php');