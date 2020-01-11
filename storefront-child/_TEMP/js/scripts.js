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

		$(window).load(function() {
			$(".se-pre-con").fadeOut("slow");;
		});



});
