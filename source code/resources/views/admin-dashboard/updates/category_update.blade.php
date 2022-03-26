@extends('admin-dashboard.layouts.master')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form class="form-sample" action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <a href=" {{route('category.index')}} " style="text-decoration: none" ><i class="mdi mdi-close-octagon d-flex justify-content-end" style="color: black ; font-size: 25px ; "></i></a>
        <h4 class="card-title"> <i class="mdi mdi-format-list-bulleted menu-icon"></i> Category Table</h4>
          <p class="card-description"> Category Info </p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label> Category name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}"/>
                </div>
              </div>
            </div>


            <div class="mb-3">
                <label for="formFileMultiple" class="form-label"> Category Image </label>
                <input class="form-control" name="category_image" type="file" id="formFileMultiple" multiple>
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
