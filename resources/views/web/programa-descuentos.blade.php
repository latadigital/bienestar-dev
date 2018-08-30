@extends('web.layout.layout')

@section('content')
        <main id="discount" role="main">
			<div class="c-breadcrumb">
				<div class="c-inner">
					<ul>
						<li><a href="#">Home /</a></li>
						<li><a href="#">Programa de descuento</a></li>
					</ul>
				</div>
			</div>
			<div class="c-planesAbout">
				<div class="c-planesAbout__icon"><img src="/assets_web/img/home-about-icon.svg"></div>
				<div class="c-planesAbout__info">
					<div class="c-planesAbout__image"><img src="/assets_web/img/planes-descuentos-info.png"></div>
					<div class="c-planesAbout__description">
						<h1 class="c-info__h1 u-mb30"><span>Programa de descuento en medicamentos</span></h1>
						<p class="c-info__parrafo">Este programa tiene como objetivo favorecer el acceso a medicamentos de alta calidad a través de descuentos que faciliten el cumplimiento de la terapia que el médico ha indicado. Dichos descuentos en dinero se hacen efectivos al momento de realizar la compra de uno o más de los medicamentos incluidos en este programa.</p>
					</div>
				</div>
			</div>
			<div class="c-beneficios">
				<div class="c-inner">
					<div class="c-beneficios__title">
						<h2>¿Por qué <strong>inscribirse </strong>en el programa <strong>BienEstar SAVAL?</strong></h2>
						<p>Porque a través de estos descuentos tendrá acceso a medicamentos de alta calidad y tecnología,  certificados según normas internacionales.</p>
					</div>
					<div class="c-beneficios__lista">
							<ul>
								<li> <i class="c-number">1</i>
									<h3>INCLUYE ENFERMEDADES MÁS FRECUENTES</h3><span>Los medicamentos incluidos en el programa son en su mayoría para el tratamiento de las enfermedades más frecuentes.</span>
								</li>
								<li> <i class="c-number">2</i>
									<h3>ACCESO A MEDICAMENTOS DE ALTA CALIDAD</h3><span>Los medicamentos SAVAL son fabricados con alta tecnología farmacéutica y certificados según normas internacionales.</span>
								</li>
								<li> <i class="c-number">3</i>
									<h3>INCORPORA ENFERMEDADES CRÓNICAS Y AGUDAS</h3><span>El programa BienEstar SAVAL incluye también fármacos para las enfermedades crónicas y agudas más prevalentes.</span>
								</li>
								<li> <i class="c-number">4</i>
									<h3>DESCUENTO EN MÁS DE 90 MEDICAMENTOS</h3><span>Más de 90 medicamentos de Laboratorios SAVAL con importantes descuentos para cumplir con la terapia indicada por el médico.</span>
								</li>
							</ul>
						</div>
				</div>
			</div>
			<div class="c-comoAcceder">
				<div class="c-inner">
					<h1>¿Cómo <strong>acceder al programa?</strong></h1>
					<div class="c-comoAcceder__items">
						<div class="c-comoAcceder__item">
							<div class="icon"><img src="/assets_web/img/planes-icon-1.svg"></div>
							<p>Verifique si el o los medicamentos recetados tienen descuento, para esto, utilice el buscador seleccionando marca y/o presentación.</p>
						</div>
						<div class="c-comoAcceder__item">
							<div class="icon"><img src="/assets_web/img/planes-icon-2.svg"></div>
							<p>Si su medicamento tiene descuento usted puede imprimir, guardar, o enviar a través de SMS (desde móviles) el <strong>cupón de descuento</strong> correspondiente.</p>
						</div>
						<div class="c-comoAcceder__item">
							<div class="icon"><img src="/assets_web/img/planes-icon-3.svg"></div>
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
								<select v-model="make">
									<option value="" selected>Seleccionar Marca</option>
									@foreach($makes as $make)
									<option value="{{ $make->id }}">{{ $make->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="select brand">
								<label for="#">Seleccione presentación</label>
								<select v-model="presentation" name="">
									<option value="" selected>Todas</option>
									<option :value="p.id" v-for="p in presents">@{{ p.presentation }}</option>
								</select>
							</div>
							<div class="input submit">
								<button @click.prevent="buscar" :disabled="presents.length <= 0">Buscar</button>
							</div>
						</form>
					</div>
				</div>
				<div class="c-buscadorResultados" id="scrollBuscador" tabindex="1">
					<div class="c-inner">
						<h1>Resultados<span>Buscador de descuentos en medicamentos</span></h1>
						<p class="legal">Este cupón es válido para acceder al beneficio del Programa de Descuento en Medicamentos de Laboratorios Saval, sólo si lo presenta en las farmacias adheridas junto con su receta médica.</p>
						<div class="c-buscadorResultados__items">
							<div class="c-buscadorResultados__items" v-for="discount in discounts">
								<div class="c-buscadorResultados__item">
									<p><strong>@{{ discount.make.name }}</strong>  ® @{{ discount.name }} - @{{ discount
										.presentation }} </p>
									<div class="actions"><span>$-@{{ discount.discount }}</span>
										<a class="buscadorResultados__button" @click="show(discount)">Generar
											cupón</a></div>
								</div>
							</div>
						</div>
						<!--<div class="c-buscadorResultados__text">
							<p>Este cupón es válido para acceder al beneficio del Programa de Descuento en Medicamentos de Laboratorios Saval, sólo si lo presenta en las farmacias adheridas junto con su receta médica.</p><!--<a href="#">descargar lista completa de medicamentos con descuento</a>
						</div>-->
					</div>
				</div>
				<div class="c-asociados">
					<div class="c-inner">
						<h1>Farmacias adheridas al programa <strong>BienEstar SAVAL</strong></h1>
						<div class="c-asociados__logos">
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-salcobrand.svg" width="62"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-ahumada.svg" width="192"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-cruzverde.svg" width="228"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-carmen.png" widht="188"></div>
							<div class="c-asociados__logo"><img src="/assets_web/img/brands-redfarma.svg" width="130"></div>
						</div>
					</div>
				</div>
					<div class="c-mapa">
					<div class="maps-desktop" id="maps">
						<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13325.187606442996!2d-70.6994477058955!3d-33.38941749771231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c694c490a50d%3A0x837a4147e76356ac!2sLaboratorios+Saval+S.A.!5e0!3m2!1ses!2scl!4v1534878500814"></iframe>
					</div>
					<div class="c-mapa__search">
						<h1>¿No sabe donde está la farmacia más cercana?</h1>
						<p>¡No se preocupe, nosotros le ayudamos!
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+salcobrand/@-33.424048,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacias Salcobrand</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+ahumada/@-33.4240474,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacias Ahumada</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+cruz+verde/@-33.4240468,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacias Cruz Verde</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/search/farmacias+carmen/@-33.4240462,-70.6244739,15z/data=!3m1!4b1" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacias Carmen</strong></a></div>
							<div class="c-mapa__item"><a href="https://www.google.com/maps/place/Red+Farma/@-33.442526,-70.6700345,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c5acbd6e39bb:0xa3eacbb03a1c69f9!8m2!3d-33.442526!4d-70.6678458" target="_blank"><i class="fas fa-map-marker-alt"></i><strong>Farmacias Redfarma</strong></a></div>
						</p>
					</div>
					<div class="maps-mobile" id="map-mobile">
						<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13325.187606442996!2d-70.6994477058955!3d-33.38941749771231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c694c490a50d%3A0x837a4147e76356ac!2sLaboratorios+Saval+S.A.!5e0!3m2!1ses!2scl!4v1534878500814"></iframe>
					</div>
				</div>
				<div class="c-modalCupon" style="display:none;">
					<div class="c-modalCupon__overlay"></div>
					<div class="c-modalCupon__wrapper">
						<div class="c-modalCupon__info">
							<div class="c-modalCupon__text">
								<!--<span><img src="/assets_web/img/nuevo.png"></span>
								<h1>Programa de <br><strong>Descuento </strong><br>en medicamentos</h1>-->
								<img src="/assets_web/img/logo-cupon.png">
								<p>Descuento válido del @{{ result.from | dateString }} al @{{ result.to | dateString
									}}, ambas fechas inclusive. Consulte por la disponibilidad de los productos en Farmacias Ahumada, Farmacias Salco Brand, Farmacias Cruz Verde, y en todas las farmacias adheridas a este programa. No acumulables a otras promociones y/o convenios.</p>
								<p>NO SE AUTOMEDIQUE. Todo medicamento debe ser prescrito por su médico. Consulte siempre el uso de medicamentos con su médico o químico farmacéutico. Dispensación de medicamentos se realizará conforme condición de venta según normativa vigente.</p>
								<div class="c-modalCupon__valido">
									<p>Programa válido del: @{{ result.from | dateDay }} al @{{ result.to | dateDay}}</p>
								</div>
								<div class="c-modalCupon__input-agree">
									<input type="checkbox" v-model="result.accept"><a href="" target="_blank" title="">He leído y aceptado los términos y condiciones</a>
								</div>
							</div>
							<div class="c-modalCupon__codigos">
								<div class="c-modalCupon__center">
									<div class="c-modalCupon__item"><img :src="result.code1"></div>
									<div class="c-modalCupon__item"><img :src="result.code2"></div>
									<div class="c-modalCupon__item"><img :src="result.code3"></div>
								</div>
							</div>
						</div>
						<div class="c-modalCupon__buttons" v-if="result.accept">
							<a :href="Save"><span></span>Guardar</a>
							<a :href="Print" target="_blank"><span> </span>Imprimir</a>
							<a :href="Send">Enviar por correo</a>
							<a href="javascript:void(0)">Enviar por mensaje de texto</a>
						</div>
					</div>
				</div>

				<div class="c-modalMobile" style="display:none;">
					<div class="c-modalMobile__overlay"></div>
					<div class="c-modalMobile__wrapper">
						<div class="c-modalMobile__firstStep c-modalMobile__firstStep--active">
							<!--<span><img src="/assets_web/img/nuevo.png"></span>
							<h1>Programa de <br><strong>Descuento </strong><br>en medicamentos</h1>-->
							<img src="/assets_web/img/logo-cupon.png">
							<div class="c-modalMobile__text">
								<p>Descuento válido del @{{ result.from | dateString }} al @{{ result.to | dateString
									}}, ambas fechas inclusive. Consulte por la disponibilidad de los productos en Farmacias Ahumada, Farmacias Salco Brand, Farmacias Cruz Verde, y en todas las farmacias adheridas a este programa. No acumulables a otras promociones y/o convenios.</p>
								<p>NO SE AUTOMEDIQUE. Todo medicamento debe ser prescrito por su médico. Consulte siempre el uso de medicamentos con su médico o químico farmacéutico. Dispensación de medicamentos se realizará conforme condición de venta según normativa vigente.</p>

							</div>
							<div class="c-modalMobile__valido">
								<p>Programa válido del: @{{ result.from | dateDay }} al @{{ result.to | dateDay }}</p>
							</div>
							<div class="c-modalMobile__input-agree">
								<input type="checkbox"><a href="/terminos-de-uso" target="_blank" title="Enlace a términos y condiciones de uso">He leído y aceptado los términos y condiciones</a>
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
@endsection

@section('js')
	<script src="{{ asset('assets/plugins/moment/min/moment-with-locales.min.js') }}"></script>
	<script>
		const discount = new Vue({
			el: "#discount",
            data () {
                return {
                    make: '',
                    presents: [],
                    presentation: null,
					discounts: null,
					result: {
                        code1: null,
						code2: null,
						code3: null,
						to: null,
						from: null,
						accept: 0,
						id: null
					}
                }
            },
			filters: {
				dateString: function (value) {
				    moment.locale('es');
					return moment(value).format("D [de] MMMM [del] YYYY");
				},
				dateDay: function (value) {
                    moment.locale('es');
                    return moment(value).format("D/M/YYYY");
				}
			},
			methods: {
				buscar: function () {
                    let self = this;
					$.get('/api/make/' + self.make + '/discount/' + self.presentation, function (data) {
					    self.discounts = data;
					    $("#scrollBuscador").focus();
					});
				},
				show: function (discount) {
				    this.result.code1 = discount.code1;
				    this.result.code2 = discount.code2;
				    this.result.code3 = discount.code3;
				    this.result.to = discount.to_date;
				    this.result.from = discount.from_date;
				    this.result.id = discount.id;

                    $(".c-modalCupon").show();
				}
			},
			computed: {
				Save: function () {
					return "/download/discount/" + this.result.id
				},
				Print: function () {
                    return "/print/discount/" + this.result.id
				},
				Send: function () {
					return "mailto:?body="+window.location.host +"/generate/discount/?subject=Cupon" + this.result.id
                },
			},
			watch: {
			    make: function (value) {
			        let self = this;
					$.get('/api/make/' +  value +  '/presentation', function (data) {
					    self.presents = data.map(function (value) {
					        return {'id': value.id, 'presentation': value.presentation}
						});
					    self.presentation = '';
					    self.discounts = data;
                        $("#scrollBuscador").focus();
					})
				}
			}
		});
	</script>
@endsection