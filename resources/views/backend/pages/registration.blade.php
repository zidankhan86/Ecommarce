<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="{{route('registration.create')}}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Name" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" name="address" class="form-control form-control-lg" placeholder="Address"/>
                    <label class="form-label" for="form3Example3cg">Address</label>
                  </div>

                <div class="form-outline mb-4">
                    <input type="number" name="phone" class="form-control form-control-lg" placeholder="Phone" />
                    <label class="form-label" for="form3Example3cg">Phone</label>
                  </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success  btn-lg gradient-custom-4 text-body">SIGN-UP</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
