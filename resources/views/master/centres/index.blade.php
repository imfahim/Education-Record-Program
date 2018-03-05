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
                      <a href="{{route('master.centre.create')}}" class="btn btn-round btn-primary">Create</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Created At</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($centres as $centre)
                        <tr>
                          <td>{{$centre->centre_name}}</td>
                          <td>{{$centre->centre_email}} </td>
                          <td>{{$centre->centre_phone}}</td>
                          <td>{{$centre->centre_address}}</td>
                          <td>{{$centre->created_at}}</td>
                          <td>
                            <form method="POST" action="{{route('master.centre.delete')}}">
                              {{csrf_field()}}
                              <input type="hidden" name="_method" value="delete"/>
        											<input type="hidden" name="id" value="{{ $centre->centre_id }}"/>
                              <button type="submit" class="btn btn-round btn-danger">Delete</button>
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
