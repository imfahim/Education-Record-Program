@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Personal Students <small>All Personal Students at a glance !</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            @if($students)
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Personal Students <small>List of Personal Students</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{route('centre.student.create')}}" class="btn btn-round btn-primary">Add Student</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>


                <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Student Name</th>
                          <th>IEP Progress</th>
                          <th style="width: 30%">Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $student)
                        <tr>
                          <td>#</td>
                          <td>
                            <a>{{$student->firstname}} {{$student->lastname}}</a>
                            <br />
                            <small>Added On {{ $student->created_at }}</small>
                          </td>
                          <td>
                            <form method="POST" action="{{route('student.record.iep',[$student->id])}}">
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{ $student->id }}" />
                              <div class="col-md-6">
                                <select class="form-control" name="month" >
                                  <option value="-1">Select Month</option>
                                  <option value="Jan">Jan</option>
                                  <option value="Feb">Feb</option>
                                  <option value="Mar">Mar</option>
                                  <option value="Apr">Apr</option>
                                  <option value="May">May</option>
                                  <option value="Jun">Jun</option>
                                  <option value="Jul">Jul</option>
                                  <option value="Aug">Aug</option>
                                  <option value="Sep">Sep</option>
                                  <option value="Oct">Oct</option>
                                  <option value="Nov">Nov</option>
                                  <option value="Dec">Dec</option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-xs">View IEP</button>
                              </div>
                            </form>
                          </td>
                          <td>
                            <div class="row">
                              <div class="col-md-4">
                                <a href="{{ route('centre.student.show', [$student->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-user"></i> View Profile</a>
                              </div>
                              <div class="col-md-4">
                                <a href="{{route('professional.student.iep',[$student->student_id]) }}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Create IEP </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- end project list -->



                </div>
              </div>
            </div>
            @else

            @endif

          </div>
        </div>
        <!-- /page content -->

@endsection
