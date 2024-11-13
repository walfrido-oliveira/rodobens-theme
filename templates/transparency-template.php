<?php
/*
Template Name: Transparência
*/
get_header();

$image = get_field('bg');
$image_mobile = get_field('bg_mobile');

$arquivos = get_field('arquivos');
?>

<main id="content">

  <?php get_breadcrumbs(); ?>

  <h1 class="screen-reader-only"><?php the_title(); ?></h1>
  <section class="section-content" id="arquivos">
    <div class="container">
      <div class="row" id="arquivo_list">
        <?php foreach ($arquivos as $key => $arquivo) : ?>
          <div class="arquivo-item">
            <div class="nome">
              <a href="<?php echo $arquivo['documento'] ?>"><?php echo $arquivo['nome'] ?></a>
            </div>
            <div class="download">
              <a href="<?php echo $arquivo['documento'] ?>" title="Acessar o arquivo <?php echo $arquivo['nome'] ?>">Acessar documento</a>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
