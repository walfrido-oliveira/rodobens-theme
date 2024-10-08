<?php
/*
Template Name: Impacto
*/

get_header();

$image = get_field('bg');
$image_mobile = get_field('bg_mobile');

$projetos = get_field('projetos');

$nossa_presenca = get_field('nossa_presenca');
$nossa_presenca_mobile = get_field('nossa_presenca_mobile');

$galeria_de_imagens = get_field('galeria_de_imagens');

$selos_e_certificacoes = get_field('selos_e_certificacoes');

get_breadcrumbs();

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
  <h1 class="screen-reader-only"><?php the_title(); ?></h1>
  <section class="section-content" id="projetos_into">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2>Nossos projetos</h2>
        </div>
        <div class="content">
          <?php the_field('nossos_projeto') ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section-content" id="projetos">
    <div class="container">
      <div class="row">
        <div id="projetos_list">
          <?php foreach ($projetos as $key => $projeto) : ?>
            <div class="projeto-item">
              <div class="projeto-header">
                <div class="title" aria-hidden="true">
                  <?php echo $projeto['nome'] ?>
                </div>
                <button aria-expanded="false" aria-controls="content-<?php echo $key ?>" id="projeto_<?php echo $key ?>">
                  <span class="text" aria-hidden="true">Expandir</span>
                  <span class="screen-reader-only"><?php echo $projeto['nome'] ?></span>
                </button>
              </div>
              <div class="projeto-content" id="content-<?php echo $key ?>" role="region" aria-labelledby="accordion-<?php echo $key ?>" hidden>
                <div class="text">
                  <?php echo $projeto['texto'] ?>
                </div>
                <div class="imagem">
                  <?php
                  $imagem_1 = $projeto['imagem_1'];
                  $imagem_2 = $projeto['imagem_2'];
                  if ($imagem_1) :
                    echo wp_get_attachment_image($imagem_1, 'full', false);
                  endif;
                  if ($imagem_2) :
                    echo wp_get_attachment_image($imagem_2, 'full', false);
                  endif;
                  ?>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </section>
  <div class="separator" aria-hidden="true"></div>
  <section class="section-content" id="nossa_presenca">
    <div class="container">
      <div class="title">
        <h2>Nossa presença</h2>
      </div>
      <div class="content">
        <?php if ($nossa_presenca) :
          echo wp_get_attachment_image($nossa_presenca, 'full', false, array('class' => 'desktop-only', 'alt' => 'Mapa ilustrativo estático'));
          echo wp_get_attachment_image($nossa_presenca_mobile, 'full', false, array('class' => 'mobile-only', 'alt' => 'Mapa ilustrativo estático'));
        endif ?>
      </div>
    </div>
  </section>
  <section class="section-content" id="galeria">
    <div class="container">
      <div class="title">
        <h2>Galeria de imagens</h2>
      </div>
      <div class="row" id="galeria_list">
        <?php foreach ($galeria_de_imagens as $key => $galeria) : ?>
          <div class="galeria-item">
            <figure>
              <?php
                $imagem = $galeria['imagem'];
                if ($imagem) :
                  echo wp_get_attachment_image($imagem, 'full', false);
                endif;
              ?>
              <figcaption><?php echo $galeria['legenda'] ?></figcaption>
            </figure>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <section class="section-content" id="selos_e_certificacoes">
    <div class="container">
      <div class="title">
        <h2>Selos e certificações</h2>
      </div>
      <div class="row" id="selo_list">
        <?php foreach ($selos_e_certificacoes as $key => $selo) : ?>
          <div class="selo-item">
            <?php
              $imagem = $selo['imagem'];
              if ($imagem) :
                echo wp_get_attachment_image($imagem, 'full', false);
              endif;
            ?>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
</main>


<?php get_footer();
