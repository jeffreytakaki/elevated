<?php 
/**
*Template Name: Front Page
**/
?>

<!DOCTYPE html>
<html>
<?php wp_head(); ?>
<body style="background-color: <?php echo get_option('page-color') ?>">
    <?php get_header();?>
    <?php         
        $fields_all = get_fields($post->ID);
        get_template_part( 'template-parts/homepage-hero', null, $fields_all); 
    ?>
 
    <?php  get_template_part('template-parts/pillboxes', null, $fields_all); ?>

    <?php the_content(); ?>

    <?php get_footer();?>
    <?php wp_footer(); ?>
</body>
</html>