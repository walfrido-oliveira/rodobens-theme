<?php
/*
Template Name: Nossa História
*/

get_header();

$image = get_field('bg');
$image_mobile = get_field('bg_mobile');

$imagem_direita = get_field('imagem_direita');
$imagem_direita_mobile = get_field('imagem_direita_mobile');
$imagem_esquerda = get_field('imagem_esquerda');
$imagem_esquerda_mobile = get_field('imagem_esquerda_mobile');
?>

<style>
  @media (min-width: 769px) {
    .breadcrumb .bg {
      background-image: url(<?php echo $image ?>);
    }
  }

  @media (max-width: 768px) {
    .breadcrumb .bg {
      background-image: url(<?php echo $image_mobile ?>);
    }
  }
</style>

<main id="content">

  <?php get_breadcrumbs(); ?>

  <h1 class="screen-reader-only"><?php the_title(); ?></h1>
  <section class="section-content" id="historia_1">
    <div class="container">
      <div class="row">
        <div class="col texto-esquerda"><?php the_field('texto_esquerda') ?></div>
        <div class="col imagem-direita">
          <?php if ($imagem_direita) :
            echo wp_get_attachment_image($imagem_direita, 'full', false, array('class' => 'desktop-only'));
            echo wp_get_attachment_image($imagem_direita_mobile, 'full', false, array('class' => 'mobile-only'));
          endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section-content" id="historia_2">
    <div class="container">
      <div class="row">
        <div class="col imagem-esquerda">
          <?php if ($imagem_esquerda) :
            echo wp_get_attachment_image($imagem_esquerda, 'full', false, array('class' => 'desktop-only'));
            echo wp_get_attachment_image($imagem_esquerda_mobile, 'full', false, array('class' => 'mobile-only'));
          endif; ?>
        </div>
        <div class="col texto-direita">
          <?php the_field('texto_direita') ?>
          <div class="separator desktop-only" aria-hidden="true"></div>
        </div>
        <div class="separator mobile-only" aria-hidden="true"></div>
      </div>
    </div>
  </section>
  <section class="section-content" id="video">
    <div class="container">
      <div class="row">
        <div class="col video-embled">
          <?php the_field('video') ?>
        </div>
        <div class="bg"></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
