@extends('web.layout.layout')

@section('content')
			<main role="main">
				<div class="c-bigbanner">
					<div class="c-bigbanner__slides">
						<div class="c-bigbanner__slide">
							<div class="c-bigbanner__image"><img src="/assets_web/img/home-bigbanner.jpg" alt=""></div>
							<div class="c-bigbanner__info">
								<hgroup>
									<h2 class="animated bounce fadeInDown"><span>Nuevo </span>programa de</h2>
									<h1 class=" animated bounce fadeInUp">Descuento</h1>
								</hgroup><span class=" animated bounce fadeInUp"> <i>en </i>medicamentos</span>
							</div>
						</div>
					</div>
				</div>
				<div class="c-homeAbout">
					<div class="c-homeAbout__icon"><img src="/assets_web/img/home-about-icon.svg"></div>
					<div class="c-homeAbout__info">
						<div class="c-homeAbout__image"><img src="/assets_web/img/home-about-image.jpg"></div>
						<div class="c-homeAbout__description">
							<h1 class="c-info__h1 u-mb30 "><span>Programa de descuento en medicamentos</span></h1>
							<p class="c-info__parrafo">Para nosotros la salud de las personas es lo más importante, Por eso hemos creado un exclusivo programa de descuento en medicamentos de alta calidad para facilitar el cumplimiento de la terapia que su médico ha indicado.</p>
							<div class="c-info__link c-info__link--mobileInline"><span>+ </span>Buscar descuento</div>
						</div>
					</div>
				</div>
				<div class="c-savalInfo">
					<div class="c-savalInfo__boxes">
						<div class="c-savalInfo__box c-savalInfo__box--darkBlue c-savalInfo__box--patterBg">
							<h2>Pensado para usted <br>por <strong>Laboratorios Saval</strong></h2>
							<p>Laboratorios SAVAL es una empresa chilena con más de 80 años de trayectoria, cuya calidad e innovación son ampliamente reconocidas por el cuerpo médico.</p>
							<div class="c-info__link c-info__link--marLeft30"><span>+ </span>Leer más</div>
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
							<div class="gallery">
								<figure><img src="/assets_web/img/gallery-item.jpg"></figure>
								<figure><img src="/assets_web/img/gallery-item.jpg"></figure>
								<figure><img src="/assets_web/img/gallery-item.jpg"></figure>
								<figure><img src="/assets_web/img/gallery-item.jpg"></figure>
								<figure><img src="/assets_web/img/gallery-item.jpg"></figure>
								<figure><img src="/assets_web/img/gallery-item.jpg"></figure>
							</div>
						</div>
					</div>
				</div>
				<div class="c-savaTemas">
					<div class="c-inner">
						<h1 class="c-info__h1 c-info__h1--inline-block u-mb30"><span>Temas de interés</span></h1>
						<p class="c-savaTemas__bajada u-mb90">En esta sección usted encontrará artículos relacionados con temas generales de salud, tanto para adultos como niños, que le ayudarán a profundizar sus conocimientos respecto de diversas enfermedades, recomendaciones para llevar una vida más saludable.<a href="#"><strong>Ingrese aquí.</strong></a></p>
						<div class="c-savaTemas__boxes">
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-infantil.svg "></figure><span>Infantil</span>
								<p>Porque lo que les suceda a nuestros niños  puede afectarles en el futuro, es importante saber cómo cuidarlos, cuáles son las enfermedades más comunes que pueden afectarlos y qué hacer para que crezcan sanos y felices. Ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-corazon.svg "></figure><span>Corazón</span>
								<p>Las enfermedades cardiacas son la principal causa de muerte en todo el mundo. En esta sección encontrará artículos que le ayudarán a conocerlas, prevenirla o a convivir con ellas. Ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-respiratorio.svg "></figure><span>Sistema Respiratorio</span>
								<p>Un adulto lleva aire a sus pulmones y lo expulsa entre 12 y 20 veces por minuto, de manera automática. Pero las personas que aprenden a respirar de manera consciente pueden mejorar su salud física e incluso mental. Encuentre información relacionada con enfermedades respiratorias y algunos importantes consejos para mejorar la respiración. Ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-nutri.svg"></figure><span>Nutrición</span>
								<p>La nutrición aporta al organismo las sustancias para desarrollarse y sobrevivir. Una nutrición inadecuada puede conducir tanto a un sobrepeso como a un bajo peso, y ambos estados se relacionan con diferentes enfermedades. Opte por una vida sana e infórmese acerca de las ventajas de tener una buena nutrición, Ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-gastrico.svg "></figure><span>Sistema Digestivo</span>
								<p>Los hábitos de alimentación, el cigarrillo, el alcohol, la genética y otros factores pueden afectar el sistema digestivo. Encuentre información relacionada con enfermedades del estómago, del intestino y conozca algunos consejos prácticos para tratarlas. Ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-dolor.svg "></figure><span>Dolor e Inflamación</span>
								<p>El dolor y la inflamación surgen como una respuesta natural de nuestro organismo ante una lesión, y aunque muchas veces resultan desagradables e incómodos, suelen ser parte de un proceso de recuperación o de una alerta frente a una enfermedad. Ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-mental.svg "></figure><span>Mental</span>
								<p>El ritmo de vida acelerado, la competitividad del mundo laboral, dificultades familiares, el tipo de personalidad e incluso factores biológicos pueden ocasionar estrés, insomnio, ansiedad y otros trastornos. Ingresa aquí. </p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-vision.svg "></figure><span>Visión</span>
								<p>La vista es uno de los sentidos más importantes ya que a través de ella captamos el 80% de la información del entorno. Sin embargo, nuestros ojos pueden enfermarse y dañarse. Infórmese acerca de las afecciones más comunes de la vista y sepa cómo prevenirlas o tratarlas. Ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos</a>
							</div>
							<div class="c-savaTemas__box">
								<div class="icon"></div>
								<figure><img src="/assets_web/img/iconos/icon-nutricion.svg "></figure><span>Otros</span>
								<p>La salud y el bienestar dependen en gran medida de lo que cada persona elija como estilo de vida. El conocmiento en esta materia puede hacer la diferencia entre preservar o ver afectada la salud. Para profundizar en este tema ingrese aquí.</p><a href="#"><span>+</span>Ver todos los artículos																						</a>
							</div>
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
							<form action="#">
								<div class="icon"><i class="icon-Correo"></i></div>
								<div class="input email">
									<input type="text" placeholder="email@ejemplo.cl">
								</div>
								<div class="input submit">
									<input type="submit" value="Enviar">
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