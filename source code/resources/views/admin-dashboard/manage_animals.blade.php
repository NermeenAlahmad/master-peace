@extends('admin-dashboard.layouts.master')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="form-sample" action="{{route('animal.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="card-title"> <i class="mdi mdi-paw menu-icon"></i> Animals form</h4>
          <p class="card-description"> Animal info </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="name" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Color </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="color"/>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Family </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="family"/>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Animal Age </label>
                  <div class="col-sm-9">
                    <input type="text"  min="1" class="form-control" name="age" />
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Health </label>
                <div class="col-sm-9">
                    <textarea  id="" cols="30" rows="10" class="form-control" name="health"></textarea>

                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Animal Description </label>
                  <div class="col-sm-9">
                    <textarea  id="" cols="30" rows="10" class="form-control" name="description"></textarea>
                  </div>
                </div>
              </div>
          </div>


          <div class="row">

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Animal Gender </label>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="female" checked=""> Female <i class="input-helper"></i></label>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="male"> Male  <i class="input-helper"></i></label>
                    </div>
                  </div>
                </div>
              </div>

              {{-- <div class="form-group">
                <label> Main image </label>
                <input type="file" name="main_image" class="file-upload-default">
                <div class="input-group col-xs-6">
                  <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
            </div>

            <div class="form-group">
                <label> Sub image 1 </label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-6">
                  <input type="text" class="form-control file-upload-info" name="sub_image1" disabled="" placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
            </div>

            <div class="form-group">
                <label> Sub image 2 </label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-6">
                  <input type="text" class="form-control file-upload-info" name="sub_image2" disabled="" placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
            </div> --}}

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label"> Main Image </label>
                <input class="form-control" name="main_image" type="file" id="formFileMultiple" multiple>
              </div>

              <div class="mb-3">
                <label for="formFileMultiple" class="form-label"> Sub Image1 </label>
                <input class="form-control" name="sub_image1" type="file" id="formFileMultiple" multiple>
              </div>

              <div class="mb-3">
                <label for="formFileMultiple" class="form-label"> Sub Image2 </label>
                <input class="form-control" name="sub_image2" type="file" id="formFileMultiple" multiple>
              </div>



              <div class="form-group">
                <select name="category" id="inputState" class="form-control">
                    <option selected>Choose Category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->category_name}}</option>
              @endforeach
          </select>

            </div>

            <div class="form-group">
                <select name="user" id="inputState" class="form-control">
                    <option selected>Choose User Type</option>
              @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->first_name}}</option>
              @endforeach
          </select>
          {{-- <input type="text" class="" name="is_verified"  value="1"> Remember me <i class="input-helper"></i></label> --}}

          <div class="form-group mt-4">
            <select class="form-control" name="is_verified">
                <option value="0">Canceld</option>
                <option value="1">Completed</option>
            </select>
        </div>

          {{-- <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Country</label>
              <div class="col-sm-9">
                <select class="form-control" name="is_verified">
                  <option value="0">Canceld</option>
                  <option value="1">Completed</option>
                </select>
              </div>
            </div>
          </div> --}}

          {{-- <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="is_verified"  value="1"> Remember me <i class="input-helper"></i></label>
          </div> --}}

          {{-- <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label"> Animal Gender </label>
              <div class="col-sm-4">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="is_verified" id="membershipRadios1" value="0" checked=""> is_not_verified <i class="input-helper"></i></label>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="is_verified" id="membershipRadios2" value="1"> is_verified  <i class="input-helper"></i></label>
                </div>
              </div>
            </div>
          </div> --}}
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
            <h4 class="card-title"> <i class="mdi mdi-paw menu-icon"></i> Animal table</h4>
        <p class="card-description"> Manage Animal</p>
        </div>
        <div class="card-body">
            <table class="table " id="table1">
                <thead>

                    <tr style="text-align: center">
                      <th> # </th>
                      <th> Animal name </th>
                      <th> Animal Color </th>
                      <th> Animal Family </th>
                      <th> Animal Age </th>
                      {{-- <th> Animal Health </th> --}}
                      <th> Animal Gender </th>
                      <th> Status </th>
                      <th> Main image </th>
                      <th> Sub image 1 </th>
                      <th> Sub image 2 </th>
                      <th> Edit </th>
                      <th> Delete </th>
                    </tr>

                  </thead>
                  <tbody>
                    @foreach ($animal as $animals)
                    <tr style="text-align: center">
                      <td> {{$animals->id}} </td>
                      <td> {{$animals->name}} </td>
                      <td> {{$animals->color}} </td>
                      <td> {{$animals->family}} </td>
                      <td> {{$animals->age}} </td>
                      {{-- <td> {{$animals->health}} </td> --}}
                      <td> {{$animals->gender}} </td>
                      @if ($animals->is_verified==1)
                      <td><label class="badge badge-success">Completed</label></td>
                      @else
                      <td><label class="badge badge-danger">Pending</label></td>
                      @endif

                      <td> <img src="{{asset($animals->main_image)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
                      <td> <img src="{{asset($animals->sub_image1)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
                      <td> <img src="{{asset($animals->sub_image2)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
                      <td><a href="{{route('animal.edit',['id'=>$animals->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
                      <td><a href="{{route('animal.destroy',['id'=>$animals->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>

</section>
<!-- Basic Tables end -->

  {{-- <div class="col-lg-12 grid-margin stretch-card">
    <div class="card table-responsive">
      <div class="card-body table-responsive">
        <h4 class="card-title"> <i class="mdi mdi-paw menu-icon"></i> Animal table</h4>
        <p class="card-description"> Manage Animal</p>
        <table class="table table-bordered">
          <thead>

            <tr>
              <th> # </th>
              <th> Animal name </th>
              <th> Animal Color </th>
              <th> Animal Family </th>
              <th> Animal Age </th>
              <th> Animal Health </th>
              <th> Animal Gender </th>
              <th> Main image </th>
              <th> Sub image 1 </th>
              <th> Sub image 2 </th>
              <th> Edit </th>
              <th> Delete </th>
            </tr>

          </thead>
          <tbody>
            @foreach ($animal as $animals)
            <tr>
              <td> {{$animals->id}} </td>
              <td> {{$animals->name}} </td>
              <td> {{$animals->color}} </td>
              <td> {{$animals->family}} </td>
              <td> {{$animals->age}} </td>
              <td> {{$animals->health}} </td>
              <td> {{$animals->gender}} </td>
              <td> <img src="{{asset($animals->main_image)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
              <td> <img src="{{asset($animals->sub_image1)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
              <td> <img src="{{asset($animals->sub_image2)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
              <td><a href="{{route('animal.edit',['id'=>$animals->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
              <td><a href="{{route('animal.destroy',['id'=>$animals->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}
@endsection
