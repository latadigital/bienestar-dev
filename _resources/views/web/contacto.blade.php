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
                    <div class="c-contacto__form">
                        <form action="#" method="POST">
                            <div class="input name">
                                <input type="text" placeholder="Nombre">
                            </div>
                            <div class="input lastname">
                                <input type="text" placeholder="Apellido">
                            </div>
                            <div class="input email">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="input email">
                                <input type="text" placeholder="Re ingresa tu Email">
                            </div>
                            <div class="input asunto">
                                <input type="text" placeholder="Asunto">
                            </div>
                            <div class="input phone">
                                <input type="text" placeholder="Teléfono">
                            </div>
                            <div class="input textarea large">
                                <textarea name="message" placeholder="Escribe tu mensaje"></textarea>
                            </div>
                            <div class="input submit">
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop