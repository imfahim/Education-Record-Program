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
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Date Of Birth</th>
                          <th>Diagnosis</th>
                          <th>Interest</th>
                          <th>Condition</th>
                          <th>Option</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($students as $std)
                        <tr>
                          <td>{{$std->firstname}} {{$std->lastname}}</td>
                          <td>{{$std->gender}}</td>
                          <td>{{$std->dob}}</td>
                          <td>{{$std->diagnosis}}</td>
                          <td>{{$std->identified_interest}}</td>
                          <td>{{$std->associated_condition}}</td>
                          <td>
                            <form method="POST" action="{{route('professional.student.request')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{ $std->student_id }}"/>

                            <button type="submit" class="btn btn-round btn-xs btn-success">Add</button>


                          </form>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection
