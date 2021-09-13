@extends('layouts.app')

@section('title', 'Solar Ventilation Fan Warranty | Roof Insulation – SolarKing ')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')


@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Warranty
            </h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Warranty
                </a></h5>
        </div>
    </div>
    <section class="section">
        <div class="jumbotron">
            <div class="container">
                <h2 class="text-center">SatKing Warranty</h2>
                <p class="lead">Here at SolarKing we back our products! All SolarKing products come with a warranty. For further inquiries please contact SolarKing at <a href="mailTo:support@solarking.net.au">support@solarking.net.au</a> or call <a href="tel:1300139255">1300 139 255.</a>
                </p>
                <h4 class="text-center">To better service you, please <strong>register</strong></h4>
                @include('layouts.message')
                <div class="text-center mt-5">
                    <button class="btn btn-customize2" data-bs-toggle="modal"
                            data-bs-target="#warranty-registration">Warranty Registration
                    </button>
                </div>
            </div>
            <div class="container">
                <div class="modal fade" id="warranty-registration" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1><span class="fa fa-lock"></span> Warranty Registration</h1>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('support/warranty-registration')}}"  method="post" enctype="multipart/form-data" class="clearfix">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            {{csrf_field()}}

                                            <div class="mb-3">
                                                <label class="form-label" for="">Name *</label>
                                                <input maxlength="255"  name="name" id="" class="form-control"
                                                       required="required" type="text"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="EmailAddress">Email Address *</label>
                                                <input name="email" id="EmailAddress" class="form-control"
                                                       maxlength="255" required="required" type="text"/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="CellPhone">Phone Number </label>
                                                <input name="phone" id="CellPhone" class="form-control" maxlength="255"
                                                       type="text"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="">Address</label>
                                                <input type="text" maxlength="4000" name="address" id=""
                                                       class="form-control"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="">Product Name </label>
                                                <input type="text" maxlength="4000" name="product_name" id=""
                                                       class="form-control"/>
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label" for="">Serial Number</label>
                                                <input type="text" maxlength="4000" name="model_number" id=""
                                                       class="form-control"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="">Place of Purchase</label>
                                                <input type="text" maxlength="4000" name="purchase_location" id=""
                                                       class="form-control"/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="">Date-of-purchase</label>
                                                <input type="date" data-provide="datepicker" name="purchase_at" id="" class="form-control"/>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 warranty-card">
                                            <label class="form-label">Age Group</label><br/>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="age_group" id="_0"
                                                       value="under 18"/>under 18
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="age_group" id="_1"
                                                       value="18-24"/>18-24
                                            </div>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="age_group" id="_2"
                                                       value="25-34"/>25-34</label><br/>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="age_group" id="_3"
                                                       value="35-44"/>35-44
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="age_group" id="_4"
                                                       value="45-54"/>45-54
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="age_group" id="_5"
                                                       value="over 55"/>over 55
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="">Occupation</label><br/>
                                                <select name="occupation" id="" class="form-control">
                                                    <option value=" ">-- Please select --</option>
                                                    <option value="Architect">Architect</option>
                                                    <option value="Accountant">Accountant</option>
                                                    <option value="Banker">Banker</option>
                                                    <option value="Consultant">Consultant</option>
                                                    <option value="Doctor">Doctor</option>
                                                    <option value="Engineer">Engineer</option>
                                                    <option value="Entrepreneur">Entrepreneur</option>
                                                    <option value="Government">Government</option>
                                                    <option value="Home Maker">Home Maker</option>
                                                    <option value="IT">IT</option>
                                                    <option value="Marketing">Marketing</option>
                                                    <option value="Sales/Service">Sales/Service</option>
                                                    <option value="Teacher">Teacher</option>
                                                    <option value="Retiree">Retiree</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <br/>
                                            <div class="form-label">Which of the following best describes the reasons
                                                for purchasing SatKing
                                                Promax?
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="reasons[]" id="_0" value="Included in Kit"/>Included
                                                in Kit
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="reasons[]" id="_1" value="Price"/>Price
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="reasons[]" id="_2" value="Compact Size"/>Compact
                                                Size
                                            </div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="reasons[]"
                                                                                               id="_3"
                                                                                               value="Features"/>Features</div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="reasons[]"
                                                                                               id="_4"
                                                                                               value="Brand Reputation"/>Brand
                                                Reputation</div>


                                            <div class="form-label">How did you hear about this product?</div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="way_to_hear[]"
                                                                                               id="_0"
                                                                                               value="Magazine"/>Magazine</div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="way_to_hear[]"
                                                                                               id="_1"
                                                                                               value="Salesperson"/>Salesperson</div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="way_to_hear[]"
                                                                                               id="_2"
                                                                                               value="Online Store"/>Online
                                                Store</div><br/>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="way_to_hear[]"
                                                                                               id="_3"
                                                                                               value="SatKing Website"/>SatKing
                                                Website</div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="way_to_hear[]"
                                                                                               id="_4"
                                                                                               value="TV advert"/>TV
                                                advert</div>
                                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="way_to_hear[]"
                                                                                               id="_5" value="Friends"/>Friends</div><br/>

                                            <div class="form-label">How often do you travel?</div>
                                            <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="travel_frequency" id="_0"
                                                        value="Once a year"/>Once
                                                a year</div>
                                            <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="travel_frequency" id="_1"
                                                        value="Twice a year"/>Twice a year</div>
                                            <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="travel_frequency" id="_2"
                                                        value="Quarterly"/>Quarterly</div><br/>
                                            <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="travel_frequency" id="_3"
                                                        value="Monthly"/>Monthly</div>
                                            <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="travel_frequency" id="_4"
                                                        value="Permanently"/>Permanently</div>
                                            <div class="form-check form-check-inline mb-3"><input
                                                        class="form-check-input" type="radio" name="travel_frequency" id="_5"
                                                        value="Never"/>Never</div>


                                            {!! htmlFormSnippet() !!}


                                            <div class="mt-3">
                                                <input value="Submit"
                                                       class="btn btn-primary btn-lg" type="submit"/>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger btn-default pull-left" data-bs-dismiss="modal">
                                    <span class="fa fa-remove"></span> Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{!! htmlScriptTagJsApi() !!}

