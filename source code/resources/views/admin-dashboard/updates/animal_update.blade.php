@extends('admin-dashboard.layouts.master')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="form-sample" action="{{route('animal.update',['id'=>$animal->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <a href=" {{route('animal.index')}} " style="text-decoration: none" ><i class="mdi mdi-close-octagon d-flex justify-content-end" style="color: black ; font-size: 25px ; "></i></a>
            <h4 class="card-title"> <i class="mdi mdi-paw menu-icon"></i> Animals form</h4>



          <p class="card-description"> Animal info </p>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="name" value="{{$animal->name}}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Color </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="color" value="{{$animal->color}}"/>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Family </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="family" value="{{$animal->family}}"/>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Animal Age </label>
                  <div class="col-sm-9">
                    <input type="text"  min="1" class="form-control" name="age" value="{{$animal->age}}" />
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Animal Health </label>
                <div class="col-sm-9">
                    <textarea id="" cols="30" rows="10" class="form-control" name="health" >{{$animal->health}}</textarea>

                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Animal Description </label>
                  <div class="col-sm-9">
                    <textarea id="" cols="30" rows="10" class="form-control" name="description" >{{$animal->description}}</textarea>
                  </div>
                </div>
              </div>
          </div>


          <div class="row">

              {{-- <div class="form-group">
                <label> Main image </label>
                <input type="file" name="main_image" class="file-upload-default">
                <div class="input-group col-xs-6">
                  <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
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

            {{-- <div class="form-group">
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

              <div class="form-group">
                <select name="category" id="inputState" class="form-control">
                    <option selected>Choose Category</option>
                    @foreach($categories as $category)
                    @if ($animal->category_id == $category->id)
                    <option selected value="{{$category->id}}">{{$category->category_name}}</option>
                    @else
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endif
                    @endforeach
          </select>

          <div class="form-group mt-4">
            <select class="form-control" name="is_verified">
                <option value="0">Canceld</option>
                <option value="1" {{$animal->is_verified==1?"checked":""}}>Completed</option>
            </select>
        </div>


          {{-- <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Country</label>
              <div class="col-sm-9">
                <select class="form-control" name="is_verified">
                  <option value="0">Canceld</option>
                  <option value="1" {{$animal->is_verified==1?"checked":""}}>Completed</option>
                </select>
              </div>
            </div>
          </div> --}}

          {{-- <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" {{$animal->is_verified==1?"checked":""}} class="form-check-input" name="is_verified"  value="1"> Remember me <i class="input-helper"></i></label>
          </div> --}}
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
