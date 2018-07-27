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
								<li>Los medicamentos incluidos en el programa son en su mayoría para el tratamiento de las enfermedades más frecuentes.</li>
								<li>Los medicamentos SAVAL son fabricados con alta tecnología farmacéutica y certificados según normas internacionales.</li>
								<li>El programa BienEstar SAVAL incluye también fármacos para las enfermedades crónicas y agudas más prevalentes.</li>
								<li>Más de 90 medicamentos de Laboratorios SAVAL con importantes descuentos para cumplir con la terapia indicada por el médico.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="c-comoAcceder">
					<div class="c-inner">
						<h1>¿Cómo <strong>Acceder al Programa?</strong></h1>
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
						<h1>Resultados</h1>
						<div class="c-buscadorResultados__items">
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a href="#">Generar cupón</a></div>
							</div>
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a href="#">Generar cupón</a></div>
							</div>
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a href="#">Generar cupón</a></div>
							</div>
							<div class="c-buscadorResultados__item">
								<p>Cefirax ® Cefpodoxima - 10 Comprimidos recubiertos</p>
								<div class="actions"><span>$-3.000</span><a href="#">Generar cupón</a></div>
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
			</main>

@stop