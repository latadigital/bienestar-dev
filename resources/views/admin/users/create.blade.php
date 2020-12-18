@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Administradores</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="card-box">
                    @if ($errors)
                        
                    @endif
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12">

                            <h4 class="header-title m-t-0">Crear Administrador</h4>
                            <p class="text-muted font-13 m-b-10">
                                En este módulo puedes crear administradores.
                            </p>

                            <div class="p-20">
                                <form action="{{ route('users.store') }}" method="post" data-parsley-validate="" novalidate="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="userName">Nombre<span class="text-danger">*</span></label>
                                        <input type="text" name="name" parsley-trigger="change" required="" placeholder="Escribe un nombre" class="form-control" id="userName" data-parsley-id="4">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                        <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" class="form-control" id="emailAddress" data-parsley-id="6">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass1">Password<span class="text-danger">*</span></label>
                                        <input id="pass1" type="password" placeholder="Password" required="" class="form-control" data-parsley-id="8">
                                    </div>
                                    <div class="form-group">
                                        <label for="passWord2">Confirmar Password <span class="text-danger">*</span></label>
                                        <input name="password_confirmation" data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control" id="passWord2" data-parsley-id="10">
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
    </div>
@endsection