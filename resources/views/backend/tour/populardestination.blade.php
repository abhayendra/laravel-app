<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    <!-- Your html goes here -->
    <div class='panel panel-default'>
        <div class='panel-heading'>Add Form</div>
        <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{!! CRUDBooster::mainpath('add-save') !!}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="box-body" id="parent-form-area">
                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Destinations <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="destinations" class="form-control" required>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Location <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="location" required name="location" >
                            <option value="">** Please select Location </option>
                            @foreach($tourLocation as $location)
                                <option value="{!! $location->location !!}">{!! $location->location !!} ({!! $location->tour_count !!})</option>
                            @endforeach
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Position <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="position" required name="position" >
                            <option value="">** Please select Position </option>
                            @for($i=1; $i<=8; $i++)
                                <option value="{!! $i !!}">{!! $i !!}</option>
                            @endfor
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Image <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" required>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer" style="background: #F5F5F5">
                <div class="form-group">
                    <label class="control-label col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="http://localhost/booktours/admin/tours" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>
                        <input type="submit" name="submit" value="Save &amp; Add More" class="btn btn-success">
                        <input type="submit" name="submit" value="Save" class="btn btn-success">
                    </div>
                </div>
            </div>
            <!-- /.box-footer-->
        </form>
    </div>
@endsection
