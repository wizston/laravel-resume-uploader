@extends('frontend.layouts.master')

@section('content')
    <div class="jumbotron">
        <h1>Resume Uploader</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p><a class="btn btn-primary btn-lg">Learn more</a></p>
    </div>
    <div class="col-md-12"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
        {!! Form::open(['url' => url('submitResume'), 'files' => true]) !!}

        <div class="login-panel panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">PERSONAL DETAILS</h3>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="col-md-6">
                        <label>Name*
                        </label>
                        <div class="form-group">
                            {!! Form::input('name', 'name', null, ['class' => 'form-control', 'required', 'placeholder' => trans('validation.attributes.frontend.name')]) !!}
                        </div>
                        <label>Phone Number*
                        </label>
                        <div class="form-group">
                            {!! Form::input('phone', 'phone', null, ['class' => 'form-control', 'required', 'placeholder' => "Mobile Number"]) !!}
                        </div>
                        <label>Address*
                        </label>
                        <div class="form-group">
                            {!! Form::input('address', 'address', null, ['class' => 'form-control', 'required', 'placeholder' => "Address"]) !!}
                        </div>

                        <label>Gender</label>
                        <div class="radio">

                            <label class="radio-inline">{!! Form::radio('gender', 'required', 'male') !!}Male</label>
                            <label class="radio-inline">{!! Form::radio('gender', 'required', 'female') !!}Female</label>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">State:</label>
                            <select class="form-control" id="state"  name="state"  required>
                                <option value="">Select State</option>
                                <option value="1">Abia</option>
                                <option value="2">Adamawa</option>
                                <option value="3">Akwa Ibom</option>
                                <option value="4">Anambra</option>
                                <option value="5">Bauchi</option>
                                <option value="6">Bayelsa</option>
                                <option value="7">Benue</option>
                                <option value="8">Borno</option>
                                <option value="9">Cross River</option>
                                <option value="10">Delta</option>
                                <option value="11">Ebonyi</option>
                                <option value="12">Edo</option>
                                <option value="13">Ekiti</option>
                                <option value="14">Enugu</option>
                                <option value="15">Gombe</option>
                                <option value="16">Imo</option>
                                <option value="17">Jigawa</option>
                                <option value="18">Kaduna</option>
                                <option value="19">Kano</option>
                                <option value="20">Katsina</option>
                                <option value="21">Kebbi</option>
                                <option value="22">Kogi</option>
                                <option value="23">Kwara</option>
                                <option value="24">Lagos</option>
                                <option value="25">Nassarawa</option>
                                <option value="26">Niger</option>
                                <option value="27">Ogun</option>
                                <option value="28">Ondo</option>
                                <option value="29">Osun</option>
                                <option value="30">Oyo</option>
                                <option value="31">Plateau</option>
                                <option value="32">Rivers</option>
                                <option value="33">Sokoto</option>
                                <option value="34">Taraba</option>
                                <option value="35">Yobe</option>
                                <option value="36">Zamfara</option>
                                <option value="37">FCT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="local_government">LGA:</label>
                            <select class="form-control" required name="local_government" id="local_government">
                                <option value="ikeja">Ikeja</option>
                            </select>
                        </div>
                        <div>
                            <label for="date_of_birth">DOB</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" required class="form-control" placeholder="01-01-1900">
                        </div>
                        <br/>
                        <div class="form-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                   <span class="btn-file">
                                       <span class="fileupload-new">Upload your resume</span>
                                       {!! Form::file('file',  ['required', 'accept' => '.pdf,.doc']) !!}
                                       <small class="text-warning">Format: DOC and PDF format only</small>
                                   </span>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-lg btn-success" id="formsubmit">Submit
            </button>
        </div>
        {!! Form::close() !!}
    </div>

@endsection

@section('after-scripts-end')
    <script>
        //Being injected from FrontendController
        console.log(test);
    </script>
@stop