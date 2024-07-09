@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

    <div class="row profile-body">
    <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Property</h6>
                        <form id="myForm" method="POST" action="{{ route('update.property') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $property->id }}">
                            <div class="card-body">
								<h6 class="card-title">Form Grid</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Property Name</label>
                                            <input type="text" name="property_name" class="form-control" value="{{ $property->property_name }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Property Status</label>
                                            <select name="property_status" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select Status</option>
                                                <option value="rent" {{ $property->property_status == 'rent' ? 'selected' : '' }}>For Rent</option>
                                                <option value="buy" {{ $property->property_status == 'buy' ? 'selected' : '' }}>For Buy</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Lowest Price</label>
                                            <input type="text" name="lowest_price" class="form-control" value="{{ $property->lowest_price }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Max Price</label>
                                            <input type="text" name="max_price" class="form-control" value="{{ $property->max_price }}">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Bedrooms</label>
                                            <input type="text" name="bedrooms" class="form-control" value="{{ $property->bedrooms }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Bathrooms</label>
                                            <input type="text" name="bathrooms" class="form-control" value="{{ $property->bathrooms }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Garage</label>
                                            <input type="text" name="garage" class="form-control" value="{{ $property->garage }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Garage Size</label>
                                            <input type="text" name="garage_size" class="form-control" value="{{ $property->garage_size }}">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" value="{{ $property->address }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control" value="{{ $property->city }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">State</label>
                                            <input type="text" name="state" class="form-control" value="{{ $property->state }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" name="postal_code" class="form-control" value="{{ $property->postal_code }}">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Property Size</label>
                                            <input type="text" name="property_size" class="form-control" value="{{ $property->property_size }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Property Video</label>
                                            <input type="text" name="property_video" class="form-control" value="{{ $property->property_video }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Neighborhood</label>
                                            <input type="text" name="neighborhood" class="form-control" value="{{ $property->neighborhood }}">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Latitude</label>
                                            <input type="text" name="latitude" class="form-control" value="{{ $property->latitude }}">
                                            <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Go here to get Latitude from address</a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Longitude</label>
                                            <input type="text" name="longitude" class="form-control" value="{{ $property->longitude }}">
                                            <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Go here to get Longitude from address</a>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Property Type</label>
                                            <select name="ptype_id" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select Type</option>
                                                @foreach ($propertyType as $pType)
                                                    <option value="{{ $pType->id }}" {{ $pType->id == $property->ptype_id ? 'selected' : '' }}>{{ $pType->type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Property Amenities</label>
                                            <select name="amenities_id[]" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                                @foreach ($amenities as $amenitie)
                                                    <option value="{{ $amenitie->id }}" {{ (in_array($amenitie->id, $property_amnt) ? 'selected' : '') }}>{{ $amenitie->amenities_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Agent</label>
                                            <select name="agent_id" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select Agent</option>
                                                @foreach ($activeAgent as $agent)
                                                    <option value="{{ $agent->id }}" {{ $agent->id == $property->agent_id ? 'selected' : '' }}>{{ $agent->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3 form-group">
                                            <label class="form-label">Short Description</label>
                                            <textarea name="short_descp" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $property->short_descp }}</textarea>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label">Long Description</label>
                                            <textarea name="long_descp" class="form-control" name="tinymce" id="tinymceExample" rows="10">{!! $property->long_descp !!}</textarea>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3 form-group">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="featured" value="1" class="form-check-input" id="checkInline1" {{ $property->featured == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="checkInline1">
                                                    Features Property
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="hot" value="1" class="form-check-input" id="checkInline" {{ $property->hot == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="checkInline">
                                                    Hot Property
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary submit">Save Changes</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- middle wrapper end -->
    </div>
</div>

{{-- /// Property Main Thumbnail Image Update /// --}}

<div class="page-content" style="margin-top: -35px;">
    <div class="row profile-body">
    <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Main Thumbnail Image</h6>
                        <form id="myForm" method="POST" action="{{ route('update.property.thumbnail') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $property->id }}">
                            <input type="hidden" name="old_img" value="{{ $property->property_thumbnail }}">
                            <div class="mb-3 row">
                                <div class="col-sm-6 form-group">
                                    <label class="form-label">Main Thumbnail</label>
                                    <input type="file" name="property_thumbnail" class="form-control" onchange="mainThumbUrl(this)">
                                    <img src="" id="mainThmb" style="margin-top: 10px;">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label class="form-label"></label>
                                    <img src="{{ asset($property->property_thumbnail) }}" style="width: 100px; height: 100px;">
                                </div>
                            </div><!-- Col -->
                            <button type="submit" class="btn btn-primary submit">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- /// End Property Main Thumbnail Image Update /// --}}

{{-- /// Property Multi Image Update /// --}}
<div class="page-content" style="margin-top: -35px;">
    <div class="row profile-body">
    <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Multiple Image</h6>
                        <form id="myForm" method="POST" action="{{ route('update.property.multiimage') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No. Serial</th>
                                        <th>Image</th>
                                        <th>Change Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($multiImage as $key => $img)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td class="py-1"><img src="{{ asset($img->photo_name) }}" style="width:50px; height: 50px;"></td>
                                        <td style="width: 100%; overflow: auto;">
                                            <input type="file" class="form-control" name="multi_img[{{ $img->id }}]" id="" style="width: 84%; float: left;">
                                            <input type="submit" class="px-4 form-control btn btn-primary" value="Update Image" style="width: 15%; float: right;">
                                        </td>
                                        <td><a href="{{ route('delete.property.multiimage',$img->id) }}" class="btn btn-danger" id="delete">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                        <form id="myForm" method="POST" action="{{ route('store.new.multiimage') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="imageid" value="{{ $property->id }}">
                            <table class="table table-striped">
                                <tbody>
                                    <tr style="width: 100%; overflow: auto;">
                                        <td style="width: 10.5%; text-align: right"><label class="form-label">Add New Image</label></td>
                                        <td style="width: 70.5%;">
                                            <input type="file" class="form-control" name="multi_img">
                                        </td>
                                        <td style="width: 20%; padding-left: 0px">
                                            <input type="submit" class="px-4 btn btn-info" value="Add Image">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- /// End Property Multi Image Update /// --}}

{{-- /// Facility Update /// --}}

<div class="page-content" style="margin-top: -35px;">
    <div class="row profile-body">
    <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Property Facility</h6>
                        <form id="myForm" method="POST" action="{{ route('update.property.facilities') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $property->id }}">
                            @foreach ($facilities as $item)
                            <div class="row add_item">
                                <div class="whole_extra_item_add" id="whole_extra_item_add">
                                    <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                                        <div class="container mt-2">
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="facility_name">Facilities</label>
                                                    <select name="facility_name[]" id="facility_name" class="form-control">
                                                            <option value="">Select Facility</option>
                                                            <option value="Hospital" {{ $item->facility_name == 'Hospital' ? 'selected' : '' }}>Hospital</option>
                                                            <option value="SuperMarket" {{ $item->facility_name == 'SuperMarket' ? 'selected' : '' }}>Super Market</option>
                                                            <option value="School" {{ $item->facility_name == 'School' ? 'selected' : '' }}>School</option>
                                                            <option value="Entertainment" {{ $item->facility_name == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
                                                            <option value="Pharmacy" {{ $item->facility_name == 'Pharmacy' ? 'selected' : '' }}>Pharmacy</option>
                                                            <option value="Airport" {{ $item->facility_name == 'Airport' ? 'selected' : '' }}>Airport</option>
                                                            <option value="Railways" {{ $item->facility_name == 'Railways' ? 'selected' : '' }}>Railways</option>
                                                            <option value="Bus Stop" {{ $item->facility_name == 'Bus Stop' ? 'selected' : '' }}>Bus Stop</option>
                                                            <option value="Beach" {{ $item->facility_name == 'Beach' ? 'selected' : '' }}>Beach</option>
                                                            <option value="Mall" {{ $item->facility_name == 'Mall' ? 'selected' : '' }}>Mall</option>
                                                            <option value="Bank" {{ $item->facility_name == 'Bank' ? 'selected' : '' }}>Bank</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="distance">Distance</label>
                                                    <input type="text" name="distance[]" id="distance" class="form-control" value="{{ $item->distance }}">
                                                </div>
                                                <div class="form-group col-md-4" style="padding-top: 20px">
                                                    <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Add</i></span>
                                                    <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle">Remove</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <br>
                            <button type="submit" class="btn btn-primary submit">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- /// End Facility Update /// --}}

<!--========== Start of add multiple class with ajax ==============-->
<div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="whole_extra_item_delete" id="whole_extra_item_delete">
            <div class="container mt-2">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="facility_name">Facilities</label>
                        <select name="facility_name[]" id="facility_name" class="form-control">
                                <option value="">Select Facility</option>
                                <option value="Hospital">Hospital</option>
                                <option value="SuperMarket">Super Market</option>
                                <option value="School">School</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Airport">Airport</option>
                                <option value="Railways">Railways</option>
                                <option value="Bus Stop">Bus Stop</option>
                                <option value="Beach">Beach</option>
                                <option value="Mall">Mall</option>
                                <option value="Bank">Bank</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="distance">Distance</label>
                        <input type="text" name="distance[]" id="distance" class="form-control" placeholder="Distance (Km)">
                    </div>
                    <div class="form-group col-md-4" style="padding-top: 20px">
                        <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Add</i></span>
                        <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle">Remove</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!---------------------------For Section--------------------------->
<script type="text/javascript">
$(document).ready(function(){
    var counter = 0;
    $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
    });
    $(document).on("click",".removeeventmore",function(event){
            $(this).closest("#whole_extra_item_delete").remove();
            counter -= 1
    });
});
</script>
<!--========== End of add multiple class with ajax ==============-->

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                property_name: {
                    required : true,
                },
                property_status: {
                    required : true,
                },
                lowest_price: {
                    required : true,
                },
                max_price: {
                    required : true,
                },
                property_thumbnail: {
                    required : true,
                },
                multi_img: {
                    required : true,
                },
                bedrooms: {
                    required : true,
                },
                bathrooms: {
                    required : true,
                },
                garage: {
                    required : true,
                },
                garage_size: {
                    required : true,
                },
                address: {
                    required : true,
                },
                city: {
                    required : true,
                },
                state: {
                    required : true,
                },
                postal_code: {
                    required : true,
                },
                property_size: {
                    required : true,
                },
                property_video: {
                    required : true,
                },
                neighborhood: {
                    required : true,
                },
                latitude: {
                    required : true,
                },
                longitude: {
                    required : true,
                },
                ptype_id: {
                    required : true,
                },
                amenities_id: {
                    required : true,
                },
                agent_id: {
                    required : true,
                },

            },
            messages :{
                property_name: {
                    required : 'Please Enter Property Name',
                },
                property_status: {
                    required : 'Please Select Property Status',
                },
                lowest_price: {
                    required : 'Please Enter Lowest Price',
                },
                max_price: {
                    required : 'Please Enter Max Price',
                },
                property_thumbnail: {
                    required : 'Please Select Property Thumbnail',
                },
                multi_img: {
                    required : 'Please Select Multiple Image',
                },
                bedrooms: {
                    required : 'Please Enter Bedrooms',
                },
                bathrooms: {
                    required : 'Please Enter Bathrooms',
                },
                garage: {
                    required : 'Please Enter Garage',
                },
                garage_size: {
                    required : 'Please Enter Garage Size',
                },
                address: {
                    required : 'Please Enter Address',
                },
                city: {
                    required : 'Please Enter City',
                },
                state: {
                    required : 'Please Enter State',
                },
                postal_code: {
                    required : 'Please Enter Postal Code',
                },
                property_size: {
                    required : 'Please Enter Property Size',
                },
                property_video: {
                    required : 'Please Enter Property Video',
                },
                neighborhood: {
                    required : 'Please Enter Neighborhood',
                },
                latitude: {
                    required : 'Please Enter Latitude',
                },
                longitude: {
                    required : 'Please Enter Longitude',
                },
                ptype_id: {
                    required : 'Please Select Property Type',
                },
                amenities_id: {
                    required : 'Please Select Amenities',
                },
                agent_id: {
                    required : 'Please Select Agent',
                },

            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>

<script type="text/javascript">
    function mainThumbUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThmb').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    $(document).ready(function(){
        $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
});

    </script>
@endsection
