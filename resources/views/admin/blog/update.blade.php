@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">BLOG</h4>
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
                            <h4 class="header-title m-t-0">Editar BLOG</h4>
                            <p class="text-muted font-13 m-b-10">
                                En este módulo puedes Editar Entradas.
                            </p>
                            <div class="p-20">
                                @if(!$errors->isEmpty())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                @if (is_array($error))
                                                    <li>{{ implode(',', $error) }}</li>
                                                @else
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('blog.update', $post->id) }}" method="post" @if($errors->any())class="was-validated" @endif enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <div class="form-group">
                                        <label>Titulo<span class="text-danger">*</span></label>
                                        <input value="{{ $post->name }}" type="text" name="name" required placeholder="Escribe un titulo" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Slug<span class="text-danger">*</span></label>
                                        <input value="{{ $post->slug }}" type="text" name="slug" required placeholder="slug" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Body<span class="text-danger">*</span></label>
                                        <textarea name="body" id="" cols="30" rows="10" class="textedit'">{{ $post->body }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <h6>Categorias</h6>
                                        @foreach($categories as $category)
                                            <div class="checkbox checkbox-custom col-xs-4">
                                                @if(!!$post->categories->where('id', $category->id)->count())
                                                <input id="{{ $category->name }}" value="{{ $category->id }}" name="categories[]"  type="checkbox" checked>
                                                @else
                                                <input id="{{ $category->name }}" value="{{ $category->id }}" name="categories[]"  type="checkbox">
                                                @endif
                                                <label for="{{ $category->name }}">
                                                    {{ $category->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!--<div class="form-group">

                                        <h6>Tags</h6>
                                        <p class="text-muted m-b-20 font-13">
                                            Agrega tags Escribe los tags que consideres para esta entrada
                                        </p>
                                        <div class="tags-default">
                                            <input type="text" value="corazón,salud,Alimentación" data-role="tagsinput" placeholder="Agrega tags"/>
                                        </div>

                                    </div>-->

                                    <div class="form-group">
                                        <label>Extracto<span class="text-danger">*</span></label>
                                        <input value="{{ $post->excerpt }}" type="text" name="excerpt" required placeholder="Escribe un Extracto" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-30">Imagen Destacada</h4>
                                            <input type="file" name="image" class="dropify" data-max-file-size="1M" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox checkbox-custom">
                                            @if($post->primary)
                                            <input id="destacado" name="" type="checkbox" checked>
                                            @else
                                                <input id="destacado" name="" type="checkbox">
                                            @endif
                                            <label for="destacado">
                                                Destacado
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox checkbox-custom">
                                            @if($post->status === 'PUBLISHED')
                                                <input id="estado" name="status" type="checkbox" checked>
                                            @else
                                                <input id="estado" name="status" type="checkbox">
                                            @endif
                                            <label for="estado">
                                                Estado
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Actualizar
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