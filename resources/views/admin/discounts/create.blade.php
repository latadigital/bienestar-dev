@extends('admin.layout')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">DESCUENTOS</h4>
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

                            <h4 class="header-title m-t-0">Crear Descuento</h4>
                            <p class="text-muted font-13 m-b-10">
                                En este módulo puedes crear una entrada al Descuento.
                            </p>

                            <div class="p-20">
                                <form action="{{ route('discount.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Nombre<span class="text-danger">*</span></label>
                                        <input type="text" name="name" required placeholder="Escribe un titulo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Presentación<span class="text-danger">*</span></label>
                                        <input type="text" name="presentation" required placeholder="Escribe un titulo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Marca<span class="text-danger">*</span></label>
                                        <select class="form-control select2" name="make_id">
                                            <option>Selecciona una Marca</option>
                                            <optgroup label="Marcas">
                                                @foreach($makes as $make)
                                                <option value="{{ $make->id }}">{{ $make->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>

                                    <!--<div class="form-group">
                                        <label>Body<span class="text-danger">*</span></label>
                                        <textarea name="body" id="" cols="30" rows="10" class="textedit'"></textarea>
                                    </div>-->

                                    <div class="form-group">
                                        <label>Código<span class="text-danger">*</span></label>
                                        <input type="text" name="code" required placeholder="Escribe un Código" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Descuento<span class="text-danger">*</span></label>
                                        <input type="text" name="discount" required placeholder="Escribe un Descuento" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-30">Código 1</h4>
                                            <input type="file" name="code1" class="dropify" data-max-file-size="1M" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-30">Código 2</h4>

                                            <input type="file" name="code2" class="dropify" data-max-file-size="1M" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-30">Código 3 </h4>

                                            <input type="file" name="code3" class="dropify" data-max-file-size="1M" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Válido desde</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" name="from_date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Válido Hasta</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" name="to_date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="icon-calender"></i></span>
                                                </div>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox checkbox-custom">
                                            <input id="estado" name="state" type="checkbox">
                                            <label for="estado">
                                                Estado
                                            </label>
                                        </div>
                                    </div>




                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Crear
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5" onclick="history.back();">
                                            Cancel
                                        </button>
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