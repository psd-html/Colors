<?php include(dirname(__FILE__).'/header.php'); ?>

    <article class="bloc-8">

          <div class="blog">
                
                <!-- Titre de l'article -->
                <h2><?php $plxShow->staticTitle(); ?></h2>
    
                <div class="contenu">
                    <!-- Affichage de la page-->
                    <?php $plxShow->staticContent(); ?>
                </div>

        </div>

    </article>

        <?php include(dirname(__FILE__).'/sidebar.php'); ?>

 </div>    

<?php include(dirname(__FILE__).'/footer.php'); ?>        