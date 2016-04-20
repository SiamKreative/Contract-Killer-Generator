<?php
error_reporting(-1);
require('templates/header.php');
require('templates/elements.php');
?>
        <div id="sidebar-wrapper">
            <div class="sidebar-inner">

                <h3>G�rez votre propre contrat</h3>

                <p class="sidebar-description">
                    Remplissez les champs ci-dessous et cliquez sur le bouton "Enregistrer au format PDF" pour sauvegarder votre contrat au format PDF (test� uniquement sous chrome).
                </p>

                <?php require('templates/form.php'); ?>

                <div class="sidebar-about hidden-md hidden-sm">

                    <h3>A notre sujet</h3>
                    <p>
                        Traduit et mis-a-jour avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> en Allemagne par <a href="http://www.davaskweblimited.com/">davask web limited</a>.
                    </p>
                    <p>
                        Cet outil est une amelioration du travail de <a href="http://twitter.com/siamkreative/">SiamKreative</a>.
                    </p>
                </div>

            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">
                    <div id="contract">
                        <?php require('templates/contract.php'); ?>
                    </div><!-- /#contract -->
                </div><!-- /.container -->
            </div>
        </div>

<?php require('templates/footer.php'); ?>