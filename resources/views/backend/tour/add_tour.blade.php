@extends('crudbooster::admin_template')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
       <strong><i class="fa fa-columns"></i> Add Tours</strong>
    </div>
    <div class="panel-body">
    <form method="POST" action="{{ CRUDBooster::mainpath('add-save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token }}">
          <div class="box-body" id="parent-form-area">
             <div class="form-group header-group-0" id="form-group-tour_code">
                <label class="control-label col-sm-2"> 
                Tour Code
                <span class="text-danger" title="This field is required">*</span>
                </label>
                <div class="col-sm-10">
                   <input type="text" required maxlength="255" class="form-control" name="tour_code" id="tour_code">
                   <div class="text-danger"></div>
                   <p class="help-block"></p>
                </div>
             </div>
             <div class="form-group header-group-0" id="form-group-category-id" >
                <label class="control-label col-sm-2"> 
                    Category
                <span class="text-danger" title="This field is required">*</span>
                </label>
                <div class="col-sm-10">
                   <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">** Please select Category </option>
                       @foreach ($categories as $catId=>$catValue)
                        <option value="{{ $catId }}"> {{ $catValue }} </option>
                       @endforeach
                   </select> 
                   <div class="text-danger"></div>
                   <p class="help-block"></p>
                </div>
             </div>
             <div class="form-group header-group-0" id="form-group-title" >
                <label class="control-label col-sm-2"> 
                Tour Title
                <span class="text-danger" title="This field is required">*</span>
                </label>
                <div class="col-sm-10">
                   <input type="text" required  maxlength="255" class="form-control" name="title" id="title" onkeydown="gSlug()" onblur="gSlug()" >
                   <div class="text-danger"></div>
                   <p class="help-block"></p>
                </div>
             </div>
             <div class="form-group header-group-0" id="form-group-slug" style="">
                <label class="control-label col-sm-2"> 
                Tour Slug
                <span class="text-danger" title="This field is required">*</span>
                </label>
                <div class="col-sm-10">
                   <input type="text" required maxlength="255" class="form-control" name="slug" id="slug">
                   <div class="text-danger"></div>
                   <p class="help-block">Tour slug Auto Generate from tour title   </p>
                </div>
             </div>
            <div class="form-group header-group-0" id="form-group-ocation" style="">
                <label class="control-label col-sm-2"> 
                    Location
                    <span class="text-danger" title="This field is required">*</span>
                    </label>
                <div class="col-sm-10">
                    <input type="text" required maxlength="255" class="form-control" name="location" id="location">
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="form-group header-group-0" id="form-group-attractions" style="">
                    <label class="control-label col-sm-2"> 
                        Attractions
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="attractions" id="attractions">
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
            </div>
            <div class="form-group header-group-0" id="form-group-country" style="">
                    <label class="control-label col-sm-2"> 
                        Country
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <select name="country" id="country" class="form-control" required>
                                <option value="">** Please select country </option>
                                @foreach ($countries as $cuCode=>$cuValue)
                                <option value="{{ $cuCode }}"> {{ $cuValue }} </option>
                                @endforeach
                        </select> 
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
            </div>
            <div class="form-group header-group-0" id="form-group-province" style="">
                    <label class="control-label col-sm-2"> 
                        Province/State
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <select name="province" id="province" class="form-control" required>
                                <option value="">** Please select province/state </option>
                                @foreach ($categories as $catId=>$catValue)
                                <option value="{{ $catId }}"> {{ $catValue }} </option>
                                @endforeach
                        </select> 
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-departure_time" style="">
                    <label class="control-label col-sm-2"> 
                        Departure Time
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="departure_time" id="departure_time">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-return_time" style="">
                    <label class="control-label col-sm-2"> 
                        Return Time
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="return_time" id="return_time">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-return_point" style="">
                    <label class="control-label col-sm-2"> 
                        Return Point
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="return_point" id="return_point">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-tour_duration" style="">
                    <label class="control-label col-sm-2"> 
                        Tour Duration
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="tour_duration" id="tour_duration">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-overview" style="">
                    <label class="control-label col-sm-2"> 
                        Overview
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="overview" id="overview" required></textarea>
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-itinerary" style="">
                    <label class="control-label col-sm-2"> 
                        Itinerary
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                            <textarea class="form-control" name="itinerary" id="itinerary" required></textarea>
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-price_includes" style="">
                    <label class="control-label col-sm-2"> 
                        Price Includes
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="price_includes" id="price_includes">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-price_excludes" style="">
                    <label class="control-label col-sm-2"> 
                        Price Excludes
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="price_excludes" id="price_excludes">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-complementaries" style="">
                    <label class="control-label col-sm-2"> 
                        Complementary
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" name="complementaries" id="complementaries">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>

            <div class="form-group header-group-0" id="form-group-images" style="">
                    <label class="control-label col-sm-2"> 
                        Images
                        <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">
                        <input type="file" required maxlength="255" class="form-control" name="images" id="images">
                        <div class="text-danger"></div>
                        <p class="help-block"> </p>
                    </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer" style="background: #F5F5F5">
             <div class="form-group">
                <label class="control-label col-sm-2"></label>
                <div class="col-sm-10">
                <a href="{{ CRUDBooster::mainpath() }}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>
                   <input type="submit" name="submit" value="Save & Add More" class="btn btn-success">
                   <input type="submit" name="submit" value="Save" class="btn btn-success">
                </div>
             </div>
          </div>
          <!-- /.box-footer-->
       </form>
    </div>
 </div>
 <script>
     function gSlug() {
        document.getElementById('slug').value = document.getElementById('title').value
        .toLowerCase().replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-');
     }
 </script>    
@endsection
