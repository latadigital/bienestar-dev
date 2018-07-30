@extends('web.layout.layout')

@section('content')        
    
            <main role="main">
				<div class="c-single">
					<div class="c-inner">
						<div class="c-single__content">
							<div class="c-single__image">
                                @if($post->file)
									<img src="{{ $post->file }}">
								@endif
                            </div>
                            <h1>{{ $post->name }}</h1>
                            

							<div class="blog_body">
                                {!! $post->body !!}
                            </div>
                            
                            <div class="c-single__share">
								<div class="icon"><span class="fas fa-share-alt"></span></div>
								<p>Comparte:</p><a href="#">Facebook</a><a href="#">Twitter</a><a href="#">Behance</a>
								<div class="c-single__pagination"><a href="#"><span class="fas fa-arrow-left"></span><i>Prev</i></a>/<a href="#"><i>Next </i><span class="fas fa-arrow-right"></span></a></div>
							</div>
						</div>
						<div class="c-single__aside">
							<div class="c-single__search">
								<form action="#">
									<div class="input search">
										<input type="text" placeholder="Buscar">
									</div>
								</form>
							</div>

							
                            <h2>Categorias </h2>
							<div class="c-single__cats">	
								@foreach($post->categories as $category)
								<div class="c-single__cat"><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
									<div class="count">(15)</div>
                                </div>
                                @endforeach
                            </div>

							<h2>Posts recientes</h2>
                            <div class="c-single__recents">


								<div class="c-single__recent">
									<figure></figure>
									<div class="info">
										<h3>{{ $post->name }}</h3>
										<p>May 16, 2016 by <a href="#">Parker </a>in<a href="#">lab</a></p>
									</div>
								</div>
								<div class="c-single__recent">
									<figure></figure>
									<div class="info">
										<h3>Dental patients increased to protection</h3>
										<p>May 16, 2016 by <a href="#">Parker </a>in<a href="#">lab</a></p>
									</div>
								</div>

							</div>
							
						</div>
					</div>
				</div>
            </main>

@stop