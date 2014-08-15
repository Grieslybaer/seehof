<?php get_header(); ?>

<div id="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     
    <?php /* the_date('','<h2>','</h2>'); */?>
     
    <div class="post" id="post-<?php the_ID(); ?>">
    <h3 class="storytitle"><?php the_title(); ?></h3>
     
    <div class="storycontent">
    <?php the_content(__('(more...)')); ?>
    </div>
     
    </div>
     
     
    <?php endwhile; else: ?>
    <p>Ein Fehler ist aufgetreten.</p>
    <?php endif; ?>

</div>
 
 
 
<?php get_footer(); ?>