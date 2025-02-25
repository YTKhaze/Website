<?php 
/*
*Template name: Homepage
*/
?>

<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="homepage">
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                <img src="http://localhost/frenchie_lyon_website/wp-content/themes/frenchie-lyon-25/assets/images/Untitled-2.png" class="img-fluid head-right-img" style="position: absolute; top: -85px;right: 0;z-index:-1;height: auto;width: 29vw;" alt="">
                    <?php echo  nl2br(types_render_field('home_page_top_heading', array('output' => 'raw')));?>
                    <div class="border-line"></div>
<?php
      
    the_content();
       

?>
                    <a href="<?php echo get_permalink( get_page_by_path( 'about us' ) ); ?>" class="btn btn-primary">Find out more</a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center statue-image">
                    <img src="<?php echo nl2br(types_render_field('top-floating-image',array('output'=>'raw'))); ?>" class="img-fluid" style="margin-left: 150px;  height: auto; width: 33vw;" alt="">
                </div>
            </div>
        </div>
    </section>

<div class="border-bottom2"></div>

    <section class="business-section">
        <div class="container-fluid" style="padding:0px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Untitled-7.png" alt="Helmet-bg"  class="img-fluid business-image">
        <div class="row align-items-center position-relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Helmet.png" alt="Helmet"  class="img-fluid business-image2">    
        <div class="col-12 col-sm-6 col-md-4">

</div>
<div class="col-12 col-sm-6 col-md-4 front-page-contact">
     <h2> <?php echo types_render_field('home_page_bottom_heading', array('output' => 'raw')); ?></h2> 
<div class="border-line"></div>
<p>
    <?php echo  nl2br(types_render_field('home_page_bottom', array('output' => 'raw'))); ?>
</p>
   
    <a href="<?php echo get_permalink( get_page_by_path( 'contact us' ) ); ?>" class="btn btn-primary">Contact us today</a>
</div>
<div class="col-12 col-sm-6 col-md-4 front-group-image">
<img src="<?php echo get_template_directory_uri(); ?>/images/front-page-group.png" alt="front-page-group-image" class="front-page-group-image img-fluid" style="  height: auto; width: 32vw;"> 
</div>
            </div>
        </div>
    </section>
</main>


<?php endwhile; endif; wp_reset_postdata(); ?>



<?php get_footer(); ?>


