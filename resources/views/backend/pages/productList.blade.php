@extends('backend.index')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product List</h4>

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>

                          <th>Product name</th>
                          <th>Details</th>
                          <th>Image</th>
                          <th>Quantati</th>


                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $data )
                        <tr>

                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->details}}</td>
                          <td>{{$data->image}}</td>
                          <td>{{$data->quantity}}</td>

                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection

