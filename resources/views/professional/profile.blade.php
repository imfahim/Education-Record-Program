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
                <h3>Professional Profile</h3>
              </div>
            </div>
          </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>*********</h2>
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
                      <h3>Professional name</h3>

                      <ul class="list-unstyled user_data">
                        <li>Profession: ***** </li>
                        <li>Qualification: ***** </li>
                      </ul>




                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="col-md-12">
                        <ul class="list-unstyled user_data">
                        Centre:**************************************************
                      </ul>

                      </div>
                      <hr style="border: 2px solid #E6E9ED">

                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">

                        Mobile:******************
                      </ul>

                      </div>
                      <div class="col-md-6">
                        <ul class="list-unstyled user_data">

                        Email:******************
                      </ul>

                      </div>
                      <hr style="border: 2px solid #E6E9ED">



                      <div class="col-md-12">
                        <ul class="list-unstyled user_data">
                          <li>Date of Birth: </li>
                          <li>Gender: </li>
                          <li>Mother Tongue: </li>
                        </ul>
                      </div>



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
