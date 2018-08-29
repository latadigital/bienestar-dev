@extends('web.layout.layout')

@section('content')
			<main role="main">
				<div class="c-bigbanner">
					<div class="c-bigbanner__slides owl-carousel owl-theme" id="slider">
						<div class="c-bigbanner__slide">
							<a href="/programa-descuentos" title="">
								<div class="c-bigbanner__image"><img src="/assets_web/img/home-bigbanner.jpg" alt=""></div>
								<div class="c-bigbanner__info">
									<hgroup>
										<h2 class="animated bounce fadeInDown"><span>Nuevo </span>programa de</h2>
										<h1 class=" animated bounce fadeInUp">Descuento</h1>
									</hgroup><span class=" animated bounce fadeInUp"> <i>en </i>medicamentos</span>
								</div>
							</a>
						</div>
						<div class="c-bigbanner__slide">
							<div class="c-bigbanner__image"><img src="/assets_web/img/alergias.jpg" alt=""></div>
							<div class="c-bigbanner__info">
								<hgroup>
									<h2 class="animated bounce fadeInDown"><span>¿Qué </span>hacer contra las</h2>
									<h1 class=" animated bounce fadeInUp">Alérgias</h1>
								</hgroup><span class=" animated bounce fadeInUp"> <i>esta </i>primavera?</span>
							</div>
						</div>
						<!--<div class="c-bigbanner__slide">
							<div class="c-bigbanner__image"><img src="/assets_web/img/5-S.jpg" alt=""></div>
							<div class="c-bigbanner__info">
								<hgroup>
									<h2 class="animated bounce fadeInDown"><span>¡Conoce </span>todo sobre la</h2>
									<h1 class=" animated bounce fadeInUp">fiebre</h1>
									</hgroup><span class=" animated bounce fadeInUp"> <i>¡Cuidemos </i>a nuestros hijos!</span>
							</div>
						</div>-->
					</div>
				</div>
				<div class="c-homeAbout">
					<div class="c-homeAbout__icon"><img src="/assets_web/img/home-about-icon.svg"></div>
					<div class="c-homeAbout__info">
						<div class="c-homeAbout__image"><img src="/assets_web/img/home-about-image.jpg"></div>
						<div class="c-homeAbout__description">
							<h1 class="c-info__h1 u-mb30 "><span>Programa de descuento en medicamentos</span></h1>
							<p class="c-info__parrafo">Para nosotros la salud de las personas es lo más importante, Por eso hemos creado un exclusivo programa de descuento en medicamentos de alta calidad para facilitar el cumplimiento de la terapia que su médico ha indicado.</p>
							<a href="/programa-descuentos" class="c-info__link c-info__link--mobileInline" title="enlace a quiénes somos">
								<span>+ </span>Buscar descuento
							</a>
						</div>
					</div>
				</div>
				<div class="c-savalInfo">
					<div class="c-savalInfo__boxes">
						<div class="c-savalInfo__box c-savalInfo__box--darkBlue c-savalInfo__box--patterBg">
							<h2>Pensado para usted <br>por <strong>Laboratorios Saval</strong></h2>
							<p>Laboratorios SAVAL es una empresa chilena con más de 80 años de trayectoria, cuya calidad e innovación son ampliamente reconocidas por el cuerpo médico.</p>
							<a href="/somos" class="c-info__link c-info__link--marLeft30"><span>+ </span>Leer más</a>
						</div>
						<div class="c-savalInfo__box c-savalInfo__box--middleBlue">
							<h3> <strong>Medicamentos  </strong>de <strong>alta calidad </strong>que brindan <strong>seguridad y eficacia</strong></h3>
							<ul>
								<li><span><img src="/assets_web/img/home-about-icon.svg" alt=""></span><i>Certificación GMP. (Buenas Prácticas de Manufactura).</i></li>
								<li><span><img src="/assets_web/img/home-about-icon.svg" alt=""></span><i>Altos estándares de calidad.</i></li>
								<li><span><img src="/assets_web/img/home-about-icon.svg" alt=""></span><i>Tecnología de vanguardia.</i></li>
								<li><span><img src="/assets_web/img/home-about-icon.svg" alt=""></span><i>Certificaciones según normas internacionales aceptadas y validadas por el cuerpo médico.</i></li>
							</ul>
						</div>
						<div class="c-savalInfo__box c-savalInfo__box--lightBlue c-savalInfo__box--iconBg">
							<h3>Nuestra <strong>Planta de Producción </strong>Farmacéutica<br><small>Galeria de fotos</small></h3>
							<div class="gallery" id="links">
								<a href="/assets_web/img/about-gallery-1.jpg" data-fancybox="gallery">
									<figure>
										<img src="/assets_web/img/about-gallery-1.jpg">
									</figure>
								</a>
								<a href="/assets_web/img/about-gallery-2.jpg" data-fancybox="gallery">
									<figure>
										<img src="/assets_web/img/about-gallery-2.jpg">
									</figure>
								</a>
								<a href="/assets_web/img/about-gallery-3.jpg" data-fancybox="gallery">
									<figure>
										<img src="/assets_web/img/about-gallery-3.jpg">
									</figure>
								</a>
								<a href="/assets_web/img/about-gallery-4.jpg" data-fancybox="gallery">
									<figure>
										<img src="/assets_web/img/about-gallery-4.jpg">
									</figure>
								</a>
								<a href="/assets_web/img/about-gallery-5.jpg" data-fancybox="gallery">
									<figure>
										<img src="/assets_web/img/about-gallery-5.jpg">
									</figure>
								</a>
								<a href="/assets_web/img/about-gallery-6.jpg" data-fancybox="gallery">
									<figure>
										<img src="/assets_web/img/about-gallery-6.jpg">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="c-savaTemas">
					<div class="c-inner">
						
						<h1 class="c-info__h1 c-info__h1--inline-block u-mb30"><span>Temas de interés</span></h1>
						<p class="c-savaTemas__bajada u-mb90">En esta sección usted encontrará artículos relacionados con temas generales de salud, tanto para adultos como niños, que le ayudarán a profundizar sus conocimientos respecto de diversas enfermedades, recomendaciones para llevar una vida más saludable. <span>El contenido de estos artículos no fomentan el autodiagnóstico como tampoco la automedicación, sólo cumplen la función de informar. Siempre consulte a su médico.</span><a href="/categorias/infantil"><strong>Ingrese aquí.</strong></a></p>
						<div class="c-savaTemas__boxes">
							@foreach (\App\Category::all() as $category)
								<div class="c-savaTemas__box">
									<div class="icon"></div>
									<figure><img src="{{ $category->icohome }} "></figure><span>{{ $category->name }}</span>
									<p>{!!  substr(strip_tags($category->body), 0, 195) !!} [...]</p><a href="{{ route('category', $category->slug) }}"><span>+</span>Ver todo {{ $category->name }}</a>
								</div>
							@endforeach
							
						</div>
						<div class="c-savaTemas__boxes c-mobile-boxes" id="c-boxes-down">
							@foreach (\App\Category::all() as $category)
							
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="{{ $category->icohome }} "></figure><span>{{ $category->name }}</span>
								<p>{!!  substr(strip_tags($category->body), 0, 195) !!} [...] <a href="{{ route('category', $category->slug) }}"><span>+</span>Ver todos los articulos</a></p>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="c-newsletter">
					<div class="c-inner">
						<div class="c-newsletter__info">
							<h1>¡Suscríbase a nuestros Temas de Interés!</h1>
							<p>Recibirá semanalmente artículos relevantes y recomendaciones para cuidar su salud.</p>
						</div>
						<div class="c-newsletter__form">
							<form>
								<div class="icon"><i class="icon-Correo"></i></div>
								<div class="input email">
									<input id="emailUser" type="text" placeholder="email@ejemplo.cl">
								</div>
								<div class="input submit">
									<a class="btnSuscribirse">Enviar</a>
								</div>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="c-homeBlog">
					<div class="c-inner">
						<h1 class="c-info__h1 u-mb40"><span>Temas destacados</span></h1>
						<div class="c-homeBlog__articles">
							<div class="c-homeBlog__article">
								<div class="c-homeBlog__article-inner">
									<div class="c-homeBlog__article-image"><img src="/assets_web/img/blog-thumb.png"></div>
									<div class="c-homeBlog__article-info">
										<h2>¿Qué es la diabetes?</h2><span>Marzo 16, 2016 por Camila en temas de salud</span>
										<p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa quae [...]</p><a href="#"><span>+ </span>Leer más</a>
										<div class="c-homeBlog__article-socials"><a href="#"><span class="fab fa-facebook-f"></span></a><a href="#"><span class="fab fa-twitter"></span></a><a href="#"><span class="fab fa-google-plus-g"></span></a><a href="#"><span class="fab fa-linkedin-in"></span></a></div>
									</div>
								</div>
							</div>
							<div class="c-homeBlog__article">
								<div class="c-homeBlog__article-inner">
									<div class="c-homeBlog__article-image"><img src="/assets_web/img/blog-thumb.png"></div>
									<div class="c-homeBlog__article-info">
										<h2>¿Qué es la diabetes?</h2><span>Marzo 16, 2016 por Camila en temas de salud</span>
										<p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa quae [...]</p><a href="#"><span>+ </span>Leer más</a>
										<div class="c-homeBlog__article-socials"><a href="#"><span class="fab fa-facebook-f"></span></a><a href="#"><span class="fab fa-twitter"></span></a><a href="#"><span class="fab fa-google-plus-g"></span></a><a href="#"><span class="fab fa-linkedin-in"></span></a></div>
									</div>
								</div>
							</div>
							<div class="c-homeBlog__article">
								<div class="c-homeBlog__article-inner">
									<div class="c-homeBlog__article-image"><img src="/assets_web/img/blog-thumb.png"></div>
									<div class="c-homeBlog__article-info">
										<h2>¿Qué es la diabetes?</h2><span>Marzo 16, 2016 por Camila en temas de salud</span>
										<p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa quae [...]</p><a href="#"><span>+ </span>Leer más</a>
										<div class="c-homeBlog__article-socials"><a href="#"><span class="fab fa-facebook-f"></span></a><a href="#"><span class="fab fa-twitter"></span></a><a href="#"><span class="fab fa-google-plus-g"></span></a><a href="#"><span class="fab fa-linkedin-in"></span></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
@stop