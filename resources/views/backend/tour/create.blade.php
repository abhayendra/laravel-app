@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    <div class='panel panel-default'>
        <div class='panel-heading'>Add Form</div>
        <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="http://localhost/booktours/admin/tours/add-save">
            <input type="hidden" name="_token" value="l77f2LgG2iXLyWoJeBEvPzVDcQPxMj3a7ZwsuFcT">
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
                        Category Id <span class="text-danger" title="This field is required">*</span>
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
                <div class="form-group header-group-0 " id="form-group-country" >
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
                    <div class="col-sm-9">
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
                        <p class="help-block"></p>

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
                        <textarea id="textarea_overview" required="" name="overview" class="form-control" rows="5" style="display: none;"></textarea>
                        <div class="note-editor note-frame panel panel-default">
                            <div class="note-dropzone">
                                <div class="note-dropzone-message"></div>
                            </div>
                            <div class="note-toolbar panel-heading">
                                <div class="note-btn-group btn-group note-style">
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Style"><i class="note-icon-magic"></i> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu dropdown-style">
                                            <li>
                                                <a href="#" data-value="p">
                                                    <p>p</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-value="blockquote">
                                                    <blockquote>blockquote</blockquote>
                                                </a>
                                            </li>
                                            <li><a href="#" data-value="pre"><pre>pre</pre></a></li>
                                            <li><a href="#" data-value="h1"><h1>h1</h1></a></li>
                                            <li><a href="#" data-value="h2"><h2>h2</h2></a></li>
                                            <li><a href="#" data-value="h3"><h3>h3</h3></a></li>
                                            <li><a href="#" data-value="h4"><h4>h4</h4></a></li>
                                            <li><a href="#" data-value="h5"><h5>h5</h5></a></li>
                                            <li><a href="#" data-value="h6"><h6>h6</h6></a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-font">
                                    <button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" title="" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" title="" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button>
                                </div>
                                <div class="note-btn-group btn-group note-fontname">
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Family"><span class="note-current-fontname">Source Sans Pro</span> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu note-check dropdown-fontname">
                                            <li><a href="#" data-value="Arial" class=""><i class="note-icon-check"></i> <span style="font-family:Arial">Arial</span></a></li>
                                            <li><a href="#" data-value="Arial Black" class=""><i class="note-icon-check"></i> <span style="font-family:Arial Black">Arial Black</span></a></li>
                                            <li><a href="#" data-value="Comic Sans MS" class=""><i class="note-icon-check"></i> <span style="font-family:Comic Sans MS">Comic Sans MS</span></a></li>
                                            <li><a href="#" data-value="Courier New" class=""><i class="note-icon-check"></i> <span style="font-family:Courier New">Courier New</span></a></li>
                                            <li><a href="#" data-value="Helvetica" class=""><i class="note-icon-check"></i> <span style="font-family:Helvetica">Helvetica</span></a></li>
                                            <li><a href="#" data-value="Impact" class=""><i class="note-icon-check"></i> <span style="font-family:Impact">Impact</span></a></li>
                                            <li><a href="#" data-value="Tahoma" class=""><i class="note-icon-check"></i> <span style="font-family:Tahoma">Tahoma</span></a></li>
                                            <li><a href="#" data-value="Times New Roman" class=""><i class="note-icon-check"></i> <span style="font-family:Times New Roman">Times New Roman</span></a></li>
                                            <li><a href="#" data-value="Verdana" class=""><i class="note-icon-check"></i> <span style="font-family:Verdana">Verdana</span></a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-color">
                                    <div class="note-btn-group btn-group note-color">
                                        <button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" title="" data-original-title="Recent Color" data-backcolor="#FFFF00"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0);"></i></button>
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="More Color"><span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu">
                                            <li>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Background Color</div>
                                                    <div>
                                                        <button type="button" class="note-color-reset btn btn-default" data-event="backColor" data-value="inherit">Transparent </button>
                                                    </div>
                                                    <div class="note-holder" data-event="backColor">
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Foreground Color</div>
                                                    <div>
                                                        <button type="button" class="note-color-reset btn btn-default" data-event="removeFormat" data-value="foreColor">Reset to default </button>
                                                    </div>
                                                    <div class="note-holder" data-event="foreColor">
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-para">
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button>
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Paragraph"><i class="note-icon-align-left"></i> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu">
                                            <div class="note-btn-group btn-group note-align">
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button>
                                            </div>
                                            <div class="note-btn-group btn-group note-list">
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-table">
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Table"><i class="note-icon-table"></i> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu note-table">
                                            <div class="note-dimension-picker">
                                                <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                                                <div class="note-dimension-picker-highlighted"></div>
                                                <div class="note-dimension-picker-unhighlighted"></div>
                                            </div>
                                            <div class="note-dimension-display">1 x 1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-insert">
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Link"><i class="note-icon-link"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Picture"><i class="note-icon-picture"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Video"><i class="note-icon-video"></i></button>
                                </div>
                                <div class="note-btn-group btn-group note-view">
                                    <button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen" title="" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm btn-codeview" title="" data-original-title="Code View"><i class="note-icon-code"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Help"><i class="note-icon-question"></i></button>
                                </div>
                            </div>
                            <div class="note-editing-area">
                                <div class="note-handle">
                                    <div class="note-control-selection">
                                        <div class="note-control-selection-bg"></div>
                                        <div class="note-control-holder note-control-nw"></div>
                                        <div class="note-control-holder note-control-ne"></div>
                                        <div class="note-control-holder note-control-sw"></div>
                                        <div class="note-control-sizing note-control-se"></div>
                                        <div class="note-control-selection-info"></div>
                                    </div>
                                </div>
                                <textarea class="note-codable"></textarea>
                                <div class="note-editable panel-body" contenteditable="true" style="height: 357px;">
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <div class="note-statusbar">
                                <div class="note-resizebar">
                                    <div class="note-icon-bar"></div>
                                    <div class="note-icon-bar"></div>
                                    <div class="note-icon-bar"></div>
                                </div>
                            </div>
                            <div class="modal link-dialog" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Insert Link</h4> </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Text to display</label>
                                                <input class="note-link-text form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>To what URL should this link go?</label>
                                                <input class="note-link-url form-control" type="text" value="http://">
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked=""> Open in new window</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button href="#" class="btn btn-primary note-link-btn disabled" disabled="">Insert Link</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Insert Image</h4> </div>
                                        <div class="modal-body">
                                            <div class="form-group note-group-select-from-files">
                                                <label>Select from files</label>
                                                <input class="note-image-input form-control" type="file" name="files" accept="image/*" multiple="multiple">
                                            </div>
                                            <div class="form-group" style="overflow:auto;">
                                                <label>Image URL</label>
                                                <input class="note-image-url form-control col-md-12" type="text">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Insert Video</h4> </div>
                                        <div class="modal-body">
                                            <div class="form-group row-fluid">
                                                <label>Video URL? <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label>
                                                <input class="note-video-url form-control span12" type="text">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button href="#" class="btn btn-primary note-video-btn disabled" disabled="">Insert Video</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Help</h4> </div>
                                        <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div>
                                        <div class="modal-footer">
                                            <p class="text-center"><a href="//summernote.org/" target="_blank">Summernote 0.8.1</a> · <a href="//github.com/summernote/summernote" target="_blank">Project</a> · <a href="//github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group" id="form-group-itinerary" style="">
                    <label class="control-label col-sm-2">Itinerary</label>

                    <div class="col-sm-10">
                        <textarea id="textarea_itinerary" required="" name="itinerary" class="form-control" rows="5" style="display: none;"></textarea>
                        <div class="note-editor note-frame panel panel-default">
                            <div class="note-dropzone">
                                <div class="note-dropzone-message"></div>
                            </div>
                            <div class="note-toolbar panel-heading">
                                <div class="note-btn-group btn-group note-style">
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Style"><i class="note-icon-magic"></i> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu dropdown-style">
                                            <li>
                                                <a href="#" data-value="p">
                                                    <p>p</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-value="blockquote">
                                                    <blockquote>blockquote</blockquote>
                                                </a>
                                            </li>
                                            <li><a href="#" data-value="pre"><pre>pre</pre></a></li>
                                            <li><a href="#" data-value="h1"><h1>h1</h1></a></li>
                                            <li><a href="#" data-value="h2"><h2>h2</h2></a></li>
                                            <li><a href="#" data-value="h3"><h3>h3</h3></a></li>
                                            <li><a href="#" data-value="h4"><h4>h4</h4></a></li>
                                            <li><a href="#" data-value="h5"><h5>h5</h5></a></li>
                                            <li><a href="#" data-value="h6"><h6>h6</h6></a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-font">
                                    <button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" title="" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" title="" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button>
                                </div>
                                <div class="note-btn-group btn-group note-fontname">
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Family"><span class="note-current-fontname">Source Sans Pro</span> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu note-check dropdown-fontname">
                                            <li><a href="#" data-value="Arial" class=""><i class="note-icon-check"></i> <span style="font-family:Arial">Arial</span></a></li>
                                            <li><a href="#" data-value="Arial Black" class=""><i class="note-icon-check"></i> <span style="font-family:Arial Black">Arial Black</span></a></li>
                                            <li><a href="#" data-value="Comic Sans MS" class=""><i class="note-icon-check"></i> <span style="font-family:Comic Sans MS">Comic Sans MS</span></a></li>
                                            <li><a href="#" data-value="Courier New" class=""><i class="note-icon-check"></i> <span style="font-family:Courier New">Courier New</span></a></li>
                                            <li><a href="#" data-value="Helvetica" class=""><i class="note-icon-check"></i> <span style="font-family:Helvetica">Helvetica</span></a></li>
                                            <li><a href="#" data-value="Impact" class=""><i class="note-icon-check"></i> <span style="font-family:Impact">Impact</span></a></li>
                                            <li><a href="#" data-value="Tahoma" class=""><i class="note-icon-check"></i> <span style="font-family:Tahoma">Tahoma</span></a></li>
                                            <li><a href="#" data-value="Times New Roman" class=""><i class="note-icon-check"></i> <span style="font-family:Times New Roman">Times New Roman</span></a></li>
                                            <li><a href="#" data-value="Verdana" class=""><i class="note-icon-check"></i> <span style="font-family:Verdana">Verdana</span></a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-color">
                                    <div class="note-btn-group btn-group note-color">
                                        <button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" title="" data-original-title="Recent Color" data-backcolor="#FFFF00"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0);"></i></button>
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="More Color"><span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu">
                                            <li>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Background Color</div>
                                                    <div>
                                                        <button type="button" class="note-color-reset btn btn-default" data-event="backColor" data-value="inherit">Transparent </button>
                                                    </div>
                                                    <div class="note-holder" data-event="backColor">
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <div class="note-palette-title">Foreground Color</div>
                                                    <div>
                                                        <button type="button" class="note-color-reset btn btn-default" data-event="removeFormat" data-value="foreColor">Reset to default </button>
                                                    </div>
                                                    <div class="note-holder" data-event="foreColor">
                                                        <div class="note-color-palette">
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" data-toggle="button" tabindex="-1" data-original-title="#000000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" data-toggle="button" tabindex="-1" data-original-title="#424242"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" data-toggle="button" tabindex="-1" data-original-title="#636363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1" data-original-title="#9C9C94"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#CEC6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1" data-original-title="#EFEFEF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#F7F7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1" data-original-title="#FF0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1" data-original-title="#FF9C00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1" data-original-title="#FFFF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1" data-original-title="#00FF00"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1" data-original-title="#00FFFF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1" data-original-title="#0000FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#9C00FF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1" data-original-title="#FF00FF"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#F7C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE7CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1" data-original-title="#FFEFC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1" data-original-title="#D6EFD6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEDEE7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1" data-original-title="#CEE7F7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1" data-original-title="#D6D6E7"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1" data-original-title="#E7D6DE"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1" data-original-title="#E79C9C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFC69C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1" data-original-title="#FFE79C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1" data-original-title="#B5D6A5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1" data-original-title="#A5C6CE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1" data-original-title="#9CC6EF"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1" data-original-title="#B5A5D6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1" data-original-title="#D6A5BD"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1" data-original-title="#E76363"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1" data-original-title="#F7AD6B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1" data-original-title="#FFD663"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1" data-original-title="#94BD7B"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1" data-original-title="#73A5AD"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1" data-original-title="#6BADDE"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1" data-original-title="#8C7BC6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1" data-original-title="#C67BA5"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1" data-original-title="#CE0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1" data-original-title="#E79439"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1" data-original-title="#EFC631"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1" data-original-title="#6BA54A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1" data-original-title="#4A7B8C"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1" data-original-title="#3984C6"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1" data-original-title="#634AA5"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1" data-original-title="#A54A7B"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1" data-original-title="#9C0000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1" data-original-title="#B56308"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1" data-original-title="#BD9400"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1" data-original-title="#397B21"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1" data-original-title="#104A5A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" data-toggle="button" tabindex="-1" data-original-title="#085294"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" data-toggle="button" tabindex="-1" data-original-title="#311873"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" data-toggle="button" tabindex="-1" data-original-title="#731842"></button>
                                                            </div>
                                                            <div class="note-color-row">
                                                                <button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" data-toggle="button" tabindex="-1" data-original-title="#630000"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1" data-original-title="#7B3900"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" data-toggle="button" tabindex="-1" data-original-title="#846300"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" data-toggle="button" tabindex="-1" data-original-title="#295218"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" data-toggle="button" tabindex="-1" data-original-title="#083139"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" data-toggle="button" tabindex="-1" data-original-title="#003163"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1" data-original-title="#21104A"></button>
                                                                <button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1" data-original-title="#4A1031"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-para">
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button>
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Paragraph"><i class="note-icon-align-left"></i> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu">
                                            <div class="note-btn-group btn-group note-align">
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button>
                                            </div>
                                            <div class="note-btn-group btn-group note-list">
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button>
                                                <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-table">
                                    <div class="note-btn-group btn-group">
                                        <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Table"><i class="note-icon-table"></i> <span class="note-icon-caret"></span></button>
                                        <div class="dropdown-menu note-table">
                                            <div class="note-dimension-picker">
                                                <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                                                <div class="note-dimension-picker-highlighted"></div>
                                                <div class="note-dimension-picker-unhighlighted"></div>
                                            </div>
                                            <div class="note-dimension-display">1 x 1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-btn-group btn-group note-insert">
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Link"><i class="note-icon-link"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Picture"><i class="note-icon-picture"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Video"><i class="note-icon-video"></i></button>
                                </div>
                                <div class="note-btn-group btn-group note-view">
                                    <button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen" title="" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm btn-codeview" title="" data-original-title="Code View"><i class="note-icon-code"></i></button>
                                    <button type="button" class="note-btn btn btn-default btn-sm" title="" data-original-title="Help"><i class="note-icon-question"></i></button>
                                </div>
                            </div>
                            <div class="note-editing-area">
                                <div class="note-handle">
                                    <div class="note-control-selection">
                                        <div class="note-control-selection-bg"></div>
                                        <div class="note-control-holder note-control-nw"></div>
                                        <div class="note-control-holder note-control-ne"></div>
                                        <div class="note-control-holder note-control-sw"></div>
                                        <div class="note-control-sizing note-control-se"></div>
                                        <div class="note-control-selection-info"></div>
                                    </div>
                                </div>
                                <textarea class="note-codable"></textarea>
                                <div class="note-editable panel-body" contenteditable="true" style="height: 357px;">
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <div class="note-statusbar">
                                <div class="note-resizebar">
                                    <div class="note-icon-bar"></div>
                                    <div class="note-icon-bar"></div>
                                    <div class="note-icon-bar"></div>
                                </div>
                            </div>
                            <div class="modal link-dialog" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Insert Link</h4> </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Text to display</label>
                                                <input class="note-link-text form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>To what URL should this link go?</label>
                                                <input class="note-link-url form-control" type="text" value="http://">
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked=""> Open in new window</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button href="#" class="btn btn-primary note-link-btn disabled" disabled="">Insert Link</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Insert Image</h4> </div>
                                        <div class="modal-body">
                                            <div class="form-group note-group-select-from-files">
                                                <label>Select from files</label>
                                                <input class="note-image-input form-control" type="file" name="files" accept="image/*" multiple="multiple">
                                            </div>
                                            <div class="form-group" style="overflow:auto;">
                                                <label>Image URL</label>
                                                <input class="note-image-url form-control col-md-12" type="text">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Insert Video</h4> </div>
                                        <div class="modal-body">
                                            <div class="form-group row-fluid">
                                                <label>Video URL? <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label>
                                                <input class="note-video-url form-control span12" type="text">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button href="#" class="btn btn-primary note-video-btn disabled" disabled="">Insert Video</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" aria-hidden="false" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Help</h4> </div>
                                        <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                            <div class="help-list-item"></div>
                                            <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div>
                                        <div class="modal-footer">
                                            <p class="text-center"><a href="//summernote.org/" target="_blank">Summernote 0.8.1</a> · <a href="//github.com/summernote/summernote" target="_blank">Project</a> · <a href="//github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />

                    <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />

                    <TABLE id="dataTable" width="100%" border="1">
                        <TR>
                            <TD style="border: none">
                                <SELECT name="country" class="form-control">
                                    <OPTION value="in">Adult</OPTION>
                                    <OPTION value="de">children</OPTION>
                                    <OPTION value="fr">Student</OPTION>
                                </SELECT>
                            </TD>
                            <TD><INPUT type="text" class="form-control" name="txt"/></TD>
                        </TR>
                    </TABLE>
                    </div>

                </div>

                <div class="form-group header-group-0 " id="form-group-images" style="">
                    <label class="col-sm-2 control-label">Images
                        <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                        <input type="file" id="images" title="Images" required="" class="form-control" name="images">
                        <p class="help-block"></p>
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
@endsection