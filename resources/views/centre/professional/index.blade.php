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
                      <a href="{{route('centre.professional.create')}}" class="btn btn-round btn-primary">Create</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Profession</th>
                          <th>Qualifications</th>
                          <th>centre_id</th>
                          <th>Gender</th>
                          <th>Mother Tongue</th>
                          <th>email</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($professionals as $prof)
                        <tr>
                          <td>{{$prof->fname}} {{$prof->lname}}</td>
                          <td>{{$prof->profession}}</td>
                          <td>{{$prof->qualifications}}</td>
                          <td>{{$prof->centre_id}}</td>
                          <td>{{$prof->gender}}</td>
                          <td>{{$prof->mother_tongue}}</td>
                          <td>{{$prof->email}}</td>
                          <td>
                            <form method="POST" action="{{route('centre.professional.delete')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="delete"/>
                            <input type="hidden" name="id" value="{{ $prof->prof_id }}"/>
                            @if($prof->status===1)
                            <input type="hidden" name="stat" value="0"/>
                            <button type="submit" class="btn btn-round btn-xs btn-success">Active</button>
                            @else
                            <input type="hidden" name="stat" value="1"/>
                            <button type="submit" class="btn btn-round btn-xs btn-danger">Deactive</button>
                            @endif
                          </form>
                          </td>
                          <td>
                        <div class="col-md-3">
                          <a href="{{route('centre.professional.add_student')}}" class="btn btn-round btn-xs btn-info">Details</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('centre.professional.add_student')}}" class="btn btn-round btn-xs btn-success">Add Student</a>
                          </div>
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
