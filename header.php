<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
			 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			 <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
			 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
			 <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
			 <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
			 <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
			 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
			 <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>

		 </head>
		 <body>

<nav class="navbar nav_grande ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mconavbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
		&#9776;
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="mconavbar">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'nav navbar-nav navbar-right',
			'depth'             => 2,
			'container'         => false,
		) );
		?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Titre et fond alpha -->

        <header>
                <div id="logos">

                   <article id="titre_page">
                          <h1>MICHEL <br>
                              CASTELAIN</h1>
                          <h2>concepteur d'objets en carton</h2>
                  </article>

                    <!-- <div class="sociaux_haut">
                       <a href=https://www.skype.com/en/><i class="fa fa-skype fa-2x" aria-hidden="true"></i></a>
                       <a href=https://www.facebook.com/><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                       <a href=https://www.youtube.com/><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                       <a href=https://twitter.com/><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                     </div> -->

                </div>

        </header>
