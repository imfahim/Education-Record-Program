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
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{route('centre.student.create')}}" class="btn btn-round btn-primary">Create</a>
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
                          <th>IEP Progress</th>
                          <th>Status</th>
                          <th style="width: 20%">Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $student)
                        <tr>
                          <td>#</td>
                          <td>
                            <a>{{$student->firstname}} {{$student->lastname}}</a>
                            <br />
                            <small>Created 01.01.2015</small>
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
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <div class="row">
                              <div class="col-md-3">
                            <a href="{{ route('centre.student.show', [$student->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View</a>
                          </div>
                          <div class="col-md-3">
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> IEP </a>
                          </div>
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
