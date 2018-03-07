@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Assign Students</h3>
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


                      <span class="section">Assigining To</span>

                      <div class="item form-group">
                        <h5><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Professional Name ({{ $professional->email }})
                        </label></h5>
                      </div>

                      <hr>
                      <br>
                      <span class="section">Select Students</span>


                      <form method="POST" action="{{ route('centre.professional.assign.search') }}">
                        {{ csrf_field() }}
                        <div class="item form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12 form-group top_search">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search for students..." name="keyword">
                              <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">Search</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </form>


                      @if(Session::get('students'))
                        @foreach(Session::get('students') as $student)
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>{{ $student->studentid }}</i></h4>
                              <div class="left col-xs-7">
                                <h2>{{ $student->studentdetail->firstname }} {{ $student->studentdetail->lastname }}</h2>
                                <p>
                                  <p><strong>Gender :</strong> {{ $student->studentdetail->gender }}</p>
                                  <p><strong>Father :</strong> {{ $student->studentdetail->father_name }}</p>
                                  <p><strong>Mother :</strong> {{ $student->studentdetail->mother_name }}</p>
                                </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-phone"></i> Phone #: {{ $student->studentdetail->father_mobile }}</li>
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
                                  <a href="{{ route('centre.professional.assign.attempt', [$professional->id, $student->studentdetail->id]) }}" type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                  </i> <i class="fa fa-plus"></i> </a>
                                <a href="{{ route('centre.student.show', [$student->studentdetail->id]) }}" target="_blank" type="button" class="btn btn-primary btn-xs">
                                  <i class="fa fa-user"> </i> View Profile
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      @else
                        <div class="well">
                          <center>
                            <p>No Result Found !</p>
                            <p>Note: Search By Unqiue Student ID</p>
                          </center>
                        </div>
                      @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
