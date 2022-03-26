@extends('admin-dashboard.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="form-sample" action="{{route('user.store')}}" method="post">
            @csrf
         <h4 class="card-title"> <i class="mdi mdi-account menu-icon"></i> User Table</h4>
          <p class="card-description"> User Info </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="first_name" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="last_name" />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Mobile Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="phone" />
                  </div>
                </div>
              </div>


            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Address </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> User Type </label>
                  <div class="col-sm-9">
                    <select name="usertype" class="form-control">
                        <option selected>Choose User Type</option>
                        <option value="1">Admin</option>
                         <option value="0">User</option>
                    </select>
                  </div>
                </div>
              </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-gradient-primary btn-rounded btn-fw">Add</button>

        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Basic Tables start -->
<section class="section">
    <div class="card table-responsive">
        <div class="card-header">
            <h4 class="card-title"> <i class="mdi mdi-account menu-icon"></i> Admins Table</h4>
            <p class="card-description"> Manage Users </p>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                      <th> # </th>
                      <th> First name </th>
                      <th> Last name </th>
                      <th> Email </th>
                      <th> Mobile number </th>
                      <th> Address </th>
                      <th> User Type </th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($users as $user)
                    <tr>
                      <td> {{$user->id}} </td>
                      <td> {{$user->first_name}} </td>
                      <td> {{$user->last_name}} </td>
                      <td> {{$user->email}} </td>
                      <td> {{$user->phone}} </td>
                      <td> {{$user->address}} </td>
                      @if ($user->usertype==1)
                      <td> Admin</td>
                      @else
                      <td> User </td>
                      @endif
                      <td><a href="{{route('user.edit',['id'=>$user->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
                      <td><a href="{{route('user.destroy',['id'=>$user->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>
                    </tr>
                    @endforeach

                  </tbody>
            </table>
        </div>
    </div>

</section>
<!-- Basic Tables end -->
  {{-- <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body table-responsive">
        <h4 class="card-title"> <i class="mdi mdi-account menu-icon"></i> Admins Table</h4>
        <p class="card-description"> Manage Users </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> # </th>
              <th> First name </th>
              <th> Last name </th>
              <th> Email </th>
              <th> Password </th>
              <th> Mobile number </th>
              <th> Address </th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($users as $user)
            @if ($user ->user_type == 1)
            <tr>
              <td> {{$user->id}} </td>
              <td> {{$user->first_name}} </td>
              <td> {{$user->last_name}} </td>
              <td> {{$user->email}} </td>
              <td> {{$user->password}} </td>
              <td> {{$user->phone}} </td>
              <td> {{$user->address}} </td>
              <td><a href="{{route('user.edit',['id'=>$user->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
              <td><a href="{{route('user.destroy',['id'=>$user->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>
            </tr>
            @endif
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div> --}}

<!-- Basic Tables start -->
{{-- <section class="section pt-5">
    <div class="card table-responsive">
        <div class="card-header">
            <h4 class="card-title"> <i class="mdi mdi-account menu-icon"></i> Users Table</h4>
            <p class="card-description"> Manage Users </p>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                      <th> # </th>
                      <th> First name </th>
                      <th> Last name </th>
                      <th> Email </th>
                      <th> Password </th>
                      <th> Mobile number </th>
                      <th> Address </th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                      @foreach ($users as $user)
                      <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->first_name}} </td>
                        <td> {{$user->last_name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->password}} </td>
                        <td> {{$user->phone}} </td>
                        <td> {{$user->address}} </td>
                        <td><a href="{{route('user.edit',['id'=>$user->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
                        <td><a href="{{route('user.destroy',['id'=>$user->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>
                      </tr>
                      @endforeach


                  </tbody>
            </table>
        </div>
    </div>

</section> --}}
<!-- Basic Tables end -->
  {{-- <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body table-responsive">
        <h4 class="card-title"> <i class="mdi mdi-account menu-icon"></i> Users Table</h4>
        <p class="card-description"> Manage Users </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> # </th>
              <th> First name </th>
              <th> Last name </th>
              <th> Email </th>
              <th> Password </th>
              <th> Mobile number </th>
              <th> Address </th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

              @foreach ($users as $user)
              @if ($user ->user_type == 0)
              <tr>
                <td> {{$user->id}} </td>
                <td> {{$user->first_name}} </td>
                <td> {{$user->last_name}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->password}} </td>
                <td> {{$user->phone}} </td>
                <td> {{$user->address}} </td>
                <td><a href="{{route('user.edit',['id'=>$user->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
                <td><a href="{{route('user.destroy',['id'=>$user->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>
              </tr>
              @endif
              @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div> --}}




      {{-- <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic Table</h4>
              <p class="card-description"> Add class <code>.table</code>
              </p>
              <table class="table">
                <thead>
                  <tr>
                    <th>Profile</th>
                    <th>VatNo.</th>
                    <th>Created</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jacob</td>
                    <td>53275531</td>
                    <td>12 May 2017</td>
                    <td><label class="badge badge-danger">Pending</label></td>
                  </tr>
                  <tr>
                    <td>Messsy</td>
                    <td>53275532</td>
                    <td>15 May 2017</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                  </tr>
                  <tr>
                    <td>John</td>
                    <td>53275533</td>
                    <td>14 May 2017</td>
                    <td><label class="badge badge-info">Fixed</label></td>
                  </tr>
                  <tr>
                    <td>Peter</td>
                    <td>53275534</td>
                    <td>16 May 2017</td>
                    <td><label class="badge badge-success">Completed</label></td>
                  </tr>
                  <tr>
                    <td>Dave</td>
                    <td>53275535</td>
                    <td>20 May 2017</td>
                    <td><label class="badge badge-warning">In progress</label></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

                </tbody>
              </table> --}}
@endsection
