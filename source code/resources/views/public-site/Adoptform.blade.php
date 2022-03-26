@extends('public-site.layouts.master')
@section('content')
{{--
<form action="{{route("animalForm.store")}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="main-register">

    <h3 style="color: #496076; padding-top:20px"> Show your pet for adoption </h3>
    @if(session()->has('message'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span>
            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
@endif

<div class='signup-container'>
    <div class='left-container'>
        <h1>Yay, pets! Ensure your pet gets the best care!</h1>
      <div class='puppy'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'>
      </div>
    </div>
    <div class='right-container'>
      <header>

        <div class='set'>
          <div class='pets-name'>
            <label for='pets-name'>Pet's Name</label>
            <input id='pets-name' name="name" placeholder="" type='text'>
          </div>


          <div class='pets-color'>
            <label for='pets-color'>Pet's Color</label>
            <input id='pets-color' name="color" placeholder="" type='text'>
          </div>


        </div>
        <div class='set'>
          <div class='pets-breed'>
            <label for='pets-breed'>Pet's Family</label>
            <input id='pets-breed' name="family" placeholder="" type='text'>
          </div>


          <div class='pets-gender'>
            <label for='pet-gender-female'> Pet's Gender</label>
            <div class='radio-container'>
              <input checked='' id='pet-gender-female' name="gender" type='radio' value='female'>
              <label for='pet-gender-female'>Female</label>
              <input id='pet-gender-male' name="gender" type='radio' value='male'>
              <label for='pet-gender-male'>Male</label>
            </div>
          </div>


        </div>

        <div class='set'>
            <div class='pets-breed'>
              <label for='pets-breed'>Pet's Age</label>
              <input id='pets-age' name="age" placeholder="" type='text'>
            </div>
            <div class='pets-health'>
              <label for='pets-health'>Pet's health</label>
              <input id='pets-health' name="health" placeholder= "" type='text'>
            </div>
          </div>


          <div class='set'>
             <div class='pets-photo'>
            <div class="mb-3">
                <label for='pets-upload'>Upload a photo</label>
                <input class="form-control" name="main_image" type="file" id="formFile">
              </div>
          </div>

          <div class='pets-photo'>
            <div class="mb-3">
                <label for='pets-upload'>Upload a photo</label>
                <input class="form-control" name="sub_image2" type="file" id="formFile">
              </div>
          </div>
          </div>
          <div class='set'>
          <div class='pets-photo'>
            <div class="mb-3">
                <label for='pets-upload'>Upload a photo</label>
                <input class="form-control" name="sub_image1" type="file" id="formFile">
              </div>
          </div>
        </div>


        <div class="pets-category">
            <select name="category" id="inputState" class="form-control mb-4">
                <option selected>Choose Category</option>
                     @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                     @endforeach
            </select>
        </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
          </div>
      </header>
      <footer>
        <div class='set'>

          <button type="submit" id='next'>Next</button>
        </div>
      </footer>
    </div>
  </div>
</div>
</form> --}}

<style>
    body {
    background: white;
    background-image: url('/assets/public-img/slider2.jpg');
    background-size: cover;
    background-repeat: no-repeat
}

.form-control:focus {
    box-shadow: none;
    border-color: #C2F1DB
}

.profile-button {
    background: #496076;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #C2F1DB
}

/* .profile-button:focus {
    background: #C2F1DB;
    box-shadow: none
}

.profile-button:active {
    background: #496076;
    box-shadow: none
} */

.back {
    color: #5a967a !important;
    cursor: pointer
}

.back:hover {
    color: #496076 !important;
    cursor: pointer
}

.form-img{
    height: 400px !important;
}
/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>
{{-- <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    This is an alert box.
  </div> --}}
<form action="{{route("animalForm.store")}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="container rounded bg-white mt-5">
    <div class="row mb-5 mt-5" style="background-color:#eee">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="form-img" src="/assets/public-img/dogs-form2.jpg" width="100%" alt="">
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                      <a href="{{ route('homepage.index' )}}">  <h6 class="back">Back to home</h6></a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><input type="text" class="form-control" name="name" placeholder=" Pet Name"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="color"  placeholder="Pet Color"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="age"    placeholder="Pet Age"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="family" placeholder="Pet Family"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><textarea type="text" class="form-control" name="health"     cols="30" rows="4"  placeholder="health"></textarea>  </div>
                    <div class="col-md-6"><textarea type="text" class="form-control" name="description" cols="30" rows="4" placeholder="description"></textarea> </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><div class="pets-category">
                        <select name="category" id="inputState" class="form-control mb-4">
                            <option selected>Choose Category</option>
                                 @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                 @endforeach
                        </select>
                    </div>  </div>

                    <div class="col-md-6">
                        {{-- <p class="mb-3">Gender:</p> --}}
                         <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                        <label class="" for="inlineRadio1">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                        <label class="" for="inlineRadio2">Female</label>
                      </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                                <label for='pets-upload'>Upload main image </label>
                                <input class="form-control" name="main_image" type="file" id="formFile">
                              </div>
                        <div class="col-md-6">
                                <label for='pets-upload'>Upload sub image1 </label>
                                <input class="form-control" name="sub_image1" type="file" id="formFile">
                             </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                                <label for='pets-upload'>Upload sub image2 </label>
                                <input class="form-control" name="sub_image2" type="file" id="formFile">
                              </div>
                    </div>
                </div>
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit"> Send </button></div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
