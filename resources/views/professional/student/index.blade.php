@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Centres <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form method="POST" action="{{route('professional.student.search')}}">
                    {{csrf_field()}}
                  <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search Student By Name....">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go!</button>
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="row">
                  @foreach($students as $student)
                  <div class="col-md-4 profile_details">
                    <div class="well profile_view">
                      <div class="col-sm-12">
                        <h4 class="brief"><i>{{ $student->student_id }}</i></h4>
                        <div class="left col-xs-7">
                          <h2>{{ $student->firstname }} {{ $student->lastname }}</h2>
                          <p>
                            <p><strong>Gender :</strong> {{ $student->gender }}</p>
                            <p><strong>Father :</strong> {{ $student->father_name }}</p>
                            <p><strong>Mother :</strong> {{ $student->mother_name }}</p>
                          </p>
                          <ul class="list-unstyled">
                            <li><i class="fa fa-phone"></i> Phone #: {{ $student->father_mobile }}</li>
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
                            <a href="{{route('professional.student.iep',[$student->student_id]) }}" type="button" class="btn btn-success btn-xs"> IEP </a>
                          <a href="{{ route('centre.student.show', [$student->student_id]) }}" target="_blank" type="button" class="btn btn-primary btn-xs">
                            <!-- Button a Error cz student id disi..lagbe student_details id-->
                            <i class="fa fa-user"> </i> View Profile
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection
