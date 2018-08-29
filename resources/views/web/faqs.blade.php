@extends('web.layout.layout')

@section('content')
    <main role="main">
		<div class="c-breadcrumb c-breadcrumb--m70">
					<div class="c-inner">
						<ul>
							<li><a href="/">Home /</a></li>
							<li><a href="/faqs">Faqs</a></li>
						</ul>
					</div>
				</div>
				<div class="c-faq">
					<div class="c-inner">
						<div class="c-faq__items" id="itemsdown">
							<div class="c-faq__item">
								<div class="c-faq__title">
									<h2>1.  ¿Qué es el programa de descuento en medicamentos?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Este programa se basa en el principio de solidaridad y responsabilidad social de la empresa en favor de la salud de las personas.</p>
                                        <p>Busca facilitar el cumplimiento de la prescripción en los pacientes y constituye un beneficio dirigido a mejorar su salud y calidad de vida. El programa considera el ofrecimiento de descuentos en la compra de aquellos productos que se encuentran en el listado de productos incluidos en el programa, y que se harán efectivos al momento de adquirir uno de ellos.</p> 
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>2.  ¿Cuáles son los beneficios del programa de descuento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>El programa considera descuentos, que se harán efectivos al momento de adquirir un medicamento que se encuentre en el listado de los medicamentos de Laboratorios SAVAL incluidos en este programa <a href="/programa-descuentos">Programa de descuento</a></p>
                                        <p>Para mayor conocimiento de los descuentos para cada marca y presentación, utilice el buscador de descuentos por marca.</p>
                                        <p>Por otra parte, en la página también encontrará información muy útil relacionada con temas de salud para una mejor calidad de vida.</p> 
									</div>
								</div>
                            </div>
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>3.  ¿Cuál es la cobertura que tiene este programa?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>El programa BienEstar de Laboratorios SAVAL se encuentra activo a nivel nacional, a través de las farmacias adheridas a lo largo del país. Para mayor detalle revise el siguiente link <a href="/programa-descuentos">Programa de descuento</a></p>
									</div>
								</div>
                            </div>
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>4.  ¿Cuáles son los requisitos del programa?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Los  únicos requisitos son estar inscrito en el programa y ser mayor de edad. En el caso de menores de 18 años o personas no autovalentes, el trámite de inscripción deberá ser efectuado por un apoderado legalmente autorizado.</p>
                                        <p>Para inscribirse presente el cupón de descuento o el código de inscripción -otorgado por su médico o descargado directamente- y la receta entregada por éste en cualquiera de las farmacias adheridas.</p>
									</div>
								</div>
                            </div>


                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>5.  ¿Cuál es la vigencia del programa de descuento BienEstar SAVAL?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>El programa estará vigente hasta el 31 de diciembre del 2018. Concluido este plazo, el programa de descuento SAVAL se prorrogará automáticamente por períodos iguales y sucesivos, mientras Laboratorios SAVAL S.A. no decida ponerle término.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>6.  ¿El plan de descuento tiene algún costo para usted? </h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>No, el plan de descuento no tiene ningún costo para el paciente inscrito en el programa.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>7.	¿Cuál es el procedimiento para utilizar el programa de descuento en medicamentos?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Una vez inscrito en el programa de descuento en medicamentos de Laboratorios SAVAL, usted podrá obtener los descuentos hasta la fecha de vigencia del programa o hasta completar un total de 12 unidades de un mismo producto en un período de 13 meses (con la excepción de los antibióticos, en los cuales el máximo es 3 unidades en 12 meses).</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>8.	¿Cómo obtener el cupón de inscripción para el programa de descuento en medicamentos?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>El cupón de inscripción debe ser entregado por su médico tratante o bien puede ser descargado directamente desde la página web del programa BienEstar SAVAL.</p>
									</div>
								</div>
                            </div>
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>9.	¿Qué hacer para inscribirse en el programa de descuento en medicamentos?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Teniendo en su poder la receta de un médico, cupón de descuento o código de inscripción,  diríjase a cualquiera de las farmacias adheridas al programa y solicite ser incorporado en el programa de descuento BienEstar SAVAL.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>10.	¿Dónde inscribirse? </h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Puede inscribirse en cualquiera de las farmacias adheridas <a href="/programa-descuentos">ver farmacias</a></p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>11.	¿Debe presentar la receta del médico al momento de inscribirme? </h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si, es necesario e imprescindible que presente la receta, el cupón de descuento o el código de inscripción al momento de inscribirse.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>12.	¿Se debe pagar para obtener los beneficios del programa de descuento en medicamentos?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>No se requiere efectuar ningún pago para obtener los beneficios del programa.</p>
									</div>
								</div>
                            </div>
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>13.	¿Al estar inscrito queda registrado para todas las marcas que están incluidas en el programa de descuento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>No. La inscripción sólo se asocia al producto (s) que su médico expresamente le recetó.</p>
									</div>
								</div>
                            </div>
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>13.	¿Al estar inscrito queda registrado para todas las marcas que están incluidas en el programa de descuento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>No. La inscripción sólo se asocia al producto (s) que su médico expresamente le recetó.</p>
                                        <p>¿Para inscribirme en el programa debo presentar la receta?</p>
                                        <p>Si, necesariamente debe presentar la receta junto al cupón de descuento o código de inscripción al momento de inscribirse. </p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>14.	Una vez que me inscribo, ¿quedo automáticamente registrado para comprar?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si, queda registrado para el producto (s) que el médico recetó de acuerdo a la respectiva prescripción médica. Para futuras compras, debe presentar igualmente la respectiva receta.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>15.	¿Puedo comprar más de un medicamento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si, es posible comprar más de un medicamento. Sin embargo, es importante considerar que el beneficio sólo será válido para los productos con los cuales fue inscrito en el programa y que hayan sido expresamente recetados por su médico.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>16.	¿Puedo inscribir más de un producto en el programa?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si, es posible inscribir más de un producto en el programa de descuento. Sin embargo, es importante considerar que la inscripción sólo se asocia al producto (s) que el médico recetó.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>17.	¿Todos los productos requieren inscripción?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si, para acceder al programa de descuento es necesario inscribirse. La inscripción sólo se asocia al producto (s) que el médico recetó.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>18.	¿Cuáles son las farmacias adheridas al programa?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Las farmacias adheridas al programa de descuento SAVAL se encuentran a lo largo del país. Para mayor detalle revise el siguiente link.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>19.	¿Desde qué momento puedo hacer uso de los beneficios del programa?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Puede hacer uso del beneficio desde el momento en que se inscriba.</p>
									</div>
								</div>
                            </div>
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>20.	¿Dónde puedo obtener mayor información del programa de descuento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Para obtener mayor información del programa ingrese al siguiente link <a href="/programa-descuentos">Programa de descuento</a></p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>21.	¿Cuál es el listado de medicamentos incluidos en el Programa de descuento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Para obtener mayor información del programa ingrese al siguiente link <a href="/programa-descuentos">Programa de descuento</a></p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>22.	¿Qué sucede con el descuento si el médico cambia el medicamento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si el médico cambia la receta, deberá realizar una nueva inscripción con este nuevo medicamento en cualquiera de las farmacias adheridas <a href="/programa-descuentos">Programa de descuento</a>, presentando la nueva receta junto al cupón de </p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>22.	¿Qué sucede con el descuento si el médico cambia el medicamento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si el médico cambia la receta, deberá realizar una nueva inscripción con este nuevo medicamento en cualquiera de las farmacias adheridas <a href="/programa-descuentos">Programa de descuento</a>, presentando la nueva receta junto al cupón de descuento o código de inscripción al programa. Es importante considerar que el programa es válido sólo para el listado de productos incluidos en el siguiente link [_]</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>23.	¿La inscripción es válida sólo para el medicamento inscrito?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Si, la inscripción es válida solamente para producto (s) recetados (s) por su médico.</p>
									</div>
								</div>
                            </div>
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>24.	¿Cómo puedo inscribir otro medicamento en el programa?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Para inscribir otro medicamento es necesario que acuda a una de las farmacias adheridas con su receta y el cupón de descuento o código de inscripción correspondiente, entregado por su médico o descargado de nuestra página.</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>25.	¿Qué tipo de medicamentos están incluidos en el programa?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>Para conocer en detalle el listado de productos incluidos, haga click aquí [_]</p>
									</div>
								</div>
                            </div>
                            
                            <div class="c-faq__item">
								<div class="c-faq__title">
									<h2>26.	¿Cuáles son las restricciones para acceder al programa de descuento?</h2><a href="#"><span class="fas fa-plus"></span></a>
								</div>
								<div class="c-faq__info">
									<div class="inner">
                                        <p>No hay restricciones. Sólo debe estar inscrito en el programa en cualquiera de las farmacias adheridas y presentar la respectiva receta debidamente extendida por su médico.</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</main>

@stop