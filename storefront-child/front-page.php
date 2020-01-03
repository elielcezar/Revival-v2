<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section id="principal">

  <div class="chamada">
    <div class="container">
      <h3>Redescubra seu guarda-roupa com nossos queridinhos!</h3>
      <p>Confira a coleção BODY ME, bodies biodegradávels, com proteção UV50+ e corte perfeito!</p>
    </div>
  </div>

  <div class="produtos">
    <div class="container">
      <?php
        echo do_shortcode('[products limit="8" columns="4"]');
      ?>
      <a href="https://revival.com.br/loja/" class="btn">Ver Mais</a>
    </div>
  </div>

  <div class="tagline tgl01">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 ilustra">
        </div>
          <div class="col-sm-7">
            <h3>A better tomorrow.</h3>
            <p>
              Queremos mudar tudo na moda. A cadeia de produção, a qualidade da roupa, o aproveitamento da matéria prima, o uso e o descarte. Vem que eu te conto!
            </p>
            <h3 class="rev"><a href="#" class="btn">Revolução Revival</a></h3>
          </div>
      </div>
    </div>
  </div>

  <div class="diferenciais">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <p class="entrega">ENTREGA EM TODO O BRASIL</p>
        </div>
        <div class="col-sm-4">
          <p class="troca">PRIMEIRA TROCA SEM CUSTO</p>
        </div>
        <div class="col-sm-4">
          <p class="pagamento">PAGAMENTO SEGURO</p>
        </div>
      </div>
    </div>
  </div>

  <div class="tagline mobile tgl02">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 ilustra">
        </div>
          <div class="col-sm-7">
            <h3>guenta coração!</h3>
            <p>
              A coleção Through You vai conquistar seu coração! Coming soon!
            </p>
          </div>
      </div>
    </div>
  </div>

  <div class="tagline mobile tgl03">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 ilustra">
        </div>
          <div class="col-sm-7">
            <h3>It’s a classic!</h3>
            <p>
              Quer inspiração para usar seus bodies da coleção BodyMe?
            </p>
            <a href="#" class="btn">Mood Hotel</a>
          </div>
      </div>
    </div>
  </div>

</section>


<?php get_footer(); ?>
