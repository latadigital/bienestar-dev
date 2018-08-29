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
								<p>Comparte:</p>
								<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('post', $post->slug) }}">Facebook</a>
								<a target="_blank" href="http://twitter.com/share?text=Bienestar Saval&url={{ route('post', $post->slug) }}&hashtags=BienestarSaval">Twitter</a>
								<div class="c-single__pagination"><a href="#"><span class="fas fa-arrow-left"></span><i>Prev</i></a>/<a href="#"><i>Next </i><span class="fas fa-arrow-right"></span></a></div>
							</div>
						</div>
						<div class="c-single__aside">
							<div class="c-single__search">
								<form action="{{ route('interes') }}">
									<div class="input search">
										<input name="q" type="text" placeholder="Buscar">
									</div>
								</form>
							</div>

                            <h2>Categorias</h2>
							<div class="c-single__cats">	
								@foreach (\App\Category::all() as $category)
								<div class="c-single__cat"><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
									<div class="count">{{ $category->posts->count() }}</div>
                                </div>
                                @endforeach
                            </div>

							<h2>Posts recientes</h2>
                            <div class="c-single__recents">
								@foreach (\App\Post::take(2)->orderByDesc('created_at')->get() as $post)
								<div class="c-single__recent">
									<figure></figure>
									<div class="info">
										<h3>{{ $post->name }}</h3>
										<p>{{ $post->created_at->format('M d, Y') }}</p>
									</div>
								</div>
								@endforeach
							</div>
							<div class="c-single__recents">
								<img src="/assets_web/img/2-S-L.png" alt="" width="90%" style="margin: 40px auto;">
							</div>
							<div class="c-single__recents">
								<img src="/assets_web/img/2-S-L.png" alt="" width="90%" style="margin: 40px auto;">
							</div>
							
						</div>
					</div>
				</div>
            </main>



			<!--<main role="main">
				<div class="c-single">
					<div class="c-inner">
						<div class="c-single__content">
							<div class="c-single__image">
								@if($post->file)
									<img src="{{ $post->file }}">
								@endif
							</div>
							<p class="post-info"> <span>Causas, Síntomas y Tratamientos</span></p>
							<h1>Sed elit quam iaculis sed semper sit amet sollicitudin vita.</h1>
							<p class="c-date">May 16, 2018 |  Posteado por <strong>Dr. Luisa Cea, Pediatra Universidad de Chile.</strong></p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea satham non numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
							<h2>Enim ipsam voluptatem quia voluptas</h2>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<blockquote>“ Completely synergize resource taxing relationships via premier niche markets. Profess tionally cultivate one-to-one customer service with robust ideas” </blockquote>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<ul>
								<li>Texto</li>
								<li>Texto</li>
								<li>Texto</li>
							</ul>
							<p class="c-date">May 16, 2018 |  Posteado por <strong>Dr. Luisa Cea, Pediatra Universidad de Chile.</strong></p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea satham non numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
							<h2>Enim ipsam voluptatem quia voluptas</h2>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<blockquote>“ Completely synergize resource taxing relationships via premier niche markets. Profess tionally cultivate one-to-one customer service with robust ideas” </blockquote>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<ul>
								<li>Texto</li>
								<li>Texto</li>
								<li>Texto</li>
							</ul>
							<p class="c-date">May 16, 2018 |  Posteado por <strong>Dr. Luisa Cea, Pediatra Universidad de Chile.</strong></p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea satham non numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
							<h2>Enim ipsam voluptatem quia voluptas</h2>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<blockquote>“ Completely synergize resource taxing relationships via premier niche markets. Profess tionally cultivate one-to-one customer service with robust ideas” </blockquote>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<ul>
								<li>Texto</li>
								<li>Texto</li>
								<li>Texto</li>
							</ul>
							<p class="c-date">May 16, 2018 |  Posteado por <strong>Dr. Luisa Cea, Pediatra Universidad de Chile.</strong></p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea satham non numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
							<h2>Enim ipsam voluptatem quia voluptas</h2>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<blockquote>“ Completely synergize resource taxing relationships via premier niche markets. Profess tionally cultivate one-to-one customer service with robust ideas” </blockquote>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<ul>
								<li>Texto</li>
								<li>Texto</li>
								<li>Texto</li>
							</ul>
							<p class="c-date">May 16, 2018 |  Posteado por <strong>Dr. Luisa Cea, Pediatra Universidad de Chile.</strong></p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea satham non numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
							<h2>Enim ipsam voluptatem quia voluptas</h2>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<blockquote>“ Completely synergize resource taxing relationships via premier niche markets. Profess tionally cultivate one-to-one customer service with robust ideas” </blockquote>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<ul>
								<li>Texto</li>
								<li>Texto</li>
								<li>Texto</li>
							</ul>
							<p class="c-date">May 16, 2018 |  Posteado por <strong>Dr. Luisa Cea, Pediatra Universidad de Chile.</strong></p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea satham non numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
							<h2>Enim ipsam voluptatem quia voluptas</h2>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<blockquote>“ Completely synergize resource taxing relationships via premier niche markets. Profess tionally cultivate one-to-one customer service with robust ideas” </blockquote>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt  Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci quia suthagara lukuthea sathamnon numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam quia dolore sit amet con sectetur adip. quia suthagara lukuthea sathamnon</p>
							<ul>
								<li>Texto</li>
								<li>Texto</li>
								<li>Texto</li>
							</ul>
							<div class="c-single__share">
								<div class="icon"><span class="fas fa-share-alt"></span></div>
								<p>Comparte:</p><a href="#">Facebook</a><a href="#">Twitter</a>
								<div class="c-single__pagination"><a href="#"><span class="fas fa-arrow-left"></span><i>Anterior</i></a>/<a href="#"><i>Siguiente</i><span class="fas fa-arrow-right"></span></a></div>
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

								@foreach($categories as $category)
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
										<h3>Dental patients increased to protection</h3>
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
								<div class="c-single__recent">
									<figure></figure>
									<div class="info">
										<h3>Dental patients increased to protection</h3>
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

							<div class="c-single__recents">
								<img src="/assets_web/img/2-S-L.png" alt="" width="90%" style="margin: 40px auto;">
							</div>

						</div>
					</div>
				</div>
			</main>-->

@stop