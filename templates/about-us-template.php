<?php
/*
Template Name: Quem Somos
*/

get_header();

$visao__missao__valores = get_field('visao__missao__valores');

$foto_equipe = get_field('foto_equipe');
$foto_equipe_mobile = get_field('foto_equipe_mobile');

$governanca = get_field('governanca');
$conselho = $governanca['conselho_e_diretoria'];
$equipe = $governanca['equipe'];

$organograma = get_field('organograma');
$organograma_mobile = get_field('organograma_mobile');
?>

<main id="content">

  <?php get_breadcrumbs(); ?>

  <h1 class="screen-reader-only"><?php the_title(); ?></h1>
  <section class="section-content" id="nossa_missao">
    <div class="container">
      <div class="nossa-missao-container">
        <div class="nossa-missao-item">
          <div class="nossa-missao-icone visao-icone icon">
            <h2 aria-hidden="true">Nossa visão</h2>
          </div>
          <div class="titile">
            <h2>Nossa<br>visão</h2>
          </div>
          <div class="content"><?php echo $visao__missao__valores['visao'] ?></div>
        </div>
        <div class="nossa-missao-item">
          <div class="nossa-missao-icone  missao-icone icon">
            <h2 aria-hidden="true">Nossa missão</h2>
          </div>
          <div class="titile">
            <h2>Nossa<br>missão</h2>
          </div>
          <div class="content"><?php echo $visao__missao__valores['missao'] ?></div>
        </div>
        <div class="nossa-missao-item">
          <div class="nossa-missao-icone valores-icone icon">
            <h2 aria-hidden="true">Nossos valores</h2>
          </div>
          <div class="titile">
            <h2>Nossos<br>valores</h2>
          </div>
          <div class="content"><?php echo $visao__missao__valores['valores'] ?></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-content" id="equipe">
    <div class="bg"></div>
    <div class="foto-equipe">
      <?php if ($foto_equipe) :
        echo wp_get_attachment_image($foto_equipe, 'full', false, array('class' => 'desktop-only', 'alt' => 'Foto da equipe Rodobens'));
        echo wp_get_attachment_image($foto_equipe_mobile, 'full', false, array('class' => 'mobile-only', 'alt' => 'Foto da equipe Rodobens'));
      endif; ?>
    </div>
  </section>
  <section class="section-content" id="governanca">
    <div class="container">
      <h2>Governança</h2>
      <div class="row">
        <div class="col">
          <h3>Conselho e diretoria</h3>
          <div id="conselho">
            <?php foreach ($conselho as $item) : ?>
              <div class="conselho-item">
                <div class="conselho-header">
                  <?php $conselho_imagem = $item['imagem'];
                  if ($conselho_imagem) :
                    echo wp_get_attachment_image($conselho_imagem, 'full', false);
                  endif;
                  ?>
                </div>
                <div class="funcao">
                  <?php echo $item['funcao'] ?>
                </div>
                <div class="nome-completo">
                  <?php echo $item['nome_completo'] ?>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h3>Equipe</h3>
          <div id="equipe_list">
            <?php foreach ($equipe as $item) : ?>
              <div class="equipe-item">
                <div class="nome-completo">
                  <?php echo $item['nome_completo'] ?>
                </div>
                <div class="funcao">
                  <?php echo $item['funcao'] ?>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-content" id="organograma">
    <div class="container">
      <div class="row">
        <div class="col imagem-organograma">
          <?php if ($organograma) :
            echo wp_get_attachment_image($organograma, 'full', false, array('class' => 'desktop-only', 'alt' => 'Organograma da empresa'));
            echo wp_get_attachment_image($organograma_mobile, 'full', false, array('class' => 'mobile-only', 'alt' => 'Organograma da empresa'));
          endif; ?>
        </div>
        <div class="bg"></div>
      </div>
    </div>
  </section>
  <div class="separator" aria-hidden="true"></div>
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
  <div class="bg-footer" aria-hidden="true"></div>

</main>

<?php get_footer();
