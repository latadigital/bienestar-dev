@extends('admin.layout')
@section('css')
    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Multi Item Selection examples -->
    <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="content">
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
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Listado de Descuentos</h4>
                        <p class="text-muted font-14 m-b-30">
                            En este módulo se muestran los Descuentos registrados. Puedes Editar, Eliminar u observar casa registro.
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Presentación</th>
                                <th>Descuento</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($discounts as $discount)
                            <tr>
                                <td>{{ $discount->id }}</td>
                                <td>{{ $discount->name }}</td>
                                <td>{{ $discount->presentation }}</td>
                                <td>{{ $discount->discount }}</td>
                                <td>{{ ($discount->state)? 'Activo' : 'Inactivo' }}</td>
                                <td>
                                    <a href="{{ route('discount.show', $discount->id) }}" class="btn waves-effect
                                    edit-btn btn-primary"> <i class="fa fa-eye"></i> </a>
                                    <a href="{{ route('discount.edit', $discount->id) }}" class="btn waves-effect
                                    edit-btn waves-light btn-warning"> <i class="fa fa-pencil"></i> </a>
                                    <a class="btn waves-effect edit-btn btn-danger" data-toggle="modal" data-target="#confirm-delete" data-href=""> <i class="fa fa-close"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
@endsection

@section('js')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>

    <!-- Key Tables -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Selection table -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.select.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>
@endsection