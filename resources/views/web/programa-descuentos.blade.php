@extends('web.layout.layout')

@section('content')

        <main role="main">
				<div class="c-breadcrumb">
					<div class="c-inner">
						<ul>
							<li><a href="#">Home /</a></li>
							<li><a href="#">Planes de descuentos</a></li>
						</ul>
					</div>
				</div>
				<div class="c-planesAbout">
					<div class="c-planesAbout__icon"><img src="/assets_web/img/home-about-icon.svg"></div>
					<div class="c-planesAbout__info">
						<div class="c-planesAbout__image"><img src="/assets_web/img/planes-descuentos-info.png"></div>
						<div class="c-planesAbout__description">
							<h1 class="c-info__h1 u-mb30 c-info__h1--font20"><span>Programa de descuento en medicamentos SAVAL</span></h1>
							<p class="c-info__parrafo">Este programa tiene como objetivo favorecer el acceso a medicamentos de alta calidad a través de descuentos que faciliten el cumplimiento de la terapia que el médico ha indicado. Dichos descuentos en dinero se hacen efectivos al momento de realizar la compra de uno o más de los medicamentos incluidos en este programa.</p>
						</div>
					</div>
				</div>
				<div class="c-beneficios">
					<div class="c-inner">
						<div class="c-beneficios__title">
							<h2>¿Por qué <strong>inscribirse </strong>en el programa <strong>BienEstar SAVAL?</strong></h2>
							<p>Porque a través de estos descuentos tendrás acceso a medicamentos de alta calidad y tecnología,  certificados según normas internacionales.</p>
						</div>
						<div class="c-beneficios__lista">
							<ul>
								<li> <i class="c-number">1 </i><span>Los medicamentos incluidos en el programa son en su mayoría para el tratamiento de las enfermedades más frecuentes.</li>
								<li> <i class="c-number">2 </i><span>Los medicamentos SAVAL son fabricados con alta tecnología farmacéutica y certificados según normas internacionales.</li>
								<li> <i class="c-number">3 </i><span>El programa BienEstar SAVAL incluye también fármacos para las enfermedades crónicas y agudas más prevalentes.</li>
								<li> <i class="c-number">4 </i><span>Más de 90 medicamentos de Laboratorios SAVAL con importantes descuentos para cumplir con la terapia indicada por el médico.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="c-comoAcceder">
					<div class="c-inner">
						<h1>¿Cómo <strong>acceder al programa?</strong></h1>
						<div class="c-comoAcceder__items">
							<div class="c-comoAcceder__item">
								<div class="icon"><img src="/assets_web/img/planes-icon-1.png"></div>
								<p>Verifique si el o los medicamentos recetados tienen descuento, para esto, utilice el buscador seleccionando marca y/o presentación.</p>
							</div>
							<div class="c-comoAcceder__item">
								<div class="icon"><img src="/assets_web/img/planes-icon-2.png"></div>
								<p>Si su medicamento tiene descuento usted puede imprimir, guardar, o enviar a través de SMS (desde móviles) el cupón de descuento correspondiente.</p>
							</div>
							<div class="c-comoAcceder__item">
								<div class="icon"><img src="/assets_web/img/planes-icon-3.png"></div>
								<p>Una vez que tenga en su poder el cupón junto a la receta médica, puede dirigirse a cualquier farmacia adherida al programa, inscribirse y quedar habilitado para obtener el descuento en forma inmediata.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="c-buscadorMedicamentos">
					<h1>Buscador de descuento en medicamentos</h1>
					<div class="c-buscadorMedicamentos__form">
						<form action="#">
							<div class="select brand">
								<label for="#">Seleccione marca</label>
								<select name="">
									<option value="#">Marca</option>
								</select>
							</div>
							<div class="select brand">
								<label for="#">Seleccione presentación</label>
								<select name="">
									<option value="#">Marca</option>
								</select>
							</div>
							<div class="input submit">
								<button>Buscar</button>
							</div>
						</form>
					</div>
				</div>
				<div class="c-buscadorResultados">
					<div class="c-inner">
						<h1>Resultados<span>Buscador de descuentos en medicamentos</span></h1>
						<div class="c-buscadorResultados__items">
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a class="buscadorResultados__button" href="#">Generar cupón</a></div>
							</div>
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a class="buscadorResultados__button" href="#">Generar cupón</a></div>
							</div>
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a class="buscadorResultados__button" href="#">Generar cupón</a></div>
							</div>
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a class="buscadorResultados__button" href="#">Generar cupón</a></div>
							</div>
						</div>
						<div class="c-buscadorResultados__text">
							<p>Recuerde que el cupón de descuento es válido sólo al momento de inscribirse en las farmacias adheridas. Imprimir sólo un cupón para los medicamentos contenidos en una receta.</p><a href="#">descargar lista completa de medicamentos con descuento</a>
						</div>
					</div>
				</div>
				<div class="c-asociados">
					<div class="c-inner">
						<h1>Farmacias adheridas al programa <strong>BienEstar SAVAL</strong></h1>
						<div class="c-asociados__logos">
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-salcobrand.png"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-ahumada.png"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-cruzverde.png"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-carmen.png"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-redfarma.png"></div>
						</div>
					</div>
				</div>



				<div class="c-mapa">
					<div id="map"></div>
					<div class="c-mapa__search">
						<h1>¿No sabe donde está la farmacia más cercana?</h1>
						<p>¡No se preocupe, nosotros le ayudamos!
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+salcobrand/@-33.424048,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacias Salcobrand</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+ahumada/@-33.4240474,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacia Ahumada</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+cruz+verde/@-33.4240468,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacia Cruz Verde</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+carmen/@-33.4240462,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacia Carmen</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/place/Red+Farma/@-33.442526,-70.6700345,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c5acbd6e39bb:0xa3eacbb03a1c69f9!8m2!3d-33.442526!4d-70.6678458" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Redfarma</strong></a></div>
						</p>
					</div>
				</div>



				<div class="c-modalCupon" style="display:none;">
					<div class="c-modalCupon__overlay"></div>
					<div class="c-modalCupon__wrapper">
						<div class="c-modalCupon__info">
							<div class="c-modalCupon__text"><span><img src="/assets_web/img/nuevo.png"></span>
								<h1>Programa de <br><strong>Descuento </strong><br>en medicamentos</h1>
								<p>Descuento válido del 01 de marzo de 2018 al 31 de diciembre de 2018, ambas fechas inclusive. Consulte por la disponibilidad de los productos en Farmacias Ahumada, Farmacias Salco Brand, Farmacias Cruz Verde,  y en todas las farmacias adheridas a este programa. <br>No acumulables a otras promociones, ofertas y/o convenios. NO SE AUTOMEDIQUE. Todo medicamento debe ser prescrito por su médico. Consulte siempre el uso de medicamentos con su médico o químico farmacéutico. Dispensación de medicamentos se realizará conforme condición de venta según normativa vigente.</p>
								<div class="c-modalCupon__valido">
									<p>Programa válido del: 01/03/2018 al 31/12/2018</p>
								</div>
								<div class="c-modalCupon__input-agree">
									<input type="checkbox">He leído y aceptado los términos
								</div>
							</div>
							<div class="c-modalCupon__codigos">
								<div class="c-modalCupon__center">
									<div class="c-modalCupon__item"><img src="/assets_web/img/barra-1.png"></div>
									<div class="c-modalCupon__item"><img src="/assets_web/img/barra-2.png"></div>
									<div class="c-modalCupon__item"><img src="/assets_web/img/barra-3.png"></div>
								</div>
							</div>
						</div>
						<div class="c-modalCupon__buttons"><a href="#"><span></span>Guardar</a><a href="#"><span> </span>Imprimir</a><a href="#">Enviar por correo</a><a href="#">Enviar por mensaje de texto</a></div>
					</div>
				</div>

				<div class="c-modalMobile" style="display:none;">
					<div class="c-modalMobile__overlay"></div>
					<div class="c-modalMobile__wrapper">
						<div class="c-modalMobile__firstStep c-modalMobile__firstStep--active"><span><img src="/assets_web/img/nuevo.png"></span>
							<h1>Programa de <br><strong>Descuento </strong><br>en medicamentos</h1>
							<div class="c-modalMobile__text">
								<p>Descuento válido del 01 de marzo de 2018 al 31 de diciembre de 2018, ambas fechas inclusive. Consulte por la disponibilidad de los productos en Farmacias Ahumada, Farmacias Salco Brand, Farmacias Cruz Verde,  y en todas las farmacias adheridas a este programa. No acumulables a otras promociones, ofertas y/o convenios. NO SE AUTOMEDIQUE. Todo medicamento debe ser prescrito por su médico. Consulte siempre el uso de medicamentos con su médico o quími</p>
							</div>
							<div class="c-modalMobile__valido">
								<p>Programa válido del: 01/03/2018 al 31/12/2018</p>
							</div>
							<div class="c-modalMobile__input-agree">
								<input type="checkbox">He leído y aceptado los términos
							</div><a class="c-modalMobile__btn" href="#">Obtener cupón</a>
						</div>
						<div class="c-modalMobile__secondStep">
							<div class="c-modalMobile__item">
								<div class="c-modalMobile__image"><img src="/assets_web/img/barra-1.png"></div>
								<div class="c-modalMobile__info">
									<h2>Escanee el código de barra o digítelo</h2>
								</div>
								<div class="c-modalMobile__codigo"><span>1231231231</span></div>
							</div>
							<div class="c-modalMobile__item">
								<div class="c-modalMobile__image"><img src="/assets_web/img/barra-2.png"></div>
								<div class="c-modalMobile__info">
									<h2>Escanee el código de barra o digítelo</h2>
								</div>
								<div class="c-modalMobile__codigo"><span>1231231231</span></div>
							</div>
							<div class="c-modalMobile__item">
								<div class="c-modalMobile__image"><img src="/assets_web/img/barra-3.png"></div>
								<div class="c-modalMobile__info">
									<h2>Escanee el código de barra o digítelo</h2>
								</div>
								<div class="c-modalMobile__codigo"><span>1231231231 </span></div>
							</div>
							<div class="c-modalMobile__btnMobile"><a class="c-modalMobile__btn-imprimir" href="#">Imprimir cupón</a></div>
						</div>
					</div>
				</div>
			</main>
			

@stop