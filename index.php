
   
        <?php require_once('header.php'); ?>
        <?php require_once('oeuvres.php'); 
        $nboeuvre=0 ;
        ?>
  
    <!--OEUVRES DATAS-->
    <main>
        <div id="liste-oeuvres">
        <?php foreach($oeuvres as $oeuvre): ?>
            <?php if ($oeuvre['is_enabled']): ?>
                <!-- structure de l'article oeuvre-->

                <!-- <article class="ouevre">
                    <a href="lien vers la page de l'ouvre">
                        <img src="chemin de l'image de l'oeuvre" alt="alt de l'oeuvre"/>
                        <h2> titre de l'oeuvre </2>
                        <p class="description"> Auteur de l'oeuvre</p>
                     </a>
            </article> -->

            <article class="oeuvre">
                <a href="oeuvre.php?idoeuvre=<?=$nboeuvre;?>">
                    <img src="<?=$oeuvre['image']?>" alt="<?=$oeuvre['title']?>">
                    <h2><?=$oeuvre['title']?></h2>
                    <p class="description"><?=$oeuvre['author']?></p>
                </a>
            </article>
            
            
         <?php $nboeuvre++ ; endif; endforeach;?>  
        </div>
    </main>
    <!--FOOTER-->
    <?php require_once('footer.php'); ?>
</body>
</html>