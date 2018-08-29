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
                    <h2 class="c-blog__orangeTitle"><strong>Todos los temas</strong></h2>

                    <div class="c-blog__articles">
                        <div class="grid-sizer"></div>
                        @foreach($posts as $post)
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
                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('post', $post->slug) }}">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                            <a target="_blank" href="http://twitter.com/share?text=Bienestar Saval&url={{ route('post', $post->slug) }}&hashtags=BienestarSaval">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                            <a href="https://plus.google.com/share?app=110&url={{ route('post', $post->slug) }}" target="_blank">
                                                <span class="fab fa-google-plus-g"></span>
                                            </a>
                                            <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('post', $post->slug) }}&summary={{ $post->excerpt }}&source=LinkedIn">
                                                <span class="fab fa-linkedin-in">  </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
