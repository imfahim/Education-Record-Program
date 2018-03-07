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
                  <div class="x_content">
                    @if($students)
                      <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Student ID</th>
                            <th>Added By</th>
                            <th>Added At</th>
                            <th>Options</th>
                          </tr>
                        </thead>


                        <tbody>
                          @foreach($students as $student)
                            <tr>
                              <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                              <td>{{ $student->student->studentid }}</td>
                              <td>{{ $student->student->password }}</td>
                              <td>{{ $student->created_at }}</td>
                              <td>
                                <div class="col-md-6">
                                  <a href="{{ route('centre.student.show', [$student->id]) }}" class="btn btn-sm btn-primary">Show</a>
                                </div>
                                <div class="col-md-6">
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
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    @else
                      <div class="well">
                        <center>No Students Yet !</center>
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
