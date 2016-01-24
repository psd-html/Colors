 <?php if (!defined('PLX_ROOT')) exit; ?>

 <footer>
        
        <div class="deco">
          <div class="bloc-2">
               <span class="c3"></span>
           </div>
           <div class="bloc-2">
               <span class="c4"></span>
           </div>
           <div class="bloc-2">
               <span class="c5"></span>
           </div>
           <div class="bloc-2">
               <span class="c6"></span>
           </div>
           <div class="bloc-2">
               <span class="c7"></span>
           </div>
           <div class="bloc-2">
               <span class="c8"></span>
           </div>
      </div>
       
       
       <div class="wrap">
        
         <div class="bloc-4">
             <h2>A propos</h2>
             <p>
               <?php eval($plxShow->callHook('colors','about')) ?>
             </p>
         </div>
         
         <div class="bloc-4">
             <h2>Tags</h2>
             <ul class="tags">
                 <?php $plxShow->tagList('<li><a class="tag" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
             </ul>
         </div>
         
         
         
         <div class="bloc-4">
             <h2>Nous suivre</h2>

             <div class="flux">
                 <a href="<?php eval($plxShow->callHook('colors','facebook')) ?>" class="facebook" title="page facebook">Facebook</a>
                 <a href="<?php eval($plxShow->callHook('colors','google')) ?>" class="google" title="page google plus">Google+</a>
                 <a href="<?php eval($plxShow->callHook('colors','twitter')) ?>" class="twitter" title="Page twitter">Twitter</a>
                 <a href="/feed/rss" class="rss">Fil Rss des articles</a>
             </div>
             
         </div>
         
        </div>
        
        <div class="wrap">
           <div class="bloc-12 center">
               <a href="#top" class="scroll"><span class="flaticon-come"></span></a>
           </div>
       </div>
        
        
         <div class="copyright">
             <div class="wrap">
                    <div class="bloc-12">
                        <p>
                          <?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml<i class="flaticon-leaf3"></i></a>
                          Page générée <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> 
                          utilisant la technologie <a href="http://libertea.fr">SASS</a> 
                          <i class="flaticon-lock4"> </i><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
                          - <?php $plxShow->httpEncoding() ?>  
                          <i class="flaticon-accepted"> </i><a href="http://validator.w3.org/check?uri=referer">W3C</a>
                        </p>
                    </div>
               </div>

         </div>
         
    </footer>
    
    </div> 
    

    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> 
    <script src="<?php $plxShow->template(); ?>/js/app.min.js"></script>
    <script>
        (function() {
            $.fatNav();
        }());
    </script>
</body>
</html>