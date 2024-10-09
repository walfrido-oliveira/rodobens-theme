<?php
/*
Template Name: Contato
*/

get_header();

$image = get_field('bg');
$image_mobile = get_field('bg_mobile');

$junte_se_a_nos_imagem = get_field('junte_se_a_nos_imagem');
$junte_se_a_nos_imagem_mobile = get_field('junte_se_a_nos_imagem_mobile');

$qr_code = get_field('qr_code');

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
  <section class="section-content" id="contato">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="text">
            <?php the_field('texto') ?>
          </div>
          <div class="email">
            <?php the_field('email') ?>
          </div>
          <div class="telefone">
            <?php the_field('telefone') ?>
          </div>
          <div class="rede-sociais">
            <ul aria-label="redes sociais">
              <li class="facebook">
                <a href="<?php the_field('facebook', 'option') ?>"><span class="screen-reader-only">Acessar Facebook</span></a>
              </li>
              <li class="instagram">
                <a href="<?php the_field('instagram', 'option') ?>"><span class="screen-reader-only">Acessar Instagram</span></a>
              </li>
              <li class="linkedin">
                <a href="<?php the_field('linkedin', 'option') ?>"><span class="screen-reader-only">Acessar Linkedin</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col form-contato">
          <form action="" method="POST">
            <div class="form-group">
              <label for="nome" class="screen-reader-only">Nome</label>
              <input type="text" id="nome" name="nome" aria-required="true" required placeholder="Nome">
            </div>

            <div class="form-group">
              <div class="col">
                <label for="telefone" class="screen-reader-only">Telefone</label>
                <input type="tel" id="telefone" name="telefone" aria-required="true" required placeholder="Telefone">
              </div>
              <div class="col">
                <label for="email" class="screen-reader-only">E-mail</label>
                <input type="email" id="email" name="email" aria-required="true" required placeholder="e-mail">
              </div>
            </div>

            <div class="form-group">
              <label for="assunto" class="screen-reader-only">Assunto</label>
              <input type="text" id="assunto" name="assunto" aria-required="true" required placeholder="Assunto">
            </div>

            <div class="form-group">
              <label for="mensagem" class="screen-reader-only">Mensagem</label>
              <textarea id="mensagem" name="mensagem" aria-required="true" required aria-describedby="msg-info" maxlength="500" placeholder="Mensagem"></textarea>
            </div>

            <div class="form-group form-group-footer">
              <div class="checkbox-container">
                <input type="checkbox" id="privacidade" name="privacidade" class="checkbox" aria-required="true" required value="1">
                <label for="privacidade" class="custom-checkbox"></label>
                <label for="privacidade">Li e aceito as <a href="<?php echo esc_url(home_url('/politica-de-privacidade')); ?>" target="_blank">Política de Privacidade</a></label>
              </div>
              <div class="submit-container">
                <button class="button" type="submit">Enviar messagem</button>
              </div>
            </div>

            <div class="response <?php if(!empty($success_message) || !empty($error_message)) : echo 'show'; endif; ?>">
              <?php if (!empty($success_message)) : ?>
                <p class="success"><?php echo $success_message ?></p>
              <?php endif; ?>
              <?php if (!empty($error_message)) : ?>
                <p class="error"><?php echo $error_message ?></p>
              <?php endif; ?>
            </div>
          </form>
        </div>
      </div>
  </section>
  <section class="section-content" id="junte_se_a_nos">
    <div class="container">
      <div class="title">
        <h2>Junte-se a nós</h2>
      </div>
      <div class="row">
        <div class="col content">
          <?php the_field('junte-se_a_nos') ?>
          <div class="qr-code desktop-only">
            <?php if ($qr_code) :
              echo wp_get_attachment_image($qr_code, 'full', false, array('class' => 'desktop-only', 'alt' => 'Imagem de um Qr-code', 'aria-hidden' => 'true'));
            endif ?>
          </div>
          <div class="mobile-only-flex justify-content-center">
            <a class="button-secondary" href="#" title="Acessar página de trabalho voluntário">Cta Voluntário</a>
          </div>
        </div>
        <div class="col image">
          <?php if ($junte_se_a_nos_imagem) :
            echo wp_get_attachment_image($junte_se_a_nos_imagem, 'full', false, array('class' => 'desktop-only'));
            echo wp_get_attachment_image($junte_se_a_nos_imagem_mobile, 'full', false, array('class' => 'mobile-only'));
          endif ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
