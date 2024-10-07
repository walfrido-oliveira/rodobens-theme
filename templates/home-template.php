<?php
/*
Template Name: Página Inicial
*/

get_header();

$hero = get_field('hero');
$hero_image = $hero['hero_image'];
$hero_image_mobile = $hero['hero_image_mobile'];
$hero_title = $hero['title'];

$about_us = get_field('about_us');
$about_image = $about_us['bg'];
$about_image_mobile = $about_us['bg_mobile'];
$about_title = $about_us['title'];
$about_text = $about_us['text'];
$about_button = $about_us['button'];
$about_us_slug = 'quem-somos';
$about_us_link = get_permalink(get_page_by_path($about_us_slug)->ID);

$impact = get_field('impact');
$impact_image = $impact['bg'];
$impact_image_mobile = $impact['bg_mobile'];
$impact_title = $impact['title'];
$impact_text = $impact['text'];
$impact_button = $impact['button'];
$impact_slug = 'impacto';
$impact_link = get_permalink(get_page_by_path($impact_slug)->ID);

$icons = get_field('icons');
$icons_image = $icons['bg'];
$icons_image_mobile = $icons['bg_mobile'];
$icons_title = $icons['title'];
$icons_list = $icons['icons_list'];

$support = get_field('support');
$support_image = $support['bg'];
$support_image_mobile = $support['bg_mobile'];
$support_title = $support['title'];
$support_text = $support['text'];
$support_button = $support['button'];
$support_slug = 'como-apoiar';
$support_link = get_permalink(get_page_by_path($support_slug)->ID);

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
    #about_us {
      background-image: url(<?php echo $about_image ?>);
    }
  }

  @media (max-width: 768px) {
    #about_us .bg-mobile {
      background-image: url(<?php echo $about_image_mobile ?>);
    }
  }

  @media (min-width: 769px) {
    #impact {
      background-image: url(<?php echo $impact_image ?>);
    }
  }

  @media (max-width: 768px) {
    #impact .bg-mobile {
      background-image: url(<?php echo $impact_image_mobile ?>);
    }
  }

  @media (min-width: 769px) {
    #icons .bg {
      background-image: url(<?php echo $icons_image ?>);
    }
  }

  @media (min-width: 769px) {
    #support .bg {
      background-image: url(<?php echo $support_image ?>);
    }
  }

  @media (max-width: 768px) {
    #support .bg {
      background-image: url(<?php echo $support_image_mobile ?>);
    }
  }
</style>

<main id="content">
  <section class="section-content" id="hero">
    <div class="container">
      <div class="title">
        <h1><?php echo $hero_title ?></h1>
      </div>
    </div>
  </section>

  <section class="section-content" id="about_us">
    <div class="container">
      <div class="row">
        <div class="bg"></div>
        <div class="title">
          <h2><?php echo $about_title ?></h2>
          <div class="bg-mobile"></div>
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
          <h2><?php echo $impact_title ?></h2>
          <div class="bg-mobile"></div>
          <div class="text">
            <?php echo $impact_text ?>
          </div>
          <a href="<?php echo $impact_link ?>" class="read-more"><?php echo $impact_button ?></a>
        </div>
        <div class="bg"></div>
      </div>
    </div>
  </section>

  <section class="section-content" id="icons">
    <div class="container">
      <div class="row">
        <div class="bg"></div>
        <div class="title">
          <h2><?php echo $icons_title ?></h2>
        </div>
      </div>
      <div class="icon-list">
        <?php foreach ($icons_list as $icon) : ?>
          <div class="icon-item">
              <div class="icon-header" style="background-image: url(<?php echo $icon['icon'] ?>);"></div>
              <div class="title"><?php echo $icon['title'] ?></div>
              <div class="content"><?php echo $icon['text'] ?></div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section class="section-content" id="support">
    <div class="container">
      <div class="row">
        <div class="content">
          <div class="title"><h2><?php echo $support_title ?></h2></div>
          <div class="text">
            <?php echo $support_text ?>
            <a href="<?php echo $support_link ?>" class="read-more-2"><?php echo $support_button ?></a>
          </div>
        </div>
        <div class="bg"></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
