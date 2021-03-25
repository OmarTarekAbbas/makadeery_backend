<style>
.chosen-container .group-result {
    font-weight: bold!important;
    font-size: 17px!important;
    color: #000!important;
}
</style>

@if(isset($_REQUEST['category_id']))
<div class="form-group">
    <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Category<span class="text-danger">*</span></label>
    <div class="col-sm-9 col-lg-10 controls">
        <select  name="category_id" class="form-control chosen-rtl">
            <option id="category_{{ $_REQUEST['category_id'] }}" value="{{ $_REQUEST['category_id'] }}">{{ $_REQUEST['title']}}</option>
        </select>
    </div>
</div>
@else
<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Category<span class="text-danger">*</span></label>
    <div class="col-sm-9 col-lg-10 controls">


        <select name="category_id" class='form-control chosen-rtl'>
        @foreach($categorys as $category)
            <optgroup label="{{$category->title}}">
                @foreach($category->sub_cats as $sub_category)
                    <option value='{{$sub_category->id}}'>{{$sub_category->title}}-{{$category->title}}</option>
                @endforeach
            </optgroup>
        @endforeach

        </select>
    </div>
</div>
@endif

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Content Type<span class="text-danger">*</span></label>
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::select('content_type_id',$content_types->pluck('title','id'),null,['class'=>'form-control chosen-rtl','id' => 'first_select','required']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Title <span class="text-danger">*</span></label>
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::text('title',null,['placeholder'=>'Title','class'=>'form-control']) !!}
    </div>
</div>

<!-- <div class="form-group">
    <label class="col-sm-3 col-lg-2 control-label">Patch Number </label>
    <div class="col-sm-9 col-lg-10 controls">
        {!! Form::number('patch_number',null,['placeholder'=>'Patch Number','class'=>'form-control','min'=>0]) !!}
    </div>
</div> -->

@if($content)

      @if($content->type->id == 5)
      <div  id="video">
        <div class="form-group">
            <label class="col-sm-3 col-md-2 control-label">Image Preview</label>
            <div class="col-sm-9 col-md-8 controls">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                        @if($content)
                            <img src="{{$content->image_preview}}" alt="" />
                        @else
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                        @endif
                    </div>
                    <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file"><span class="fileupload-new">@lang('messages.select_image')</span>
                            <span class="fileupload-exists">Change</span>
                            {!! Form::file('image_preview',["accept"=>"image/*" ,"class"=>"default"]) !!}
                        </span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
                <span class="label label-important">NOTE!</span>
                <span>Only extensions supported png, jpg, and jpeg</span>
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 col-lg-2 control-label">Content <span class="text-danger">*</span></label>
          <div class="col-sm-9 col-md-8 controls">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                    @if($content)
                    <video width="100%" height="100%" controls>
                      <source src="{{$content->path}}">
                    </video>
                    @endif
                  </div>
                  <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  <div>
                      <span class="btn btn-file"><span class="fileupload-new">Select Video File</span>
                          <span class="fileupload-exists">Change</span>
                          {!! Form::file('path',["accept"=>"video/*",'class'=>'default']) !!}
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                  </div>
              </div>
              <span class="label label-important">NOTE!</span>
              <span>Only extension supported mp4, flv, and 3gp</span>
          </div>


        </div>
      </div>
      @else
      <div id="video">
        <div class="form-group">
            <label class="col-sm-3 col-md-2 control-label">Image Preview</label>
            <div class="col-sm-9 col-md-8 controls">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                        @if($content)
                            <img src="{{$content->image_preview}}" alt="" />
                        @else
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                        @endif
                    </div>
                    <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file"><span class="fileupload-new">@lang('messages.select_image')</span>
                            <span class="fileupload-exists">Change</span>
                            {!! Form::file('image_preview',["accept"=>"image/*" ,"class"=>"default"]) !!}
                        </span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
                <span class="label label-important">NOTE!</span>
                <span>Only extensions supported png, jpg, and jpeg</span>
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 col-lg-2 control-label">Content <span class="text-danger">*</span></label>
          <div class="col-sm-9 col-md-8 controls">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                    @if($content)
                    <video width="100%" height="100%" controls>
                      <source src="{{$content->path}}">
                    </video>
                    @endif
                  </div>
                  <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  <div>
                      <span class="btn btn-file"><span class="fileupload-new">Select Video File</span>
                          <span class="fileupload-exists">Change</span>
                          {!! Form::file('path',["accept"=>"video/*",'class'=>'default' ,'disabled' =>true ]) !!}
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                  </div>
              </div>
              <span class="label label-important">NOTE!</span>
              <span>Only extension supported mp4, flv, and 3gp</span>
          </div>


        </div>
      </div>
      @endif
@else
    <div id="video">
      <div class="form-group">
          <label class="col-sm-3 col-md-2 control-label">Image Preview</label>
          <div class="col-sm-9 col-md-8 controls">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                      @if($content)
                          <img src="{{$content->image_preview}}" alt="" />
                      @else
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                      @endif
                  </div>
                  <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  <div>
                      <span class="btn btn-file"><span class="fileupload-new">@lang('messages.select_image')</span>
                          <span class="fileupload-exists">Change</span>
                          {!! Form::file('image_preview',["accept"=>"image/*" ,"class"=>"default"]) !!}
                      </span>
                      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                  </div>
              </div>
              <span class="label label-important">NOTE!</span>
              <span>Only extensions supported png, jpg, and jpeg</span>
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 col-lg-2 control-label">Content <span class="text-danger">*</span></label>
        <div class="col-sm-9 col-md-10 controls">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                    <span class="btn btn-file"><span class="fileupload-new">Select Video File</span>
                        <span class="fileupload-exists">Change</span>
                        {!! Form::file('path',["accept"=>"video/*",'class'=>'default' ]) !!}
                    </span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
            <span class="label label-important">NOTE!</span>
            <span>Only extension supported mp4, flv, and 3gp</span>
        </div>


      </div>
    </div>
@endif
<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
        {!! Form::submit($buttonAction,['class'=>'btn btn-primary']) !!}
    </div>
</div>
