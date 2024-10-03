<?php
/*
Template Name: Página Inicial
*/

get_header();

$hero_image = get_field('hero_image');

?>

<style>
  #hero {
    background-image: url(<?php echo $hero_image ?>);
  }
</style>

<main id="content">
  <section class="section-content" id="hero">
    <div class="container">
      <div class="title">
        <h1><?php the_field('title') ?></h1>
      </div>
    </div>
  </section>

  <section class="section-content" id="sobre">

  </section>

  <section class="section-content" id="contato">

  </section>
</main>

<?php get_footer();
