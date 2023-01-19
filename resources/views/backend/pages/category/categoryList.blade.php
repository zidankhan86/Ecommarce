@extends('backend.index')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category List</h4>

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>

                          <th>ID</th>
                          <th>Category Name</th>
                          <th>Type</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($category as $data)


                        <tr>

                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->type}}</td>
                          <td><a href="" class="btn btn-danger">delete</a></td>


                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection

