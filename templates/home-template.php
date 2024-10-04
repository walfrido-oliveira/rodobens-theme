<?php
/*
Template Name: Página Inicial
*/

get_header();

$hero = get_field('hero');
$hero_image = $hero['hero_image'];
$hero_image_mobile = $hero['hero_image_mobile'];
$title = $hero['title'];

$about_us = get_field('about_us');
$about_image = $about_us['bg'];
$about_text = $about_us['text'];
$about_button = $about_us['button'];
$about_us_title = 'quem-somos';
$about_us_link = get_permalink(get_page_by_path($about_us_title)->ID);

$impact_us = get_field('impact');
$impact_image = $impact_us['bg'];
$impact_text = $impact_us['text'];
$impact_button = $impact_us['button'];
$impact_us_title = 'impacto';
$impact_us_link = get_permalink(get_page_by_path($impact_us_title)->ID);

?>

<style>
  @media (min-width: 769px) {
    #hero {
      background-image: url(<?php echo $hero_image ?>);
    }
  }

  @media (max-width: 768px) {
    #hero {
      background-image: url(<?php echo $hero_image_mobile ?>);
    }
  }

  @media (min-width: 769px) {
    #about-us {
      background-image: url(<?php echo $about_image ?>);
    }
  }

  @media (min-width: 769px) {
    #impact {
      background-image: url(<?php echo $impact_image ?>);
    }
  }
</style>

<main id="content">
  <section class="section-content" id="hero">
    <div class="container">
      <div class="title">
        <h1><?php echo $title ?></h1>
      </div>
    </div>
  </section>

  <section class="section-content" id="about-us">
    <div class="container">
      <div class="row">
        <div class="bg"></div>
        <div class="title">
          <h2>Quem Somos</h2>
          <div class="text">
            <?php echo $about_text ?>
          </div>
          <a href="<?php echo $about_us_link ?>" class="read-more"><?php echo $about_button ?></a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-content" id="impact">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2>Impacto</h2>
          <div class="text">
            <?php echo $impact_text ?>
          </div>
          <a href="<?php echo $impact_us_link ?>" class="read-more"><?php echo $impact_button ?></a>
        </div>
        <div class="bg"></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
