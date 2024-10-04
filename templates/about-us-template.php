<?php
/*
Template Name: Quem Somos
*/

get_header();

$image = get_field('bg');
$image_mobile = get_field('bg_mobile');

get_breadcrumbs();

?>

<style>
  @media (min-width: 769px) {
    .bg {
      background-image: url(<?php echo $image ?>);
    }
  }

  @media (max-width: 768px) {
    .bg {
      background-image: url(<?php echo $image_mobile ?>);
    }
  }
</style>

<main id="content">

</main>

<?php get_footer();
