<?php if(!defined('PLX_ROOT')) exit; ?>

<aside class="bloc-4">
         
    <div class="widget">
        <h3>Tester les thèmes</h3>
         <?php eval($plxShow->callHook('MySkinSelect')) ?>
    </div> 

    <div class="widget">
        <h3>Plugin jQMeter</h3>
        <?php eval($plxShow->callHook('jQMeter')) ?> 
    </div>    
          
    <div class="widget">
        <h3><i class="flaticon-github2"></i> Plugin GitHub</h3>
        <?php eval($plxShow->callHook('github')) ?> 
    </div>    

    <div class="widget">
        <h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
        <ul>
            <?php $plxShow->catList('','<li><i class="flaticon-folder5"></i>
                <a href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
        </ul>
    </div>
    
     
    <div class="cb"></div>
     
     <div class="widget">
         <h3><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
         <ul>
           <?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
       </ul>
     </div>


     
     
</aside>
