@extends('admin-dashboard.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="form-sample" action="{{route('user.update',['id'=>$user->id])}}" method="post">
            @csrf
            <a href=" {{route('user.index')}} " style="text-decoration: none" ><i class="mdi mdi-close-octagon d-flex justify-content-end" style="color: black ; font-size: 25px ; "></i></a>
            <h4 class="card-title"> <i class="mdi mdi-account menu-icon"></i> User Table</h4>
          <p class="card-description"> User Info </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}"/>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" value="{{$user->email}}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password" value="{{$user->password}}"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Mobile Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}"/>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Address </label>
                  <div class="col-sm-9">
                    <select name="address" class="form-control">
                      <option selected>Choose Address</option>
                      <option value="Amman">Amman</option>
                      <option value="Irbid">Irbid</option>
                      <option value="Zarqa">Zarqa</option>
                      <option value="Jarash">Jarash</option>
                      <option value="Aqaba">Aqaba</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> User Type </label>
                  <div class="col-sm-9">
                    <select name="usertype" class="form-control">
                        @if ($user ->usertype == 1 )
                        <option selected value="1">Admin</option>
                        <option  value="0">User</option>
                        @else
                         <option selected value="0">User</option>
                         <option  value="1">Admin</option>
                         @endif
                    </select>
                  </div>
                </div>
              </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-gradient-primary btn-rounded btn-fw">Update</button>

        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
