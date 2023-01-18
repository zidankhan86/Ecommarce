@extends('backend.index')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Product</h4>

        <form action="{{route('product.store')}}" class="forms-sample" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Product Name</label>
            <input type="text" class="form-control"  name="name" placeholder="Product Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Product Details</label>
            <input type="text" class="form-control" name="details" placeholder="Product Details">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Product Image</label>
            <input type="file" class="form-control" name="image" placeholder="Product Details">
          </div>

          <div class="form-group">
            <label for="exampleInputCity1">Quantity</label>
            <input type="number" class="form-control" name="quantity" placeholder="Location">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@endsection
