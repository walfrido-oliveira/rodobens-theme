<?php
/*
Template Name: Quem Somos
*/

get_header();

$image = get_field('bg');
$image_mobile = get_field('bg_mobile');
$visao__missao__valores = get_field('visao__missao__valores');

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
  <h1 class="screen-reader-only"><?php the_title(); ?></h1>
  <section class="section-content" id="nossa_missao">
    <div class="container">
      <div class="nossa-missao-container">
        <div class="nossa-missao-item">
          <div class="nossa-missao-icone visao-icone"><h2 aria-hidden="true">Nossa visão</h2></div>
          <div class="titile"><h2>Nossa<br>visão</h2></div>
          <div class="content"><?php echo $visao__missao__valores['visao'] ?></div>
        </div>
        <div class="nossa-missao-item">
          <div class="nossa-missao-icone  missao-icone"><h2 aria-hidden="true">Nossa missão</h2></div>
          <div class="titile"><h2>Nossa<br>missão</h2></div>
          <div class="content"><?php echo $visao__missao__valores['missao'] ?></div>
        </div>
        <div class="nossa-missao-item">
          <div class="nossa-missao-icone valores-icone"><h2 aria-hidden="true">Nossos valores</h2></div>
          <div class="titile"><h2>Nossos<br>valores</h2></div>
          <div class="content"><?php echo $visao__missao__valores['valores'] ?></div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
