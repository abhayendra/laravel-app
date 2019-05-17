@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    <div class='panel panel-default'>
        <div class='panel-heading'>Add Form</div>
        <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{!! CRUDBooster::mainpath('add-save') !!}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="box-body" id="parent-form-area">
                <div class="form-group header-group-0 " id="form-group-tour_code" style="">
                    <label class="control-label col-sm-2">
                        Tour Code <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" title="Tour Code" required maxlength="255" class="form-control" name="tour_code" id="tour_code">
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Category<span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="category_id" required name="category_id" >
                            <option value="">** Please select a category </option>
                            @foreach($categories as $catId=>$catName)
                             <option value="{!! $catId !!}">{!! $catName !!}</option>
                            @endforeach
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-title" style="">
                    <label class="control-label col-sm-2">
                        Title <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" title="Title" required class="form-control" name="title" id="title">
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="form-group peta header-group-0 ">
                    <label class="control-label col-sm-2">Tour Location
                        <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tour_location" required  name="tour_location">
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-attractions">
                    <label class="control-label col-sm-2">
                        Attractions
                        <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" title="Attractions" required maxlength class="form-control" name="attractions" id="attractions">
                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-country" >c
                    <label class="control-label col-sm-2">Country
                        <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="country"  required name="country">
                            <option value="">** Please select a country</option>
                            @foreach($countries as $countryId=>$countryName)
                                <option value="{!! $countryId !!}">{!! $countryName !!}</option>
                            @endforeach
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-province" >
                    <label class="control-label col-sm-2">Province
                        <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="province" required name="province">
                            <option value="">** Please select a Province</option>
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-tour_duration" style="">
                    <label class="control-label col-sm-2">
                        Tour Duration
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Tour Duration" required="" maxlength="255" class="form-control" name="tour_duration" id="tour_duration" value="">

                        <div class="text-danger"></div>
                        <p class="sssshelp-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-sell_price" style="">
                    <label class="control-label col-sm-2">
                        Sell Price
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Sell Price" required="" maxlength="255" class="form-control" name="sell_price" id="sell_price" value="">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-discount" style="">
                    <label class="control-label col-sm-2">
                        Discount
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Discount" required="" maxlength="255" class="form-control" name="discount" id="discount" value="">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group" id="form-group-overview" style="">
                    <label class="control-label col-sm-2">Overview</label>

                    <div class="col-sm-10">
                        <textarea id="textarea_overview" required name="overview" class="form-control" rows="5"></textarea>
                       <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group" id="form-group-itinerary" style="">
                    <label class="control-label col-sm-2">Itinerary</label>

                    <div class="col-sm-10">
                        <textarea id="textarea_itinerary" required name="itinerary" class="form-control" rows="5" ></textarea>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-departure_return_location" style="">
                    <label class="control-label col-sm-2">
                        Departure Return Location
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Departure Return Location" required="" maxlength="255" class="form-control" name="departure_return_location" id="departure_return_location" value="">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="bootstrap-timepicker">
                    <div class="bootstrap-timepicker-widget dropdown-menu">
                        <table>
                            <tbody>
                            <tr>
                                <td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td>
                                <td class="separator">&nbsp;</td>
                                <td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td>
                                <td class="separator">&nbsp;</td>
                                <td><a href="#" data-action="incrementSecond"><i class="glyphicon glyphicon-chevron-up"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="hour" class="bootstrap-timepicker-hour form-control" maxlength="2">
                                </td>
                                <td class="separator">:</td>
                                <td>
                                    <input type="text" name="minute" class="bootstrap-timepicker-minute form-control" maxlength="2">
                                </td>
                                <td class="separator">:</td>
                                <td>
                                    <input type="text" name="second" class="bootstrap-timepicker-second form-control" maxlength="2">
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td>
                                <td class="separator"></td>
                                <td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td>
                                <td class="separator">&nbsp;</td>
                                <td><a href="#" data-action="decrementSecond"><i class="glyphicon glyphicon-chevron-down"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group header-group-0 " id="form-group-departure_time" style="">
                        <label class="control-label col-sm-2">Departure Time
                            <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                <input type="text" title="Departure Time" required="" class="form-control notfocus timepicker" name="departure_time" id="departure_time" readonly="" value="">
                            </div>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-price_includes" style="">
                    <label class="control-label col-sm-2">
                        Price Includes
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Price Includes" required="" maxlength="5000" class="form-control" name="price_includes" id="price_includes" value="">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-price_excludes" style="">
                    <label class="control-label col-sm-2">
                        Price Excludes
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Price Excludes" required="" maxlength="5000" class="form-control" name="price_excludes" id="price_excludes" value="">
                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-complementaries" style="">
                    <label class="control-label col-sm-2">
                        Complementaries
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Complementaries" required="" maxlength="255" class="form-control" name="complementaries" id="complementaries" value="">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-complementaries" style="">
                        <label class="control-label col-sm-2">
                            Prices
                            <span class="text-danger" title="This field is required">*</span>
                        </label>
                    <div class="col-sm-10">


                        <table class="row" id="dataTable" width="100%" >
                            <tr>
                            <td>
                                <input type="checkbox" name="check">
                            </td>
                            <td>
                                <select name="traveler_type[]" class="form-control">
                                    <option> Select Traveler Type </option>
                                    @foreach($travelerType as $traveler)
                                    <option value="{!! $traveler->id !!}">{!! $traveler->name  !!} {!! $traveler->age_group !!}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="price[]" placeholder="Price" />
                            </td>
                            <td>
                                <input type="text" class="form-control" name="min[]" placeholder="No of Minimum Booking"/>
                            </td>
                                <td>
                                    <input type="text" class="form-control" name="max[]" placeholder="No of Maximum Booking"/>
                                </td>
                            </tr>
                        </table>

                        <div class="pull-right" style="padding-top: 10px; ">
                            <INPUT type="button" value="Add Row" class="btn btn-primary" onclick="addRow('dataTable')" />
                            <INPUT type="button" value="Delete Row" class="btn btn-danger" onclick="deleteRow('dataTable')" />
                        </div>
                   </div>

                </div>

                <div class="form-group header-group-0 " id="form-group-images" style="">
                    <label class="col-sm-2 control-label"> Cover Images
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="file" id="images" title="Images" required="" class="form-control" name="images">
                        <p class="help-block"></p>
                        <div class="text-danger"></div>
                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-images" style="">
                    <label class="col-sm-2 control-label"> Gallery Images
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="file" id="images" multiple title="Images" required="" class="form-control" name="gallery_images">
                        <p class="help-block">You can Select multiple Images</p>
                        <div class="text-danger"></div>
                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-departure_point" style="">
                    <label class="control-label col-sm-2">
                        Departure Point
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Departure Point" required="" class="form-control" name="departure_point" id="departure_point" value="">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-departure_return_location" style="">
                    <label class="control-label col-sm-2">
                        Return_location
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="text" title="Return_location" required="" class="form-control" name="departure_return_location" id="departure_return_location" value="">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-status" style="">
                    <label class="control-label col-sm-2">Status
                        <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-9">

                        <div class=" ">
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1"> Active
                            </label>
                        </div>
                        <div class=" ">
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0"> inactive
                            </label>
                        </div>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
            $(document).ready(function(){
                $("#country").change(function(){
                    var countryId = $(this).val();
                    var dataString = "country_id="+countryId;
                    $.ajax({
                        type: "GET",
                        url: "<?php echo url('admin/getProvince'); ?>",
                        data: dataString,
                        success: function(province){
                            $.each(province,function(){
                                var option = document.createElement('option');
                                $('#province').append($(option).attr('value',this).html(this));
                            });
                        }
                    });
                });
            });
    </script>

    <SCRIPT language="javascript">
        function addRow(tableID) {
            var table = document.getElementById(tableID);
            console.log(table);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) {
                var newcell	= row.insertCell(i);
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                        newcell.childNodes[0].value = "";
                        break;
                    case "checkbox":
                        newcell.childNodes[0].checked = false;
                        break;
                    case "select-one":
                        newcell.childNodes[0].selectedIndex = 0;
                        break;
                }
            }
        }
        function deleteRow(tableID) {
            try {
                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
                for(var i=0; i<rowCount; i++) {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if(null != chkbox && true == chkbox.checked) {
                        if(rowCount <= 1) {
                            alert("Cannot delete all the rows.");
                            break;
                        }
                        table.deleteRow(i);
                        rowCount--;
                        i--;
                    }
                }
            }catch(e) {
                alert(e);
            }
        }

    </SCRIPT>

    <style>
        table tr td {
            padding: 10px 10px ;
        }
    </style>
@endsection