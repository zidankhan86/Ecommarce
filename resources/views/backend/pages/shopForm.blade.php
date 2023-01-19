@extends('backend.index')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Shop</h4>

        <form action="{{route('shop.store')}}" class="forms-sample" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Shop Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Shop Contract</label>
            <input type="number" class="form-control" name="contract" placeholder="Shop Contract">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Shop Address</label>
            <input type="text" class="form-control" name="address" placeholder="Shop Address">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Shop Image</label>
            <input type="file" class="form-control" name="image" placeholder="Shop Image">
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">About Shop</label>
            <input type="text" name="about" class="form-control"  placeholder="About Shop ">

          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>


@endsection
