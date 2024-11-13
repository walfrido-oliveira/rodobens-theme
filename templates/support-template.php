<?php
/*
Template Name: Como Apoiar
*/


get_header();

$image = get_field('bg');
$image_mobile = get_field('bg_mobile');

$qr_code = get_field('qr_code');

$produtos = get_field('produtos');

$produto_1 = $produtos['produto_1'];
$produto_1_mobile = $produtos['produto_1_mobile'];
$produto_2 = $produtos['produto_2'];
$produto_2_mobile = $produtos['produto_2_mobile'];

$link_produto_1 = $produtos['link_produto_1'];
$link_produto_2 = $produtos['link_produto_2'];
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
  <section class="section-content" id="doacoes">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2>Doações</h2>
          <div class="content">
            <?php the_field('doacoes') ?>
          </div>
        </div>
        <div class="qr-code-container">
          <div class="qr-code">
            <?php if ($qr_code) :
              echo wp_get_attachment_image($qr_code, 'full', false, array('alt' => 'Qr Code para doação', 'aria-hidden' => 'true', 'class' => 'desktop-only'));
            endif;
            ?>
            <div class="pix" aria-label="Número da chave PIX"><?php the_field('chave_pix') ?></div>
            <div class="mobile-only-flex justify-content-center">
              <a class="button" href="#" title="Acessar página de trabalho voluntário">Cta Doação</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-content" id="loja_virtual">
    <div class="bg"></div>
    <div class="container">
      <div class="row">
        <div class="title">
          <h2>Loja virtual</h2>
          <div class="content">
            <?php the_field('loja_virtual') ?>
          </div>
          <div>
            <a href="#" class="external-link read-more green">CTA loja virtual</a>
          </div>
        </div>
        <div class="produtos">
          <div class="produto-1">
            <a href="<?php echo $link_produto_1 ?>">
              <?php if ($produto_1) :
                echo wp_get_attachment_image($produto_1, 'full', false, array('class' => 'desktop-only'));
                echo wp_get_attachment_image($produto_1_mobile, 'full', false, array('class' => 'mobile-only'));
              endif;
              ?>
            </a>
          </div>
          <div class="produto-2">
            <a href="<?php echo $link_produto_2 ?>">
              <?php if ($produto_2) :
                echo wp_get_attachment_image($produto_2, 'full', false, array('class' => 'desktop-only'));
                echo wp_get_attachment_image($produto_2_mobile, 'full', false, array('class' => 'mobile-only'));
              endif;
              ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
