
<?php
/*
Template Name: Contato
*/

//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section class="chamada">
  <div class="container">
    <h2>Hello!</h2>
    <p>Amou? Não gostou?<br />Ficou na dúvida? Fala com a gente<br />que vamos resolver rapidinho!</p>
  </div>
</section>

<section id="principal">

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3>Contato</h3>
        <h4>Telefone / Whatsapp</h4>
        <p>
          (Fale com a Marina)<br />
          +55 (41) 9 9956 1036
        </p>

        <h4>Email</h4>
        <p>
          hello@revival.com.br
        </p>

        <h4>Face</h4>
        <p>
          <a href="http://www.facebook.com/revival-739162532953957">www.facebook.com/revival-739162532953957</a>
        </p>

        <h4>Insta</h4>
        <p>
          <a href="http://www.instagram.com/revival.brasil">@revival.brasil</a>
        </p>

      </div>

      <div class="col-sm-8">
        <h3>Manda um Recadinho</h3>
        <?php echo do_shortcode( '[contact-form-7 id="166" title="Formulário de contato 1"]' ); ?>
      </div>

      <div class="col-sm-12">
        <div class="duvidas">
          <?php
          while ( have_posts() ) : the_post(); ?>
              <?php the_content();
          endwhile
          ?>
        </div>        
      </div>
    </div>

  </div>


</section>


<?php get_footer(); ?>
