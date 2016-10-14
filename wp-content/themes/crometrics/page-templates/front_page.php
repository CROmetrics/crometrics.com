<?php
/**
 * Template Name: The Front Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header(); ?>

<?php
while(have_posts()): the_post();
?>

<!-- Contact -->
<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modal-label">
<div class="modal-dialog modal-md" role="document">
  <div class="modal-content">
  <?php dynamic_sidebar('Contact Form'); ?>
  </div>
</div>
</div>
<!-- /Contact -->

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
<div class="container">
  <?php the_content(); ?>
</div>
</div>

<div class="container">
<h3 class="text-uppercase text-center"><?php the_field( "what_we_do_title" ); ?></h3>
<!-- Example row of columns -->
<div class="row">

<?php if( get_field('what_we_do_strip') ): ?>
    <?php $i=1; while( has_sub_field('what_we_do_strip') ): ?>
  <div class="col-md-4">
  <img class="center-block" src="<?php the_sub_field('image'); ?>" />
  <h2 class="text-center"><?php the_sub_field('title'); ?></h2>
  <p><?php the_sub_field('content'); ?></p>
  </div>
      <?php $i++; endwhile; ?>
<?php endif; ?>

</div>
</div>

<div class="container-fluid bg-gray-lighter">
<?php the_field( "crometrics_content" ); ?>
</div>

<div class="container-fluid bg-gray">
<div class="container">
  <h3 class="text-uppercase text-center"><?php the_field( "services_title" ); ?></h3>
  <div class="row">

<?php if( get_field('services_strip') ): ?>
    <?php $i=1; while( has_sub_field('services_strip') ): ?>
  <div class="col-md-4">
    <h2 class="text-center"><?php the_sub_field('title'); ?></h2>
    <hr class="small brown">
    <p><?php the_sub_field('content'); ?></p>
  </div>
    <?php $i++; endwhile; ?>
<?php endif; ?>


  </div>
</div>
</div>

<div class="container">
<h3 class="text-uppercase text-center"><?php the_field( "success_title" ); ?></h3>
<div class="row">

<?php if( get_field('success_strip') ): ?>
    <?php $i=1; while( has_sub_field('success_strip') ): ?>
  <div class="col-md-6">
  <img src="<?php the_sub_field('image'); ?>" class="center-block">
  <div class="divider">
    <hr class="small gray">&#8220;
    <hr class="small gray">
  </div>
  <?php the_sub_field('content'); ?>
  </div>
      <?php $i++; endwhile; ?>
<?php endif; ?>

</div>
</div>

<div class="container-fluid bg-gray">
<div class="container">
  <h3 class="text-uppercase text-center"><?php the_field( "who_calls_title" ); ?></h3>
  <div class="row">

<?php if( get_field('who_calls_strip') ): ?>
    <?php $i=1; while( has_sub_field('who_calls_strip') ): ?>
  <div class="col-md-4">
    <h2 class="text-center"><?php the_sub_field('title'); ?></h2>
    <hr class="small brown">
    <?php the_sub_field('content'); ?>
  </div>
    <?php $i++; endwhile; ?>
<?php endif; ?>

  </div>
</div>
</div>

<div class="container-fluid bg-gray-lighter">
<div class="container">
<?php $awards_titl = ot_get_option('awards_title'); ?>
<?php $awards_subtitl = ot_get_option('awards_subtitle'); ?>
<?php $awards_footer_tex = ot_get_option('awards_footer_text'); ?>

  <h3 class="text-uppercase text-center"><?php echo $awards_titl ; ?></h3>
  <h2 class="text-center"><?php echo $awards_subtitl ; ?></h2>
  <div class="row">
<?php
  if (function_exists('ot_get_option')) {
  $socail_conten = ot_get_option('awards_icon');?>

  <?php foreach($socail_conten as $socail_cont){
    if($socail_cont['link'] != '' || $socail_cont['image'] != '' ){ ?>
  <div class="col-md-4">
    <a href="<?php echo $socail_cont['link'];?>"><img src="<?php echo $socail_cont['image'];?>" alt="<?php echo $socail_cont['title'];?>" class="center-block"></a>
    <h4 class="text-center"><?php echo $socail_cont['title'];?></h4>
  </div>
      <?php }
  } ?>
<?php } ?>
  </div>
  <h3 class="text-center"><?php echo $awards_footer_tex ; ?></h3>
</div>
</div>



<?php
endwhile;
?>


<?php
get_footer();
