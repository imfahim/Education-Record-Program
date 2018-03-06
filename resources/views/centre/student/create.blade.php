@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Create</h3>
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

                    <form class="form-horizontal form-label-left" novalidate method="POST" action="{{ route('centre.student.store') }}">
                      {{csrf_field()}}
                      <span class="section">Student Info</span>

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Diagnosis</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="diagnosis">
                            <option>Choose option</option>
                            <option>Autism</option>
                            <option> ADHD</option>
                            <option> Cerebral palsy</option>
                            <option>Down Syndrome</option>
                            <option>learning Disabilities</option>
                            <option>Intellectual Disability</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2" type="text" name="dob">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>

                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Communication Level
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="radio" class="flat" name="com_level" id="non" value="non" checked="" required /> &nbsp;Non Verbal
                        <input type="radio" class="flat" name="com_level" id="verbal" value="verbal" />&nbsp;verbal
                        <input type="radio" class="flat" name="com_level" id="0-50" value="0-50" />&nbsp;0-50 words
                        <input type="radio" class="flat" name="com_level" id="50-150" value="50-150" />&nbsp;50-150 words
                        <input type="radio" class="flat" name="com_level" id="150-500" value="150-500" />&nbsp;150-500 words
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gender
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />&nbsp;Male
                          <input type="radio" class="flat" name="gender" id="genderF" value="F" />&nbsp;Female
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="class">Class/Section
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="class" class="form-control col-md-7 col-xs-12"placeholder="if applicable" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="interests">Identified Interests
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="interests" class="form-control col-md-7 col-xs-12" placeholder="(tags) Singing," type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="condition">Associated Condition
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="condition" class="form-control col-md-7 col-xs-12"placeholder="tags" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" class="flat" name="status" id="mild" value="mild" checked="" required />&nbsp;Mild
                          <input type="radio" class="flat" name="status" id="moderate" value="moderate" />&nbsp;Moderate
                          <input type="radio" class="flat" name="status" id="severe" value="severe" />&nbsp;Severe

                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Goal</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="primary">
                            <option>Choose option</option>
                            <option>Academics</option>
                            <option>Skill Development</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Goal</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="secondary">
                            <option>Choose option</option>
                            <option>Academics</option>
                            <option>Skill Development</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="item form-group">
                        <label class="control-label col-md-6 col-sm-6 col-xs-12" for="height">Height
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="height" class="form-control col-md-7 col-xs-12"placeholder="In Inch" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="item form-group">
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="weight">Weight
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input name="weight" class="form-control col-md-7 col-xs-12"placeholder="In kg" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Mother Tongue</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="tongue">
                          <option>Choose option</option>
                          <option>English</option>
                          <option>Bengali</option>
                          <option>Telegu</option>
                          <option>Marathi</option>
                          <option>Tamil</option>
                          <option>Urdu</option>
                          <option>Punjabi</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="item form-group">
                      <label class="control-label col-md-6 col-sm-6 col-xs-12" for="email">IQ Score
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="iq">
                          <option>Choose option</option>
                          <option>25-30</option>
                          <option>30</option>
                          <option>30-35</option>
                          <option>35</option>
                          <option>35-40</option>
                          <option>40</option>
                          <option>40-45</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item form-group">
                      <label class="control-label col-md-1 col-sm-1 col-xs-12" for="iq_date">IQ test Date
                      </label>
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4" name="iq_date">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                          <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="item form-group">
                    <label class="control-label col-md-6 col-sm-6 col-xs-12" for="email">SQ Score
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control col-md-7 col-xs-12" name="sq">
                        <option>Choose option</option>
                        <option>25-30</option>
                        <option>30</option>
                        <option>30-35</option>
                        <option>35</option>
                        <option>35-40</option>
                        <option>40</option>
                        <option>40-45</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="item form-group">
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="sq_date">SQ test Date
                    </label>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3" name="sq_date">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Father's Name</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="col-md-6">
                    <input name="fatherfname" class="form-control" placeholder="First Name" type="text">
                  </div>
                  <div class="col-md-6">
                    <input name="fatherlname" class="form-control" placeholder="Last Name" type="text">
                  </div>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input name="fathermobile" class="form-control" placeholder="Phone No" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email"  name="fatheremail" class="form-control col-md-7 col-xs-12">
                  </div>
                </div><br>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Mother's Name</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="col-md-6">
                    <input name="motherfname" class="form-control" placeholder="First Name" type="text">
                  </div>
                  <div class="col-md-6">
                    <input name="motherlname" class="form-control" placeholder="Last Name" type="text">
                  </div>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input name="mothermobile" class="form-control" placeholder="Phone No" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email"  name="motheremail" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <hr>
                <div class="item form-group">
                  <h4 class="col-md-6 col-sm-6 col-xs-12">Account Details</h4>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stdid">Student ID
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text"  name="stdid" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password"  name="password" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repassword">Re-type Password
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password"  name="repassword" class="form-control col-md-7 col-xs-12">
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
