<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bienestar | </title>
		
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- inject:css-->
		<!-- endinject-->
		<link rel="stylesheet" href="/assets_web/css/main.min.css">
		<link href="https://fonts.googleapis.com/css?family=Asap:400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<!--<link rel="stylesheet" href="/assets_web/libs/fontawesome/web-fonts-with-css/css/fontawesome.min.css">-->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">

		<style>
			.c-blog__articles{
				visibility: visible !important;
			}
		</style>

	</head>

	<div class="modal" id="myModal">
		<div class="modal-content"><span class="close">&times;</span>
			<form>
				<h1 class="c-info__h1 u-mb40"><span>Importante</span></h1>
				<p>Acepto y autorizo que Laboratorios Saval a través de su Programa Bienestar Saval pueda enviarme información respecto de Temas de Interés como también información del Programa de Descuento Bienestar Saval en virtud de la ley 19.623.</p>
				<div class="form-group">
					<label for="">
						<input v-model="accepted" type="checkbox"> He Le&iacute;do y acepto los t&eacute;rminos y condiciones
					</label>
				</div>
				<div class="form-group">
					<h2>Elija la Informaci&oacute;n de preferencia</h2>
				</div>
				<div class="form-group">
					@foreach (\App\Category::all() as $category)
					<div class="group-check">
						<label for="">
							<input v-model="categories" type="checkbox" value="{{ $category->id }}"> {{ $category->name }}
						</label>
					</div>
					@endforeach
				</div>
				<div class="form-group-full">
					<a class="btnSuscribirse" @click="send" href="javascript:void(0)">Suscribirse</a>
				</div>
			</form>
		</div>
	</div>
	<body>
		<div id="wrapper">
			<div class="c-top">
				<div class="c-inner">
					<div class="c-top__nav">
						<ul>
							<li><a href="/faqs">Preguntas frecuentes</a></li>
							<li><a href="#">Términos y condiciones</a></li>
						</ul>
					</div>
				</div>
			</div>
			<header class="c-header">
				<div class="c-header__top">
					<div class="c-header__inner">
						<div class="c-header__brand"><a href="/" target="_blank"><img src="/assets_web/img/header-logo-v2.png" alt="Laboratorios Saval"></a></div>
						<div class="c-header__boxSearch">
							<div class="c-header__brandSaval"><a href="https://www.savalcorp.com/es/" title="Enlace a Saval" target="_blank"><img src="/assets_web/img/saval-color.svg" alt="Laboratorios Saval"></a></div>
							<div class="c-header__email"><span class="icon-Correo"></span>
								<p><a href="mailto:contacto@bienestarsaval.cl">Email :  contacto@bienestarsaval.cl</a></p>
							</div>
							<!--.c-header__searh
							form(action="#")
								.input.search
									input(type="text" placeholder="Buscar")
								.icon
									span.icon-Lupa-02
							-->
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="c-header__nav"><a class="btnSaval" href="https://www.savalcorp.com/es/" target="_blank"><img src="/assets_web/img/logo-saval-footer.png"></a>
					<div class="c-brand-bienestar"><img src="/assets_web/img/bienestar-hor.svg"></div>
					<div class="c-inner">
						<nav>
							<ul>
								<li><a href="/">Home</a></li>
								<li><a href="/somos">Quiénes somos</a></li>
								<li><a href="/programa-descuentos">Programa de descuento</a></li>
								<li><a href="/categorias/infantil">Temas de interés</a></li>
								<li><a href="/contacto">Contacto																								</a></li>
							</ul>
						</nav>
						<div class="c-header__nav-mobile"><a class="c-header__mobile-open" href="#"><span class="fas fa-bars"></span><i>Menu</i></a><a class="c-header__mobile-account" href="#" style="display:none;"><span class="fas fa-user-circle"></span><i>Mi cuenta						</i></a>
							<!--a.c-header__mobile-search(href="#")
							span.icon-Lupa-02
							i ¿Qué buscas?									
							-->
						</div>
						<div class="c-header__brand c-header__brand--mobile"><img src="/assets_web/img/header-logo-v2.png" alt="Laboratorios Saval"></div>
					</div>
				</div>
			</header>
			<div class="c-header__navOpen"><a class="close-nav" href="/"><span class="fas fa-times"></span></a>
				<nav>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/somos">Quiénes somos</a></li>
						<li><a href="/programa-descuentos">Programa de descuento</a></li>
						<li><a href="/categorias/infantil">Temas de interés</a></li>
						<li><a href="/contacto">Contacto	</a></li>
					</ul>
				</nav>
			</div>

			
        @yield('content')
			<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

			@yield('js')
			<script>
			</script>
			<script src="/assets_web/js/libs/bundle.js"></script>
			<script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
			<!-- inject:js-->
			<!-- endinject-->
			<script src="/assets_web/js/libs/owl-carousel/owl.carousel.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF7YP48-E060udEXnypBIPVSYtC1Shf6A&amp;callback=initMap" async defer></script>
			<script src="/assets_web/js/map.js"></script>
			<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
			<script src="/assets_web/js/main.min.js"></script>
			<script>
				let email;
				$(".btnSuscribirse").click(function () {
				    let input = $(this).parent().parent().find("#emailUser");
				    email = $(input);
				});

                const app = new Vue({
                    el: "#myModal",
                    data() {
                        return {
                            email: null,
                            categories: [],
                            accepted: false
                        }
                    },
                    methods: {
                        send: function (e) {
                            let self = this;
                            this.email = email.val();
                            if (this.accepted) {
                                $(e.toElement).text('Enviando ...');
                                $.post('/api/subscribes', {
                                    email: this.email,
                                    categories: this.categories
                                }, function (){
                                    self.categories = [];
                                    self.accepted = false;
                                    $(e.toElement).text('Gracias por suscribirse!');
									email.val("");
                                }).fail(function () {
                                    $(e.toElement).text('SUSCRIBIRSE');
								});
                            } else {
								alert('Debe aceptar los terminos y condiciones');
							}
                        }
                    }
                });
			</script>

			<div class="c-footerLocation">
				<div class="c-footerLocation__inner">
					<div class="c-footerLocation__boxes">
						<div class="c-footerLocation__box c-footerLocation__box--lightOrange">
							<div class="c-footerLocation__icon c-footerLocation__icon--mediumOrange"><img src="/assets_web/img/iconos/icon-location.svg" alt="Location"></div>
							<h2>Laboratorios Saval</h2>
							<p><a href="https://www.google.com/maps/dir//Laboratorios+Saval+S.A.+-+Calle,+Pdte+Eduardo+Frei+Montalva+4600,+Renca,+Regi%C3%B3n+Metropolitana/@-33.3943855,-70.6919949,16z/data=!4m9!4m8!1m0!1m5!1m1!1s0x9662c694c490a50d:0x837a4147e76356ac!2m2!1d-70.6906876!2d-33.3894219!3e0" target="_blank">Av. Presidente Eduardo Frei Montalva 4.600 <br />Renca - Santiago de Chile.</a></p>
						</div>
						<div class="c-footerLocation__box c-footerLocation__box--darkOrange">
							<div class="c-footerLocation__icon c-footerLocation__icon--darkOrange"><img src="/assets_web/img/iconos/icon-email.svg" alt="Location"></div>
							<h2>Email</h2>
							<p><a href="mailto:contacto@bienestarsaval.cl"> contacto@bienestarsaval.cl</a></p>
						</div>
					</div>
				</div>
			</div>

			<footer class="c-footer">
				<div class="c-inner">
					<div class="c-footer__boxes">
						<div class="c-footer__box">
							<figure><img src="/assets_web/img/footer-logo-v2.png" alt="Saval"></figure>
							<p>Programa de descuento en <br />medicamentos de Laboratorios SAVAL.</p>
						</div>
						<div class="c-footer__box">
							<h2>Páginas</h2>
							<ul> 
								<li><a href="/">Home</a></li>
								<li><a href="/somos">Quiénes somos</a></li>
								<li><a href="/programa-descuentos">Programa de descuento </a></li>
								<li><a href="/categorias/infantil">Temas de interés</a></li>
								<li><a href="/contacto">Contacto</a></li>
								<li><a href="/faqs">Preguntas frecuentes</a></li>
							</ul>
						</div>
						<div class="c-footer__box">
							<h2>Suscríbase a nuestros Temas de interés</h2>
							<p>Recibirá semanalmente artículos <br /> relevantes y recomendaciones para cuidar su salud.</p>
							<form id="submitSuscribirse">
								<div class="input email">
									<input type="text" class="emailSuscribirse" placeholder="Email">
								</div>
								<div class="input submit">
									<a class="btnSuscribirse" href="javascript:void(0)"></a>
								</div>
							</form>
						</div>
						<div class="c-footer__box c-logo-footer">
							<a href="https://www.savalcorp.com/es/" target="_blank" title="Enlace a Laboratoris SAVAL"> 
								<figure><img src="/assets_web/img/logo-saval-footer.png" alt="Saval"></figure>
								<p>Laboratorios SAVAL.<strong>www.saval.cl</strong></p>
							</a>	
						</div>
					</div>
				</div>
			</footer>
			<div class="c-copyright">
				<div class="c-inner">
					<p>© 2018 SAVAL. All rights reserved.</p><a class="c-copyright__link" href="https://www.savalcorp.com/es/" target="_blank">www.saval.cl</a>
					<ul>
						<li><a href="#">Términos y condiciones</a></li><span>-</span>
						<li><a href="#">Politicas de privacidad y cookies</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="c-madeIn">
				<div class="c-inner"><a href="#">Diseñado y desarrollado por Ant Digital</a></div>
			</div>
		</div>
	</body>
</html>