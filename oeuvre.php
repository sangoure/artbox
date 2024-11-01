  <!-- appel du header--->
<?php require_once('header.php'); ?>
<?php require_once('oeuvres.php'); 
/* appel de la page par $GET */
$idoeuvre=$_GET['idoeuvre'];
/* verification du numbre des pages */
$nboeuvre=count($oeuvres);
?>

<main>
    <?php if(($idoeuvre>=0)and($idoeuvre<$nboeuvre)) : ?>
          <!-- affichage de la page --->
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?= $oeuvres[$idoeuvre]['image'] ?>" alt="<?= $oeuvres[$idoeuvre]['title'] ?>">
        </div>
        <div id="contenu-oeuvre">
              <!-- appel du titre--->
            <h1><?= $oeuvres[$idoeuvre]['title'] ?></h1>
              <!-- appel author--->
            <p class="description"><?= $oeuvres[$idoeuvre]['author'] ?></p>
            <!-- appel description copmlètte--->
            <p class="description-complete">
            <?= $oeuvres[$idoeuvre]['description'] ?>
            </p>
        </div>
    </article>
    <article>
        <!-- else=message d'erreur --->
    <p><?php else: echo "page en costruction"; endif; ?></p>
    </article>
</main>
<!--FOOTER-->
<?php require_once('footer.php'); ?>
</body>
</html>
