@extends('web.layout.layout')

@section('content')
<main id="blog" role="main">
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
					<li><a href="/categorias/infantil"><span><img src="/assets_web/img/iconos/icon-infantil-white.svg" alt=""></span>Infantil</a></li>
					<li><a href="/categorias/corazon"><span><img src="/assets_web/img/iconos/icon-corazon-white.svg" alt=""></span>Corazón</a></li>
					<li><a href="/categorias/sistema-respiratorio"><span><img src="/assets_web/img/iconos/icon-respiratorio-white.svg" alt=""></span>Sistema Respiratorio</a></li>
					<li><a href="/categorias/nutricion"><span><img src="/assets_web/img/iconos/icon-nutricion-white.svg" alt=""></span>Nutrición</a></li>
					<li><a href="/categorias/sistema-digestivo"><span><img src="/assets_web/img/iconos/icon-gastrico-white.svg" alt=""></span>Sistema Digestivo</a></li>
					<li><a href="/categorias/dolor-e-inflamacion"><span><img src="/assets_web/img/iconos/icon-dolor-white.svg" alt=""></span>Dolor e Inflamación</a></li>
					<li><a href="/categorias/mental"><span><img src="/assets_web/img/iconos/icon-mental-white.svg" alt=""></span>Mental</a></li>
					<li><a href="/categorias/vision"><span><img src="/assets_web/img/iconos/icon-vision-white.svg" alt=""></span>Visión</a></li>
					<li><a href="/categorias/adulto-mayor"><span><img src="/assets_web/img/iconos/icon-adulto-white.svg" alt=""></span>Personas Mayores</a></li>
					
				</ul>
			</div>
		</div>
		<div class="c-blog__content">
			<div class="c-inner">
				<h2 class="c-blog__orangeTitle"><strong>{{ $category->name }}</strong></h2>
				<p>{{ $category->body }}</p>
				<div class="c-blog__articles">
					<div class="grid-sizer"></div>
					@foreach($category->posts as $post)
					<div class="c-blog__article">
						<div class="c-blog__article-inner">
							<div class="c-blog__article-image">
								@if($post->file)
									<img src="{{ $post->file }}" alt="">
								@else
									<img src="/assets_web/img/placeholder.jpg" alt="">
								@endif
							</div>
							<div class="c-blog__article-info">
								<h2>{{ $post->name }} </h2>
								<p>{{ str_limit($post->excerpt, 20) }} [...]</p>
								<a href="{{ route('post', $post->slug) }}"><span>+ </span>Leer más</a>
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
					<div class="c-blog__article" v-for="post in posts">
						<div class="c-blog__article-inner">
							<div class="c-blog__article-image">
								<img src="/assets_web/img/placeholder.jpg" alt="">
							</div>
							<div class="c-blog__article-info">
								<h2></h2>
								<p>[...]</p>
								<a href=""><span>+ </span>Leer más</a>

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
				</div>
				<a class="c-blog__loadMore" href="javascript:void(0)" @click="more">cargar más</a>
			</div>
		</div>
	</div>
</main>
@endsection

@section('js')
	<script>
		let category = "{{ $category->id }}";
        const blog = new Vue({
            el:"#blog",
			props:['category'],
			data : {
				posts:[],
				count: 1,
			},
			methods: {
                more: function () {
                    this.count++;
					$.get('/api/posts-category/'+ category +'/' + this.count, this.loadMore);
				},
				loadMore: function (response) {
					for(let i in response) {
					    this.posts.push(response[i]);
					}
                }
			}
        });

	</script>
@endsection

