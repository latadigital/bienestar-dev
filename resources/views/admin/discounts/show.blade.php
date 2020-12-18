@extends('admin.layout')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Descuentos</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12">

                            <h4 class="header-title m-t-0">Ver Descuento</h4>
                            <p class="text-muted font-13 m-b-10">
                                En este módulo puedes ver a los Descuentos.
                            </p>

                            <div class="p-20">
                                <form action="#" data-parsley-validate novalidate>
                                    <div class="form-group">
                                        <label>Nombre<span class="text-danger">*</span></label>
                                        <p>{{ $discount->name }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Presentación<span class="text-danger">*</span></label>
                                        <p>{{ $discount->presentation }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Marca<span class="text-danger">*</span></label>
                                        <p>{{ $discount->make->name }}</p>
                                    </div>


                                    <div class="form-group">
                                        <label>Código<span class="text-danger">*</span></label>
                                        <p>{{ $discount->code }}</p>
                                    </div>

                                    <div class="form-group">
                                        <label>Descuento<span class="text-danger">*</span></label>
                                        <p>-${{ $discount->discount }}</p>
                                    </div>


                                    <div class="form-group">
                                        <h4>Código 1</h4>
                                        <img src="{{ url($discount->code1) }}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <h4>Código 2</h4>
                                        <img src="{{ url($discount->code2) }}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <h4>Código 3</h4>
                                        <img src="{{ url($discount->code3) }}" alt="">
                                    </div>

                                    <div class="form-group">
                                        <label>Válido desde</label>
                                        <p>{{ $discount->from_date }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Válido Hasta</label>
                                        <p>{{ $discount->to_date }}</p>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox checkbox-custom">
                                            @if($discount->state)
                                                <input id="estado" type="checkbox" checked>
                                            @else
                                                <input id="estado" type="checkbox">
                                            @endif
                                            <label for="estado">
                                                Estado
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div><!-- end col-->
        </div>
        <!-- end row -->
    </div> <!-- container -->

@endsection