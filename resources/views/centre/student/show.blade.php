@extends('layouts.main')

@section('content')

<style>
hr {
    display: block;
    border-width: 1px;
}
</style>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Profile</h3>
              </div>
            </div>
          </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student IEP Report</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{asset('images/picture.jpg')}}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{ $student_details->firstname }} {{ $student_details->lastname }}</h3>

                      <ul class="list-unstyled user_data">
                        <li>Diagnosis: <h5><strong>{{ $student_details->diagnosis }}</h5></strong> </li>
                        <li>Age: {{ $age }} </li>
                        <li>Gender: <h5><strong>{{ $student_details->gender }}</h5></strong></li>
                      </ul>

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">
                          <li>Father's Name: <h5><strong>{{ $student_details->father_name }}</h5></strong></li>
                          <li>Mobile No: <h5><strong>{{ $student_details->father_mobile }}</h5></strong></li>
                          <li>Email: <h5><strong>{{ $student_details->father_email }}</h5></strong></li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">
                          <li>Mother's Name: <h5><strong>{{ $student_details->mother_name }}</h5></strong></li>
                          <li>Mobile No: <h5><strong>{{ $student_details->mother_mobile }}</h5></strong></li>
                          <li>Email: <h5><strong>{{ $student_details->mother_email }}</h5></strong></li>
                        </ul>
                      </div>

                      <hr style="border: 2px solid #E6E9ED">

                      <div class="col-md-12">
                        <ul class="list-unstyled user_data">
                          <li>Date of Birth: <h5><strong>{{ $student_details->dob }}</h5></strong></li>
                          <li>Mother Tongue: <h5><strong>{{ $student_details->mother_tongue }}</h5></strong></li>
                          <li>Height: <h5><strong>{{ $student_details->height }}</h5></strong></li>
                          <li>Weight: <h5><strong>{{ $student_details->weight }}</h5></strong></li>
                        </ul>
                      </div>

                      <hr style="border: 2px solid #E6E9ED">

                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">
                          <li>IQ Score: <h5><strong>{{ $student_details->iq_score }}</h5></strong></li>
                          <li>IQ Test Date: <h5><strong>{{ $student_details->iq_test_date }}</h5></strong></li>
                        </ul>
                      </div>

                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">
                          <li>SQ Score: <h5><strong>{{ $student_details->sq_score }}</h5></strong></li>
                          <li>SQ Test Date: <h5><strong>{{ $student_details->sq_test_date }}</h5></strong></li>
                        </ul>
                      </div>

                      <hr style="border: 2px solid #E6E9ED">

                      <div class="col-md-4">
                        <ul class="list-unstyled user_data">
                          <li>Communication Level: </li>
                          <li><h5><strong>{{ $student_details->com_level }}</h5></strong></li>
                        </ul>
                      </div>

                      <div class="col-md-4">
                        <ul class="list-unstyled user_data">
                          <li>Status: </li>
                          <li><h5><strong>{{ $student_details->status }}</h5></strong></li>
                        </ul>
                      </div>

                      <div class="col-md-4">
                        <ul class="list-unstyled user_data">
                          <li>Class/Section: </li>
                          <li><h5><strong>{{ $student_details->class_or_section }}</h5></strong></li>
                        </ul>
                      </div>

                      <hr style="border: 2px solid #E6E9ED">

                      <div class="col-md-12">
                        <ul class="list-unstyled user_data">
                          <li>Identified Interests: </li>
                          <li><h5><strong>{{ $student_details->identified_interest }}</h5></strong></li>
                        </ul>
                      </div>

                      <div class="col-md-12">
                        <ul class="list-unstyled user_data">
                          <li>Associated Condition: </li>
                          <li><h5><strong>{{ $student_details->associated_condition }}</h5></strong></li>
                        </ul>
                      </div>

                      <hr style="border: 2px solid #E6E9ED">

                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">
                          <li>Primary Goal: </li>
                          <li><h5><strong>{{ $student_details->primary_goal }}</h5></strong></li>
                        </ul>
                      </div>

                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">
                          <li>Secondary Goal: </li>
                          <li><h5><strong>{{ $student_details->secondary_goal }}</h5></strong></li>
                        </ul>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->

    <!-- morris.js -->
    <script src="{{asset('vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('vendors/morris.js/morris.min.js')}}"></script>

  </body>
</html>
@endsection
