<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>

<html lang="<?php $plxShow->defaultLang() ?>">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

<meta charset="<?php $plxShow->charset('min'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<meta name="author" content="GNANGANI" />   

<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />

<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>   
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css" media="screen"/>

	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>

<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
     


<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>	

<body class="top">
        
        <!-- header et navigation -->
        <div class="fat-nav">
          <nav class="fat-nav__wrapper">
                <ul>
                    <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>

                    <?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
                </ul>
            </nav>
        </div>

    <div class="wrap__body">
    
    <header class="header">
      
      <div class="deco">
          <div class="bloc-2">
               <span class="c1"></span>
           </div>
           <div class="bloc-2">
               <span class="c2"></span>
           </div>
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
      </div>
       

        <div class="wrap">
         
          <!--Title et subTitle -->
           <div class="bloc-12">
               <img class="logo" src="<?php eval($plxShow->callHook('colors','logo')) ?>" alt="<?php $plxShow->subTitle(); ?>">
                <h1><?php $plxShow->mainTitle('link'); ?></h1>
                <h3 class="red"><?php $plxShow->subTitle(); ?></h3>
           </div>

       </div>
    </header>

    
    <div class="wrap contenu">