@extends('master')
@section('content')
    <div class="col-12">
        <div class="card planned_task">
            <div class="header">
                <h2>Students Page</h2>
            </div>
            <div class="body">
                <ul class="nav nav-tabs">                                
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Personal Information</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#billings">Application Information</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences">Others</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="Settings">
                    <div class="body">
                        <h6>Profile Photo</h6>
                        <div class="media">
                            <div class="media-left m-r-15">
                                {{-- <img src="{{ asset('public/assets/images/user.png') }}" class="user-photo media-object" alt="User"> --}}
                                <img id="previewHolder" src="{{ asset('public/assets/images/user.png') }}" alt="Upload Photo" width="140px" height="140px" class=""/>
                            </div>
                            <div class="media-body">
                                <p>Upload your photo.
                                <br> <em>Image should be at least 140px x 140px</em></p>
                                <input type="file" name="photo" value="" id="photo" class="borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group"> 
                                    {!! Form::label('LRN #') !!}    
                                    {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!}       
                                </div>
                                <div class="form-group"> 
                                    {!! Form::label('Last Name') !!}    
                                    {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!}      
                                </div>
                                <div class="form-group"> 
                                    {!! Form::label('First Name') !!}                                               
                                    {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!} 
                                </div>
                                <div class="form-group"> 
                                    {!! Form::label('Middle Name') !!}                                               
                                    {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!} 
                                </div>
                                <div class="form-group"> 
                                    {!! Form::label('Ext Name') !!}                                               
                                    {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!} 
                                </div>
                                <div class="form-group"> 
                                    {!! Form::label('Address') !!}                                               
                                    {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!} 
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group"> 
                                     {!! Form::label('Email Address') !!}                                               
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group"> 
                                     {!! Form::label('Contact #') !!}                                               
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Gender') !!}
                                    <div>
                                        <label class="fancy-radio">
                                            <input name="gender2" value="male" type="radio" checked="checked">
                                            <span><i></i>Male</span>
                                        </label>
                                        <label class="fancy-radio">
                                            <input name="gender2" value="female" type="radio">
                                            <span><i></i>Female</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Birthdate') !!}
                                    {!! Form::date('',null,['class'=>'form-control form-control-sm']) !!}
                                </div>
                                <div class="form-group">    
                                    {!! Form::label('Birthplace') !!}                                            
                                    {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="billings">
                    
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group"> 
                                    {!! Form::label('Date of Application') !!}    
                                    {!! Form::date('',null,['class'=>'form-control form-control-sm']) !!}       
                                </div>
                                <div class="form-group"> 
                                    {!! Form::label('Applying for Grade Level') !!}    
                                    {!! Form::select('',[],null,['class'=>'select2 form-control form-control-sm','placeholder'=>'-- Select One --','style'=>'width:100%;']) !!}   
                                </div>
                                <div class="form-group"> 
                                    {!! Form::label('Please Select Section') !!}    
                                    {!! Form::select('',[],null,['class'=>'select2 form-control form-control-sm','placeholder'=>'-- Select One --','style'=>'width:100%;']) !!} 
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <h6>Requirements</h6>
                                <table class="table table-sm billing-history">
                                    <tbody>
                                        <tr>
                                            <td width="50px;">
                                                <label class="fancy-checkbox mt-2">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>Requirement Name</td>
                                        </tr>
                                        <tr>
                                            <td width="50px;">
                                                <label class="fancy-checkbox mt-2">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>Requirement Name</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="preferences">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <div class="body">
                                <h6>Student History</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Entry</button>
                <a href="#" class="btn btn-secondary"><i class="fa fa-home"></i> Back to Index</a>
            </div>
        </div>   
    </div>
@endsection
@push('js')
<script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#previewHolder').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      } else {
        alert('select a file to see preview');
        $('#previewHolder').attr('src', '');
      }
    }

    $("#photo").change(function() {
      readURL(this);
    });
</script>
@endpush