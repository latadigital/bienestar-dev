@extends('web.layout.layout')

@section('content')
<main role="main">
        <div class="c-breadcrumb">
            <div class="c-inner">
                <ul>
                    <li><a href="#">Home /</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="c-contacto">
            <div class="c-inner">
                <div class="c-contacto__box"><img src="/assets_web/img/contacto-thumb.png"></div>
                <div class="c-contacto__box c-contacto__box--pad40">
                    <h1 class="c-info__h1 c-info__h1--inline-block u-mb30"><span>Contacto</span></h1>
                    @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    <div class="c-contacto__form">
                        <form action="{{ route('contacto.store') }}" method="POST">
                            {{csrf_field()}}
                            <div class="input name">
                                <input value="{{ old('nombre') }}" name="nombre" type="text" placeholder="Nombre">
                                <span>@if ($errors->has('nombre'))<small>{{ implode(',',$errors->get('nombre')) }}</small>@endif</span>
                            </div>
                            <div class="input lastname">
                                <input value="{{ old('apellido') }}" name="apellido" type="text" placeholder="Apellido">
                                <span>@if ($errors->has('apellido'))<small>{{ implode(',',$errors->get('apellido')) }}</small>@endif</span>

                            </div>
                            <div class="input email">
                                <input value="{{ old('email') }}" name="email" type="email" placeholder="Email">
                                <span>@if ($errors->has('email'))<small>{{ implode(',',$errors->get('email')) }}</small>@endif</span>
                            </div>
                            <div class="input email">
                                <input value="" name="email_confirmation" type="email" placeholder="Re ingresa tu Email">
                            </div>
                            <div class="input asunto">
                                <input value="{{ old('asunto') }}" name="asunto" type="text" placeholder="Asunto">
                                <span>@if ($errors->has('asunto'))<small>{{ implode(',',$errors->get('asunto')) }}</small>@endif</span>
                            </div>
                            <div class="input phone">
                                <input value="{{ old('tel') }}" name="tel" type="tel" placeholder="Teléfono">
                                <span>@if ($errors->has('tel'))<small>{{ implode(',',$errors->get('tel')) }}</small>@endif</span>
                            </div>
                            <div class="input textarea large">
                                <textarea name="mensaje" placeholder="Escribe tu mensaje">{{ old('mensaje') }}</textarea>
                                <span>@if ($errors->has('mensaje'))<small>{{ implode(',',$errors->get('mensaje')) }}</small>@endif</span>
                            </div>
                            <span>@if ($errors->has('g-recaptcha-response'))<small>{{ implode(',',$errors->get('g-recaptcha-response')) }}</small>@endif</span>
                            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                            <div class="input submit">
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('js')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection