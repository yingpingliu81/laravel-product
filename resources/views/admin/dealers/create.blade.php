@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create Dealers & Installers</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/dealers')}}" id="admin_dealers" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label >Name</label>
                                            <input type="text" id="name" name="name" required value="{{old('name')}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label>type</label>
                                            <select required class="form-control" name="type">
                                                <option value="" >Please select ...</option>
                                                @foreach($types as $index => $type)
                                                    <option {{old('type') === $index ? 'selected' : ''}} value="{{$index}}">{{$type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label >Address</label>
                                            <input type="text" id="autocomplete" name="address"  value="{{old('address')}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <input type="hidden" id="lat" name="lat" value="{{old('lat')}}">
                                    <input type="hidden" id="lng" name="lng" value="{{old('lng')}}">

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label >suburb</label>
                                            <input type="text" id="locality" name="suburb"  value="{{old('suburb')}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label >state</label>
                                            <input type="text" id="administrative_area_level_1" name="state"  value="{{old('state')}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label >phone</label>
                                            <input type="text" id="phone" name="phone"  value="{{old('phone')}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label >fax</label>
                                            <input type="text" id="fax" name="fax"  value="{{old('fax')}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label >mobile</label>
                                            <input type="text" id="mobile" name="mobile"  value="{{old('mobile')}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label >email</label>
                                            <input type="text" id="email" name="email"  value="{{old('email')}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label >website</label>
                                            <input type="text" id="website" name="website"  value="{{old('website')}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5 mb-5">
                                    @include('layouts.message')
                                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                                </div>

                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script type="application/javascript">

        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        var autocomplete;
        var componentForm = {
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
        };


        function initAutocomplete() {

            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode'], componentRestrictions: {country: ["au","nz"]}});
            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            document.getElementById('lat').value = place.geometry.location.lat();
            document.getElementById('lng').value = place.geometry.location.lng();

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

    </script>


    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyv-m-DnFy1HwSPqo6UVZY6taOtotsFgc&libraries=places&language=en&callback=initAutocomplete&sessiontoken =<?php echo uniqid(); ?>"
            async defer type="application/javascript"></script>

    <style>
        .row {
            margin-top: 30px;
        }
    </style>

@endsection
