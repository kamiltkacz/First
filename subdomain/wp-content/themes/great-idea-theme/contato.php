<?php get_header();?>





<h1><?php the_title();?></title></h1>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; endif;?>

</div>


<?php get_footer();?>