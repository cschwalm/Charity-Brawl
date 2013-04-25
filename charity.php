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

if (empty($_GET['charityName'])) {

     header('Location: charity.php?charityName=save-walter-white');

     exit;
}

$handle = $_GET['charityName'];

$c = new Charity($handle);

require_once('header.php');
?>
    <div class="container container-2">

        <div class="row-fluid charity-info">
            <h2><?= $c->getCommonName(); ?></h2>
            <img class="img-rounded image" src="<?= $c->getPhotoFilename(); ?>" />
            <p><?= $c->getShortDescription(); ?></p>
            <div id="top-players">

                <h3>Top Supporters</h3>
                <div id="top-players-board">

                    <div class="player">
                        <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                        <span class="player-id">XXXX</span>
                    </div>

                    <div class="player">
                        <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                        <span class="player-id">XXXX</span>
                    </div>

                    <div class="player" style="margin-right: 0px;">
                        <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                        <span class="player-id">XXXX</span>
                    </div>

                </div>
            </div>
            <div class="charity-awards">

                <h3>Awards</h3>

                <div>
                    <img src="" />
                    <h4>First Place: Badge of Awesome!</h4>
                    <p>Being the top supporter will grant you a badge for your profile for you to show how charitable you are!</p>
                </div>

                <div>
                    <img src="" />
                    <h4>Second Place: Badge of Sweetness!</h4>
                    <p>Being the top supporter will grant you a badge for your profile for you to show how charitable you are!</p>
                </div>

                <div>
                    <img src="" />
                    <h4>Third Place: Badge of Thanks a' Plenty!</h4>
                    <p>Being the top supporter will grant you a badge for your profile for you to show how charitable you are!</p>
                </div>

            </div>
        </div>

        <div class="row-fluid charity-board">
            <div id="header">
                <div id="player-points">Player Points: XXX</div>
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        Action
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li onClick="setActionVar(1); performAction();" href="#">Move Up One: 50 points</li>
                        <li onClick="setActionVar(2); performAction();" href="#">Random Place: 200 points</li>
                        <li class="divider"></li>
                        <li onClick="showCrosshairs(3);" href="#">Target Someone Down: 250 points</li>
                        <li onClick="showCrosshairs(4);" href="#">Block Attack: 50 points</li>
                        <li onClick="showCrosshairs(5);" href="#">Deflect Attack: 250 points</li>
                        <li onClick="showCrosshairs(6);" href="#">Retribution: 150 points</li>
                    </ul>
                </div>
            </div>
            <div id="board">

                <div class="player">
                    <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                    <span class="player-id">XXXX</span>
                    <span class="player-crosshair-select"><img src="css/bootstrap/img/target.png" onClick="performAction($$$$$ TARGET ID $$$$$)" /></span>
                    <span class="player-point-total">Points: XXXX</span>
                </div>

                <div class="player">
                    <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                    <span class="player-id">XXXX</span>
                    <span class="player-crosshair-select"><img src="css/bootstrap/img/target.png" onClick="performAction($$$$$ TARGET ID $$$$$)" /></span>
                    <span class="player-point-total">Points: XXXX</span>
                </div>

                <div class="player active-player">
                    <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                    <span class="player-id"><strong>YOU!</strong></span>
                    <span class="player-point-total">Points: XXXX</span>
                </div>

                <div class="player">
                    <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                    <span class="player-id">XXXX</span>
                    <span class="player-crosshair-select"><img src="css/bootstrap/img/target.png" onClick="performAction($$$$$ TARGET ID $$$$$)" /></span>
                    <span class="player-point-total">Points: XXXX</span>
                </div>

                <div class="player">
                    <span class="player-avatar"><img src="css/bootstrap/img/player-default.png" class="img-rounded" /></span>
                    <span class="player-id">XXXX</span>
                    <span class="player-crosshair-select"><img src="css/bootstrap/img/target.png" onClick="performAction($$$$$ TARGET ID $$$$$)" /></span>
                    <span class="player-point-total">Points: XXXX</span>
                </div>

            </div>

            <div class="payment-button"> <script
                    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button middle"
                    data-key="pk_test_aTPZswZ6pWNXJQndYbUj8DLX"
                    data-amount="500"
                    data-name="Charity Brawl"
                    data-description="250 Points"
                    data-image="/128x128.png">
                </script></div></div>


        <div class="charity-bio">
            <h3>Charity Bio</h3>
            <p><?= $c->getDescription(); ?></p>
        </div>

    </div>
<?php require_once('footer.php'); ?>