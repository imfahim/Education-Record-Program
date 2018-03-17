@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Students <small>All Students List !</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students <small>All Students at a glance !</small></h2>
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
                          <th>Professionals</th>
                          <th>IEP Information</th>
                          <th>Option</th>
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
                            <ul class="list-inline">
                              @foreach($profs as $pro)
                              @if($pro->student_id == $student->student_id)
                              <li>
                                <img src="{{asset('images/user.png')}}" class="avatar" alt="Avatar" href="#"><br>{{$pro->fname}} {{$pro->lname}}
                              </li>
                              @endif
                              @endforeach
                            </ul>
                          </td>
                          <td>
                            <form method="POST" action="{{route('student.report.show',[$student->student_id])}}">
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
                              <div class="col-md-3">
                            <a href="{{ route('centre.student.show', [$student->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-user"></i> View Profile</a>
                          </div>
                          <!--
                          <div class="col-md-4">
                            @if($student->student->status === 0)
                              <form action="{{ route('centre.student.destroy', [$student->student->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="command" value="deactivate" />
                                <input type="submit" class="btn btn-sm btn-danger" value="Deactivate" />
                              </form>
                            @else
                              <form action="{{ route('centre.student.destroy', [$student->student->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="command" value="activate" />
                                <input type="submit" class="btn btn-sm btn-success" value="Activate" />
                              </form>
                            @endif
                          </div>
                          -->
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
          </div>
        </div>
        <!-- /page content -->

@endsection
