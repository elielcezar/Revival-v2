<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

<?php do_action( 'storefront_before_footer' ); ?>

<footer>

	<div class="container">
		<div class="row first-line">
			<div class="col-sm-3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-rodape.png" class="logo-footer" />
			</div>
			<div class="col-sm-9">
				<h5>Easy fashion for a better tomorrow</h5>
			</div>
		</div>

		<div class="row second-line">
			<div class="col-sm-3">
				<p>
					CNPJ: 31.973.763/0001-42
				</p>
				<p>
					+55 (41) 9 9956 1036
				</p>
				<p>
					hello@revival.com.br
				</p>
				<p class="redes-sociais">
					<a href="https://www.instagram.com/revival.brasil/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico-insta.png" /></a>
					<a href="https://www.facebook.com/RevivalEasyFashion/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico-fb.png" /></a>
				</p>
			</div>
			<div class="col-sm-3">
				<h5>Informações</h5>
				<ul>
					<li><a href="https://revival.com.br/contato">ATENDIMENTO</a></li>
					<li><a href="https://revival.com.br/trocas-e-devolucoes/">TROCAS E DEVOLUÇÕES</a></li>
					<li><a href="https://revival.com.br/politica-de-entrega/">POLÍTICA DE ENTREGA</a></li>
					<li><a href="https://revival.com.br/termos-de-condicao-e-uso/">TERMOS E CONDIÇÕES DE USO</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<h5>Conta</h5>
				<ul>
					<li><a href="https://revival.com.br/minha-conta/">MINHA CONTA</a></li>
					<li><a href="https://revival.com.br/minha-conta/orders/">MEUS PEDIDOS</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<h5>Segredinho Revival</h5>
				<p>
					Seja a primeira a saber!
				</p>
				<div class="mail-form">
					<?php echo do_shortcode('[contact-form-7 id="3440" title="Mailing"]'); ?>
				</div>
			</div>
		</div>

		<div class="row last-line">
			<div class="col-sm-12">
				<p class="copyright">
					Copyright 2019 © Revival.
				</p>
			</div>
		</div>

	</div>

	<?php do_action( 'storefront_footer' ); ?>

</footer>

<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>
<script>
jQuery(document).ready(function($){

	var tela = $( window ).width();

	/* header fixed */
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= 50) {
			$('header').addClass('fixed');
		} else {
			$('header').removeClass("fixed");
		}
	});

	/* reposicionamento de menu e carrinho */
	$('#menu-menu-principal').appendTo('.mainMenu .mainContainer').show();
	$('#site-header-cart').appendTo('header .container').show();

	/* botão do menu */
	$('.menuBtn').click(function() {
		$(this).toggleClass('act');
			if($(this).hasClass('act')) {
				$('.mainMenu').addClass('act');
			}
			else {
				$('.mainMenu').removeClass('act');
			}
	});

	/*reposicionamento dos links sociais no mobile */
	if(tela <= 767){
		$('footer .redes-sociais').prependTo('footer .last-line .col-sm-12');
	}

	$('.widget_shopping_cart').remove();
	$('#site-header-cart').html('<li><a href="https://revival.com.br/carrinho/">Carrinho</a></li>');

	/* home - remove 4 produtos */
	if(tela <= 767){
		$('.home .produtos li.product:nth-last-child(-n+4)').remove();
	}

	/* carrossel de imagens verticais */
	$('.flex-control-nav.flex-control-thumbs').slick({
	  infinite: true,
		vertical: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    verticalSwiping: true,
		arrows: false
	});
		/* cria os botoes de next/prev */
		$('.flex-control-nav').prepend($('<div />', {
	    class: 'btn-prev',
	    text: 'PREV'
	  }));
		$('.flex-control-nav').append($('<div />', {
	    class: 'btn-next',
	    text: 'NEXT'
	  }));
	  $('.btn-prev').on('click', function(){
			$('.flex-control-nav.flex-control-thumbs').slick('slickPrev');
	  });
		$('.btn-next').on('click', function (e) {
	    $('.flex-control-nav.flex-control-thumbs').slick('slickNext');
	  });

		/* altera os textos dos selects */
		$('#pa_cor option:first-child').html('Escolha a cor');
		$('#pa_tamanho option:first-child').html('Escolha o tamanho');


		/* calculo do frete na pagina */
		$('.calculo-de-frete').prepend($('<h5 />', {
	    class: 'custom',
	    text: 'Frete'
	  }));
		$('.calculo-de-frete input').attr('placeholder','Preencher CEP');

		if(tela <= 767){
			$('.pessoas').appendTo('.abas');
		}

		/* reorganiza as abas */
		$('#tab-sobre-a-peca').appendTo('ul #tab-title-sobre-a-peca');
		$('#tab-composicao').appendTo('ul #tab-title-composicao');
		$('#tab-tamanhos-e-caimento').appendTo('ul #tab-title-tamanhos-e-caimento');
		$('#tab-reviews').appendTo('ul #tab-title-reviews');

		/*setTimeout(function() {
		    var $tabs = jQuery( '.wc-tabs, ul.tabs' ).first();
		    $tabs.parent().find('#tab-description').hide();
				$tabs.parent().find('#tab-reviews').hide();
		    $tabs.parent().find( '.tab-title-description' ).removeClass('active');
		}, 10);*/


		/* produtos relacionados */
		$('.wrps_related_products_area_title').html('Olha mais!');

		/* carrinho */
		var total = $('.woocommerce-cart .order-total .woocommerce-Price-amount').text();
		$('.woocommerce-cart td.actions').prepend($('<h5 />', {
	    class: 'total',
	    text: 'Total ' + total + ''
	  }));

		$('.woocommerce-cart .woocommerce-message a').appendTo('.woocommerce-message');

		$('.woocommerce-cart .cart_totals h2').html('Pedido');
		$('.woocommerce-cart .cart_totals .checkout-button').html('Finalizar Compra');

		$('.step-crumb').prependTo('#main');

		$('.woocommerce-checkout .entry-header h1').html('Cobrança').prependTo('.woocommerce-billing-fields');

		$('.woocommerce-checkout h3#order_review_heading').html('Pagamento');

		$('.duvidas h4').click(function(){
			$(this).parent().find('p').toggleClass('open');
		});

		$('.archive ul.products li.product').removeClass('last').removeClass('first');

		$('.single-product .single_add_to_cart_button').click(function(){
				$(".se-pre-con").fadeIn();
		});


});

</script>

</body>
</html>
