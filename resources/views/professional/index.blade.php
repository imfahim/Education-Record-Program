@extends('layouts.main')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">

          <!-- top tiles -->

          <!--
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        /top tiles

          <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>My Students</h2>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                    <div class="well profile_view">
                      <div class="col-sm-12">
                        <h4 class="brief"><i>std ID</i></h4>
                        <div class="left col-xs-7">
                          <h2>std name</h2>
                          <p>
                            <p><strong>Gender :</strong> gender</p>
                            <p><strong>Father :</strong> father</p>
                            <p><strong>Mother :</strong> mother</p>
                          </p>
                          <ul class="list-unstyled">
                            <li><i class="fa fa-phone"></i> Phone #: phone</li>
                          </ul>
                        </div>
                        <div class="right col-xs-5 text-center">
                          <img src="{{ asset('images/img.jpg')}}" alt="" class="img-circle img-responsive">
                        </div>
                      </div>
                      <div class="col-xs-12 bottom text-center">
                        <div class="col-xs-12 col-sm-6 emphasis">
                          <p class="ratings">
                            <label>Center Name</label>
                          </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 emphasis">
                          <a href="#" target="_blank" type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-user"> </i> View Profile
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              </div>
            </div>
          </div> -->

          <div class="container" style="margin-top: 300px;">
            <div class="row vertical-center-row">
              <div class="text-center col-md-12">
                <h1>Welcome to your Spethe Dashboard !</h1>
                <a href="{{ route('professional.student.index') }}" class="btn btn-lg btn-primary">Student List</a>
                <a href="#" class="btn btn-lg btn-info">Update Profile</a>
              </div>
            </div>
          </div>


        </div>
        <!-- /page content -->

@endsection
