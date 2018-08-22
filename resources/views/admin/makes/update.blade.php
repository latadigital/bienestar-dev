@extends('admin.layout')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Marcas</h4>
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
                            <h4 class="header-title m-t-0">Crear Marca</h4>
                            <p class="text-muted font-13 m-b-10">
                                En este módulo puedes crear Marcas.
                            </p>

                            <div class="p-20">
                                <form method="post" action="{{ route('make.store') }}" data-parsley-validate novalidate>
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <div class="form-group">
                                        <label for="">Nombre<span class="text-danger">*</span></label>
                                        <input type="text" value="{{ $make->name }}" name="name" parsley-trigger="change" required
                                               placeholder="" class="form-control" id="">
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