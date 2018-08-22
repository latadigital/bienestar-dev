
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App title -->
    <title>Admin Bienestar | Saval</title>

    <!-- Plugins css-->
    <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Switchery css -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- Modernizr js -->
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    <!-- form Uploads -->
    <link href="{{ asset('assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- Modernizr js -->
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <style>
        .form-group{
            margin: 0 auto 40px auto !important;
        }
    </style>
    @yield('css')
</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <div class="topbar">

        <div class="topbar-left">
            <a href="index.php" class="logo">
                <i class="zmdi zmdi-group-work icon-c-logo"></i>
                <span>Bienestar</span>
            </a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                        <i class="zmdi zmdi-format-subject noti-icon"></i>
                    </a>
                </li>

                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow"><small>Bienvenido ! John</small> </h5>
                        </div>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-power"></i> <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect" style="outline: none;">
                        <i class="zmdi zmdi-menu"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Navigation</li>

                    <li class="has_sub">
                        <a href="{{ route('admin.index') }}" class="waves-effect"><span class="label label-pill label-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Inicio </span> </a>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-assignment-account"></i> <span> Administradores </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('users.index') }}">Listar</a></li>
                            <li><a href="{{ route('users.create') }}">Agregar</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-assignment-account"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('blog.index') }}">Listar</a></li>
                            <li><a href="{{ route('blog.create') }}">Agregar</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-assignment-account"></i> <span> Marcas</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('make.index') }}">Listar</a></li>
                            <li><a href="{{ route('make.create') }}">Agregar</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-assignment-account"></i> <span> Descuentos </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('discount.index') }}">Listar</a></li>
                            <li><a href="{{ route('discount.create') }}">Agregar</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-assignment-account"></i> <span> Suscripciones</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="listar-habitaciones.php">Listar</a></li>
                            <li><a href="agregar-habitaciones.php">Agregar</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- end row -->
    </div> <!-- container -->
</div> <!-- content -->

<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->



<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <div class="nicescroll">
        <ul class="nav nav-pills nav-justified text-xs-center">
            <li class="nav-item">
                <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                    Activity
                </a>
            </li>
            <li class="nav-item">
                <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                    Settings
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="home-2">
                <div class="timeline-2">
                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 minutes ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">30 minutes ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">59 minutes ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">1 hour ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">3 hours ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 hours ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="messages-2">

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Notifications</h5>
                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">API Access</h5>
                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Auto Updates</h5>
                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Online Status</h5>
                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end nicescroll -->
</div>
<!-- /Right-bar -->


<footer class="footer text-right">
    2018 &copy; Laboratorio Saval
</footer>


</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script><!-- Tether for Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

<!-- Autocomplete -->
<script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/jquery.autocomplete.init.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/pages/jquery.formadvanced.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<!-- file uploads js -->
<script src="{{ asset('assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
<script>
    CKEDITOR.config.height = 400;
    CKEDITOR.config.width = 'auto';
    CKEDITOR.replace('body');
    CKEDITOR.config.defaultLanguage;
</script>


<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'Arrastra y suelta un archivo o haz click',
            'replace': 'Arrastra y suelta o haz click para reemplazar',
            'remove': 'Remover',
            'error': 'Ooops, Algo mal anexado.'
        },
        error: {
            'fileSize': 'El tamaño del archivo es demasiado grande (1M max).'
        }
    });
</script>


<!--Morris Chart-->
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>


<!-- Page specific js -->
<script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

<!-- google analytic code -->


<!-- google analytic code ends here -->

<!-- following js will activate the menu in left side bar based on url -->
<script type="text/javascript">
    // === following js will activate the menu in left side bar based on url ====
    $(document).ready(function() {
        $("#sidebar-menu a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
    });
</script>
@yield('js')
</body>
</html>