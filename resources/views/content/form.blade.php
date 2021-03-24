@extends('template')
@section('page_title')
  Content
@stop
@section('content')
    @include('errors')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Content Form</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if($content)
                    {!! Form::model($content,["url"=>"content/$content->id","class"=>"form-horizontal","method"=>"patch","files"=>"True"]) !!}
                    @include('content.input',['buttonAction'=>'Edit','required'=>'  (optional)'])
                    @else
                    {!! Form::open(["url"=>"content","class"=>"form-horizontal","method"=>"POST","files"=>"True"]) !!}
                    @include('content.input',['buttonAction'=>'Save'])
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@stop
@section('script')
    <script>
        $('#contents').addClass('active');
        $('#contents_create').addClass('active');
            if (this.value == 5) {
              $('#video').hide('slow');
            }
        });
    </script>
@stop
