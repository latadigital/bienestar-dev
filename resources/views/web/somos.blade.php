    
@extends('web.layout.layout')

@section('content')
<main role="main">
				<div class="c-breadcrumb c-breadcrumb--m70">
					<div class="c-inner">
						<ul>
							<li><a href="#">Home /</a></li>
							<li><a href="#">Quiénes somos</a></li>
						</ul>
					</div>
				</div>
				<div class="c-AboutUs">
					<div class="c-AboutUs__icon"><img src="assets_web/img/home-about-icon.svg"></div>
					<div class="c-AboutUs__info">
						<div class="c-AboutUs__image"><img src="assets_web/img/about-thumb.png"></div>
						<div class="c-AboutUs__description">
							<h1 class="c-info__h1 u-mb30 c-info__h1--font20"><span>Quiénes Somos</span></h1>
							<p class="c-info__parrafo"> <strong>Laboratorios SAVAL</strong> es una empresa chilena con más de 80 años de trayectoria, cuya calidad e innovación son ampliamente reconocidas por el cuerpo médico.</p>
							<p class="c-info__parrafo">En nuestra compañía contamos con profesionales altamente calificados y con modernas instalaciones en las que se utilizan equipos de última generación y constantes sistemas de control para garantizar el alto estándar de calidad y seguridad que los medicamentos requieren.</p>
							<p class="c-info__parrafo">Para <strong>Laboratorios SAVAL </strong>lo más importante es la salud y bienestar de las personas y todos nuestros esfuerzos están orientados en ese sentido.</p>
						</div>
					</div>
				</div>
				<div class="c-aboutGalery owl-carousel" id="quienes-somos">
					<div class="c-aboutGalery__item"><a href="assets_web/img/about-gallery-1.jpg" data-fancybox="gallery"><img src="assets_web/img/about-gallery-1.jpg"></a></div>
					<div class="c-aboutGalery__item"><a href="assets_web/img/about-gallery-2.jpg" data-fancybox="gallery"><img src="assets_web/img/about-gallery-2.jpg"></a></div>
					<div class="c-aboutGalery__item"><a href="assets_web/img/about-gallery-3.jpg" data-fancybox="gallery"><img src="assets_web/img/about-gallery-3.jpg"></a></div>
					<div class="c-aboutGalery__item"><a href="assets_web/img/about-gallery-4.jpg" data-fancybox="gallery"><img src="assets_web/img/about-gallery-4.jpg"></a></div>
					<div class="c-aboutGalery__item"><a href="assets_web/img/about-gallery-5.jpg" data-fancybox="gallery"><img src="assets_web/img/about-gallery-5.jpg"></a></div>
					<div class="c-aboutGalery__item"><a href="assets_web/img/about-gallery-6.jpg" data-fancybox="gallery"><img src="assets_web/img/about-gallery-6.jpg"></a></div>
				</div>
				<div class="c-aboutInfo">
					<div class="c-aboutInfo__box">
						<h2>La calidad</h2>
						<p>La calidad de un medicamento no se improvisa. Para la fabricación de cada cápsula, comprimido o jarabe es necesario cumplir con un gran número de procesos, los cuales deben estar validados y necesitan ser chequeados constantemente. Estos procesos forman parte de las exigentes normativas internacionales conocidas como normas GMP o Buenas Prácticas de Manufactura.</p>
						<p>Para  <strong>Laboratorios SAVAL </strong>, la calidad es un asunto intransable. Desde la materia prima certificada hasta la rigurosidad en la cadena de distribución, pasando por el proceso de fabricación, cada detalle debe ser revisado para garantizar a las personas que el medicamento que su médico le ha recetado tendrá el efecto que se requiere. El acceso a medicamentos de alta calidad es parte fundamental del cuidado de la salud y del bienestar de las personas, y forma parte de nuestra misión y compromiso con la sociedad.</p>
					</div>
					<div class="c-aboutInfo__box c-aboutInfo__box--grey">
						<h2>Ámbitos de Acción</h2>
						<p>En <strong>Laboratorios SAVAL </strong>contamos con una amplia gama de productos para diversos segmentos terapéuticos, dentro de los que destacan:</p>
						<ul>
							<li>Broncopulmonar</li>
							<li>Neurociencia</li>
							<li>Cardiología</li>
							<li>Oftarmología</li>
							<li>Dermatología</li>
							<li>Otorrinolaringología</li>
							<li>Gastroenterología</li>
							<li>Pediatría</li>
							<li>Infectología</li>
							<li>Salud Femenina</li>
							<li>Manejo del dolor</li>
							<li>Traumatología</li>
						</ul>
					</div>
				</div>
			</main>
    @stop