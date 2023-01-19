@extends('backend.index')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Category</h4>

        <form action="{{route('category.store')}}" class="forms-sample" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Category Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Category Type</label>
            <input type="text" class="form-control" name="type" placeholder="Shop Contract">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>


@endsection
