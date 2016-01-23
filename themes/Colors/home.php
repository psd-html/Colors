<?php include(dirname(__FILE__).'/header.php'); ?>

    <article class="bloc-8">

        <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

              <div class="blog">

                    <!-- Titre de l'article -->
                    <h2><?php $plxShow->artTitle('link'); ?></h2>

                    <p class="infos">
                        <i class="flaticon-pencil5"></i><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> le <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
                        <span class="right">
                            <i class="flaticon-text"></i><?php $plxShow->artNbCom(); ?> 
                        </span>             
                    </p>

                    <div class="contenu">
                        <!-- Afficher l'image d'accroche -->
                        <?php $plxShow->artThumbnail(); ?>
                        
                        <!-- Affichage de l'article-->
                        <?php $plxShow->artChapo('Lire la suite'); ?>
                    </div>

                    <!-- informations de l'article, catégorie et Tags -->
                    <p class="infos">
                        <i class="flaticon-folder5"></i>Classé dans : <?php $plxShow->artCat() ?>
                   </p>

                    <?php $plxShow->artTags('<a class="tag" href="#tag_url" title="#tag_name">#tag_name</a>','') ?>
            </div>

     <!-- fin de la boucle -->
        <?php endwhile; ?>

            <div class="pagination">
                <?php $plxShow->pagination(); ?>
            </div>

        </article>

        <?php include(dirname(__FILE__).'/sidebar.php'); ?>

</div>    

<?php include(dirname(__FILE__).'/footer.php'); ?>        