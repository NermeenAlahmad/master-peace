@extends('admin-dashboard.layouts.master')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if(session()->has('message'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span>
            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
@endif
        <form class="form-sample" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <h4 class="card-title"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> Category Table</h4>
          <p class="card-description"> Category Info </p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label> Category name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="category_name"/>
                </div>
              </div>
            </div>

            {{-- <div class="form-group">
                <label>File upload</label>
                <input type="file" name="category_image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info"  placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
            </div> --}}


            <div class="mb-3">
                <label for="formFileMultiple" class="form-label"> Category Image </label>
                <input class="form-control" name="category_image" type="file" id="formFileMultiple" multiple>
              </div>


            {{-- <input type="file" name="category_image" id=""> --}}

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
            <h4 class="card-title"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> Category Table</h4>
            <p class="card-description"> Manage Category </p>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                      <th> # </th>
                      <th> Category name </th>
                      <th> Category image </th>
                      <th> Edit </th>
                      <th> Delete </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <td> {{$category->id}} </td>
                      <td> {{$category->category_name}}</td>
                      <td> <img src="{{asset($category->category_image)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
                      <td><a href="{{route('category.edit',['id'=>$category->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
                      <td><a href="{{route('category.destroy',['id'=>$category->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>

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
      <div class="card-body">
        <h4 class="card-title"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> Category Table</h4>
        <p class="card-description"> Manage Category </p>
        <table class="table table-bordered" style="text-align: center">
          <thead>
            <tr>
              <th> # </th>
              <th> Category name </th>
              <th> Category image </th>
              <th> Edit </th>
              <th> Delete </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td> {{$category->id}} </td>
              <td> {{$category->category_name}}</td>
              <td> <img src="{{asset($category->category_image)}}" style="border-radius: 0px ; width:80px ; height: 80px " alt=""> </td>
              <td><a href="{{route('category.edit',['id'=>$category->id])}}"><i class="mdi mdi-pencil-box-outline" style="color: black ; font-size: 25px ;"></i></a></td>
              <td><a href="{{route('category.destroy',['id'=>$category->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}
@endsection
