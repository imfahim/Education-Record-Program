@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Professionals Create</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form validation <small>sub title</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate method="POST">
                      {{csrf_field()}}
                      <span class="section">Professionals Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fname" name="fname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" placeholder="first name e.g Jon" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lname" name="lname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" placeholder="first name e.g Jon" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Profession</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="profession">
                            <option value="-1">Choose option</option>
                            <option value="Principal/Director">Principal/Director</option>
                            <option value="Special Educator">Special Educator</option>
                            <option value="Occupational Therapist">Occupational Therapist</option>
                            <option value="Speech Therapist">Speech Therapist</option>
                            <option value="Physiotherapist">Physiotherapist</option>
                            <option value="Art Teacher">Art Teacher</option>
                            <option value="Dance Teacher">Dance Teacher</option>
                            <option value="Computer Teacher">Computer Teacher</option>
                            <option value="Other">Other</option>
                          </select>
                          <input name="prof_other" class="form-control col-md-7 col-xs-12" placeholder="If Other.." type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Qualifications</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="qualifications">
                            <option value="-1">Choose option</option>
                            <option value="BSc.">BSc.</option>
                            <option value="B.A">B.A</option>
                            <option value="B.Com">B.Com</option>
                            <option value="B.Ed. (Spl.Ed)">B.Ed. (Spl.Ed)</option>
                            <option value="B.Ed.">B.Ed.</option>
                            <option value="C.C (Certificate)">C.C (Certificate)</option>
                            <option value="D.Ed">D.Ed</option>
                            <option value="Dip">Dip</option>
                            <option value="M.Ed">M.Ed</option>
                            <option value="M.Phil">M.Phil</option>
                            <option value="M.A.(SWDS)">M.A.(SWDS)</option>
                            <option value="MSW">MSW</option>
                            <option value="MSc">MSc</option>
                            <option value="P.G Dip">P.G Dip</option>
                            <option value="Psy.D">Psy.D</option>
                            <option value="Other">Other</option>
                          </select>
                          <input name="qual_other" class="form-control col-md-7 col-xs-12" placeholder="If Other.." type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Centre</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="centre">
                            <option value="-1">Centre Name</option>
                            @foreach($centres as $centre)
                            <option value="{{$centre->centre_id}}">{{$centre->centre_name}}</option>
                            @endforeach
                            <option value="0">None</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="mobile" class="form-control" placeholder="Phone No" type="text" required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email"  name="email" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                          <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gender
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required />&nbsp;Male
                          <input type="radio" class="flat" name="gender" id="genderF" value="Female" />&nbsp;Female
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mother Tongue</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="tongue">
                            <option value="-1">Choose option</option>
                            <option value="English">English</option>
                            <option value="Telegu">Telegu</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Tamil">Tamil</option>
                            <option value="Urdu">Urdu</option>
                            <option value="Punjabi">Punjabi</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <center><a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
                          <button id="send" type="submit" class="btn btn-success">Submit</button></center>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection
