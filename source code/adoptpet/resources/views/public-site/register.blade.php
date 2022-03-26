@extends('public-site.layouts.master')
@section('content')

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10  ">
          <div class="card text-white register-section" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="md-5 md-4">

                <h2 class="fw-bold mb-2 text-uppercase login-color">Sign Up</h2>
                <p class="text-white-50 mb-5">Please enter your information!</p>

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label my-4"> First Name </label>
                        <div class="col-sm-9">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg" style="margin-top: 1rem;">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label my-4"> Last Name </label>
                          <div class="col-sm-9">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg" style="margin-top: 1rem;">
                          </div>
                        </div>
                      </div>
                  </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label my-4"> Email </label>
                        <div class="col-sm-9">
                          <input type="email" id="typeEmailX" class="form-control form-control-lg" style="margin-top: 1rem;">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label my-4"> Password </label>
                          <div class="col-sm-9">
                            <input type="password" id="typeEmailX" class="form-control form-control-lg" style="margin-top: 1rem;">
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label my-4 "> Phone  </label>
                        <div class="col-sm-9">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg" style="margin-top: 1rem;">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label my-4"> Address </label>
                          <div class="col-sm-9">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg" style="margin-top: 1rem;">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="d-flex justify-content-end">
                <button class="btn btn-outline-light btn-lg px-5 login-btn" type="submit">Signup</button>
                  </div>

              </div>

              <div>
                <p class="mb-0 mt-4"> Have an account? <a href="#!" class="text-white-50 fw-bold">Login</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
