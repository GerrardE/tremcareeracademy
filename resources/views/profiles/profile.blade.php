@extends('layouts.appr')
@section('content')
@include('includes.navr')

    <div class="container">
        @if (Auth::guest())
            
        @else
            <h3>UPDATE PROFILE</h3>
              <hr>
            <div class="row"><!-- update profile -->
              <!-- left column -->
              <div class="col-md-2">
              </div>
              
              <!-- edit form column -->
              <div class="col-md-8">
                @include('includes.alert')
                
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-3 control-label">First name:</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="firstName" placeholder="Gerrard">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Other name:</label>
                        <div class="col-md-6">
                        <input class="form-control" type="text" name="otherName" placeholder="Nnanyelugo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Last name:</label>
                        <div class="col-md-6">
                        <input class="form-control" type="text" name="lastName" placeholder="Ezeugwa">
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="col-md-3 control-label">DOB:</label>
                        <div class="col-md-6">
                            <div class="bfh-datepicker" data-format="d-m-y" data-date="09-10-1994">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Email:</label>
                        <div class="col-md-6">
                        <input class="form-control" type="text" name="email" placeholder="gerrard@gmail.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Mobile Phone:</label>
                        <div class="col-md-6">
                            <input type="text" class="input-medium bfh-phone form-control" data-format="+234 (ddd) ddd-dddd" name="mPhone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Other Phone:</label>
                        <div class="col-md-6">
                            <input type="text" class="input-medium bfh-phone form-control" data-format="+234 (ddd) ddd-dddd" name="oPhone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Address</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="address" placeholder="#15 Ikpe Street">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">City</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="city" placeholder="Gbagada">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">State</label>
                        <div class="col-md-6 bfh-selectbox bfh-states" data-country="countries_states2">
                            <input type="hidden" value="" class="form-control">
                            <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                                <span class="bfh-selectbox-option input-medium" data-option=""></span>
                                <b class="caret"></b>
                            </a>
                            <div class="bfh-selectbox-options">
                                <div role="listbox">
                                    <ul role="option">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                    <label class="col-md-3 control-label">Country</label>
                    <div id="countries_states2" class="col-md-6 bfh-selectbox bfh-countries" data-country="NG">
                        <input type="hidden" value="" class="form-control">
                        <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                            <span class="bfh-selectbox-option input-medium" data-option=""></span>
                            <b class="caret"></b>
                        </a>
                        <div class="bfh-selectbox-options">
                        <div role="listbox">
                            <ul role="option">
                            </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nationality</label>
                        <div class="col-md-6">
                            <select name="nationality" id="nationality" value=" " class="form-control" required>
                                <option value="none" selected disabled><-- Please choose one --></option>
                                <option>Nigerian</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Course Of Study</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="course" placeholder="eg: Petroleum & Gas Engineering">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">School Attended</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="school" placeholder="eg: University Of Port Harcourt">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Date of Admission:</label>
                        <div class="col-md-6">
                            <div class="bfh-datepicker" data-format="d-m-y" data-date="01-10-2010" name="yoa" id="yoa">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Date of Graduation:</label>
                        <div class="col-md-6">
                            <div class="bfh-datepicker" data-format="d-m-y" data-date="01-10-2015" name="yog" id="yog">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">NYSC?</label>
                        <div class="col-md-6">
                            <select name="nysc" id="nysc" value="" class="form-control">
                                <option value="none" selected disabled>-- Please choose one --</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Date of Discharge:</label>
                        <div class="col-md-6">
                            <div class="bfh-datepicker" name="dod" id="dod">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Professional Certification(s)</label>
                        <div class="col-md-6">                     
                            <textarea class="form-control" rows="10"  id="certification" name="certification"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">CV</label>
                        <div class="col-md-6"> 
                            <h6>Maximum File Size: 1MB, (pdf)</h6>
                            <input type="file" class="form-control" name="cv" id="cv">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Professional Photo</label>
                        <div class="col-md-6"> 
                            <h6>Maximum File Size: 2MB, (jpeg, jpg)</h6>
                            <input type="file" class="form-control" name="pPhoto" id="pPhoto">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">How did you hear of TREM Career Academy (TCA)?</label>
                        <div class="col-md-6">
                            <select name="tca" id="tca" value="" class="form-control">
                                <option value="none" selected disabled>-- Please choose one --</option>
                                <option>TREM</option>
                                <option>Linkedin</option>
                                <option>Facebook</option>
                                <option>Twitter</option>
                                <option>TCA Job Board</option>
                                <option>TEP Magazine</option>
                                <option>Delegate Referral</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="button" class="btn btn-submit" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>
                </form>

              </div><!-- end of profile update -->

              <!-- left column -->
              <div class="col-md-2">
              </div>
          </div>
    
        <hr>
        @endif
    </div><!--/container-->

@endsection