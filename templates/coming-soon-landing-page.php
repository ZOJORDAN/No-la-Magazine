<!DOCTYPE html>
<html lang="fr">
    
    <?php include 'head-elements/main-head.php'; ?>
    <?php include 'head-elements/head-toggle.php'; ?>
    <?php include 'head-elements/head-coming-soon.php'; ?>

    <body class="comingSoon">
        <!-- Bootstrap body inclusion -->
        <?php include 'bs-cdn-js.php'; ?>

        <!-- toggle inclusion -->
        <?php include 'toggle.php'; ?>

        <p class="scotchDisplay" id="logoFontSize">
            NO<span class="scotchDisplayMediumItalic" id="logoFontSize">&</span>LA
            <p class="poppinsLight" id="announcement">ARRIVE BIENTÔT</p>
        </p>
        <br>
        <p class="poppinsLight" id="invitation">REÇOIS UNE NOTIFICATION POUR LE LANCEMENT</p><br>
        <input type="email" name="usermail" placeholder="Entre ton e-mail" class="
        poppinsRegular form-control" size="40"><br>
        <input type="submit" value="VALIDER" class="poppinsRegular btn btn-dark">
    </body>
</html>