@extends('backend.index')
@section('content')
<div class="col-md-12 grid-margin transparent">
    <div class="row">
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
          <div class="card-body">
            <p class="mb-6">Today’s Bookings</p>
            <p class="fs-30 mb-4">4006</p>
            <p>10.00% (30 days)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-6">Total Bookings</p>
            <p class="fs-30 mb-4">61344</p>
            <p>22.00% (30 days)</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-6">Number of Meetings</p>
            <p class="fs-30 mb-4">34040</p>
            <p>2.00% (30 days)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-6">Number of Clients</p>
            <p class="fs-30 mb-4">47033</p>
            <p>0.22% (30 days)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection
