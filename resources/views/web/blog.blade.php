@extends('web.layout.layout')

@section('content')
		<main role="main">
			<div class="c-breadcrumb">
				<div class="c-inner">
					<ul>
						<li><a href="#">Home /</a></li>
						<li><a href="#">Temas de Interés</a></li>
					</ul>
				</div>
			</div>
			<div class="c-blog">
				<div class="c-blog__title">
					<h1>Temas de <strong>interés</strong></h1>
				</div>
				<div class="c-blog__filtros">
					<div class="c-inner">
						<ul>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-vision-white.svg" alt=""></span>Visión</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-mental-white.svg" alt=""></span>Mental</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-corazon-white.svg" alt=""></span>Corazón</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-respiratorio-white.svg" alt=""></span>Sistema Respiratorio</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-dolor-white.svg" alt=""></span>Dolor e Inflamación</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-infantil-white.svg" alt=""></span>Infantil</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-gastrico-white.svg" alt=""></span>Sistema Digestivo</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-nutricion-white.svg" alt=""></span>Nutrición</a></li>
							<li><a href="#"><span><img src="/assets_web/img/iconos/icon-otros-white.svg" alt=""></span>Otros</a></li>
						</ul>
					</div>
				</div>
				<div class="c-blog__content">
					<div class="c-inner">
						<h2 class="c-blog__orangeTitle"><strong>Infantil</strong></h2>
						<p>Porque lo que les suceda a nuestros niños  puede afectarles en el futuro, es importante saber cómo cuidarlos, cuáles son las enfermedades más comunes que pueden afectarlos y qué hacer para que crezcan sanos y felices.</p>
						<div class="c-blog__articles">
							<div class="grid-sizer"></div>

							@foreach($posts as $post)
							<div class="c-blog__article">
								
								<div class="c-blog__article-inner">

									<div class="c-blog__article-image">
										<!--Acá va la foto dinámica-->
										<!--@if($post->file)
											<img src="{{ $post->file }}">
										@endif-->
										<img src="/assets_web/img/placeholder.png" alt="">
									</div>

									<div class="c-blog__article-info">
										<h2>{{ $post->name }} </h2>
										<p>{{ $post->excerpt }} [...]</p><a href="{{ route('post', $post->slug) }}"><span>+ </span>Leer más</a>
										<div class="c-blog__article-socials">
											<a href="#">
												<span class="fas fa-envelope"></span>
											</a>
											<a href="#">
												<span class="fab fa-facebook-f"></span>
											</a>
											<a href="#">
												<span class="fab fa-twitter"></span>
											</a>
											<a href="#">
												<span class="fab fa-google-plus-g"></span>
											</a>
											<a href="#">
												<span class="fab fa-linkedin-in">  </span>
											</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach

							<!--{{ $posts->render() }}-->
						</div>
						<a class="c-blog__loadMore" href="#">cargar más</a>
					</div>
				</div>
			</div>
		</main>
@stop