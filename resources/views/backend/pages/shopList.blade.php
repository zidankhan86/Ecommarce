@extends('backend.index')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Shop List</h4>

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>

                          <th>ID</th>
                          <th>Shop name</th>
                          <th>Contract</th>
                          <th>Address</th>
                          <th>Image</th>
                          <th>About</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($shop as $data )
                        <tr>

                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->contract}}</td>
                          <td>{{$data->address}}</td>
                          <td><img width="200px" src="{{url('/uploads/',$data->image)}}"></td>
                          <td>{{$data->about}}</td>

                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection

