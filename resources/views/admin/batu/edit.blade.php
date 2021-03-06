@extends('template')
@section('title')
    Create news - @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin.partial.errors')
                    </div>
                </div>
                <div class="row">
                    {!! Form::open(['route' => ['batu.update',$dataPage->id],'class'=>'form-horizontal','method'=>'put','role'=>'form','enctype'=>'multipart/form-data']) !!}
                    <div class="col-md-12">
                        <div class="p-20">
                            <div class="form-group">
                                {!! Form::label('title','Tên Page',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('txtName',old('txtName',isset($dataPage->title)?$dataPage->title:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Content','Nội dung',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('txtContent',old('txtName',isset($dataPage->content)?$dataPage->content:null),['class'=>'form-control','id'=>'editor1']) !!}
                                    <script>
                                        ckeditor('txtContent');
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Hình Banner',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileImg',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Image','Background',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <img src="{{asset('upload/thumbnail/baogiatuyendung/'.$dataPage->background)}}" class="img-rounded" width="300">
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Ẩn hiện','Ẩn / Hiện',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::checkbox('checkActive',1,($dataPage->active)==1?true:null,['style'=>'visibility:visible']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label(' ',' ',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::button('Submit',['class'=>'btn btn-custom waves-effect waves-light btn-md','type'=>'submit']) !!}
                                </div>
                            </div>

                        </div><!-----s----------->
                    </div><!--mid 8-->
                    {!! Form::close() !!}
                </div><!-- end row -->
            </div>


        </div> <!-- end card-box -->
    </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('jsfiles')
    <!-- Jquery filer js -->
    <script src="{{asset('public/backend/plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>
    <!-- Bootstrap fileupload js -->
    <script src="{{asset('public/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <!-- page specific js -->
    <script src="{{asset('public/backend/pages/jquery.fileuploads.init.js')}}"></script>
    <script>
        $( document ).ready(function(){
//   Hide the border by commenting out the variable below
            var $on = 'section';
            $($on).css({
                'background':'none',
                'border':'none',
                'box-shadow':'none'
            });
        });
    </script>

@endsection

