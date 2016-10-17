<?php get_header(); ?>

<div class="">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2>  <?php the_title();?> </h2>
        <small>Posté le: <?php the_time('j F Y') ?> à <?php the_time('g:i a') ?> </small>
        <p>
            <?php  the_content(); ?>
        </p>


        <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->
        <?php endwhile; else: ?>

        <!-- Le premier "if" testait l'existence d'Articles à afficher. Cette -->
        <!-- partie "else" indique que faire si ce n'est pas le cas. -->
        <p>Sorry, no posts matched your criteria.</p>

        <!-- Fin REELLE de La Boucle. -->
        <?php endif; ?>


</div>


<?php get_footer(); ?>
