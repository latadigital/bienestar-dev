@extends('web.layout.layout')

@section('content')
		<main role="main">
			<div class="c-breadcrumb">
				<div class="c-inner">
					<ul>
						<li><a href="/">Home /</a></li>
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
							@foreach($categories as $category)
								<li>
									<a href="{{ route('category', $category->slug) }}"><span>
										@if($category->iconav)
											<img src="{{ $category->iconav }}">
										@endif
									</span>{{ $category->name }}
									</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="c-blog__content">
					<div class="c-inner">
						<!--<h2 class="c-blog__orangeTitle"><strong>Infantil</strong></h2>-->
						
						<h2 class="c-blog__orangeTitle"><strong>{{ $category->slug }}</strong></h2>
						<p>{{ $category->body }}</p>
						
						
						<div class="c-blog__articles">
							<div class="grid-sizer"></div>

							@foreach($posts as $post)
							<div class="c-blog__article">
								
								<div class="c-blog__article-inner">

									<div class="c-blog__article-image">
										@if($post->file)
											<img src="{{ $post->file }}">
										@endif
									</div>

									<div class="c-blog__article-info">
										<h2>{{ $post->name }} </h2>
										<p>{{ $post->excerpt }} [...]</p><a href="{{ route('post', $post->slug) }}"><span>+ </span>Leer más</a>
										<div class="c-blog__article-socials">
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