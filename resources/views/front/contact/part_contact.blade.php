<div class="row">
    <div class="col-sm-10 offset-sm-1 mt-5">
        <h2 class="text-center m-5">Send us a message</h2>
        @include('layouts.message')
        <form method="post" action="{{url('/contact')}}">
            {{csrf_field()}}
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <label class="form-label" for="inputEmail4">Name*</label>
                    <input type="text" name="name" value="{{old('name')}}" required class="form-control">
                </div>
                <input type="hidden" name="source" value="{{$source}}" required class="form-control">

                <div class="form-group col-md-6">
                    <label class="form-label" for="inputPassword4">Company</label>
                    <input type="text" name="company" value="{{old('company')}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Email Address*</label>
                    <input type="email" name="email" value="{{old('email')}}" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Phone </label>
                    <input type="text" name="phone"  value="{{old('phone')}}" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <label class="form-label">Your Comments:* </label>
                    <textarea class="form-control" required name="message"
                              rows="5">{{old('message')}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-captcha mb-3 mt-4">
                        {!! htmlFormSnippet() !!}
                    </div>

                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
