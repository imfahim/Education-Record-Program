@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Professionals <small>List of professionals</small></h3>
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
                    <h2>Professionals <small>All Professionals at a glance !</small></h2>
                    <div class="pull-right">
                      <a href="{{ route('centre.professional.create') }}" class="btn btn-sm btn-primary">Add Professional</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @foreach($professionals as $prof)
                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                      <div class="well profile_view">
                        <div class="col-sm-12">
                          <h4 class="brief"><i>{{$prof->fname}} {{$prof->lname}}</i></h4>
                          <div class="pull-right">
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
                          </div>
                          <div class="left col-xs-7">
                            <h2>{{$prof->qualifications}}</h2>
                            <p>
                              <p><strong>Gender :</strong> {{$prof->gender}}</p>
                              <p><strong>Mother Tongue :</strong> {{$prof->mother_tongue}}</p>
                              <p><strong><i class="fa fa-envelope"></i> Email :</strong> {{$prof->email}}</p>
                            </p>
                            <ul class="list-unstyled">
                              <li><i class="fa fa-phone"></i> Phone #: {{$prof->mobile}}</li>
                            </ul>
                          </div>
                          <div class="right col-xs-5 text-center">
                            <img src="{{ asset('images/img.jpg')}}" alt="" class="img-circle img-responsive">
                          </div>
                        </div>
                        <div class="col-xs-12 bottom text-center">
                          <div class="col-xs-12 col-sm-6 emphasis">
                            <p class="ratings">
                              <label>{{$prof->profession}}</label>
                            </p>
                          </div>
                          <div class="col-xs-12 col-sm-6 emphasis">
                            <a href="{{route('centre.professional.assign', [$prof->id])}}" type="button" class="btn btn-success btn-xs">
                              <i class="fa fa-user"></i>
                              <i class="fa fa-plus"></i>
                            </a>
                            <a href="#" target="_blank" type="button" class="btn btn-primary btn-xs">
                              <i class="fa fa-user"> </i> View Profile
                            </a>

                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    <!--
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
                          <a href="#" class="btn btn-round btn-xs btn-info">Details</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('centre.professional.assign', [$prof->id])}}" class="btn btn-round btn-xs btn-success">Assign Students</a>
                          </div>
                        </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection
