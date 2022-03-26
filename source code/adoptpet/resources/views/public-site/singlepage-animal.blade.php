
@extends('public-site.layouts.master')
@section('content')


<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots "></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w "></div>
                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="{{asset($singleanimal->main_image)}}"  >
                                <div class="wrap-pic-w pos-relative w-75">
                                    <img src="{{asset($singleanimal->main_image)}}" height="700px" alt="IMG-PRODUCT">
                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset($singleanimal->main_image)}}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-slick3" data-thumb="{{asset($singleanimal->sub_image1)}}">
                                <div class="wrap-pic-w pos-relative w-75">
                                    <img src="{{asset($singleanimal->sub_image1)}}" height="700px" alt="IMG-PRODUCT">
                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset($singleanimal->sub_image1)}}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-slick3" data-thumb="{{asset($singleanimal->sub_image2)}}">
                                <div class="wrap-pic-w pos-relative w-75">
                                    <img src="{{asset($singleanimal->sub_image2)}}" height="700px" alt="IMG-PRODUCT">
                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset($singleanimal->sub_image2)}}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End product detail -->
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">

                    </h4>

                    <span class="mtext-106 cl2">
                            <h4 class="mb-4" style="color: #496076"> Animal Info </h4>
                             <div class="row mt-2">
                                <div class="col-md-6"> <span style="font-size: 14px"> Name: {{$singleanimal->name}} </span></div>
                                <div class="col-md-6"> <span style="font-size: 14px"> Age: {{$singleanimal->age}} </span></div>
                            </div>
                            <hr style=" height: 0px;">
                            <div class="row mt-3">
                                <div class="col-md-6"><span style="font-size: 14px"> Color: {{$singleanimal->color}} </span></div>
                                <div class="col-md-6"><span style="font-size: 14px"> {{$singleanimal->family}} </span></div>
                            </div>
                            <hr style=" height: 0px;">
                            <div class="row mt-3">
                                <div class="col-md-6"><span style="font-size: 14px"> Gender: {{$singleanimal->gender}} </span></div>
                                <div class="col-md-6"><span style="font-size: 14px"> Health: {{$singleanimal->health}} </span></div>
                            </div>
                            <hr style=" height: 0px;">
                            <div class="row mt-3">
                                <div class="col-md-6"><span style="font-size: 14px"> Description: {{$singleanimal->description}} </span></div>
                            </div>
                            <h4 class="mt-5" style="color: #496076"> Owner Info </h4>
                             <div class="row mt-2">
                                <div class="col-md-6"> <span style="font-size: 14px"> First Name: {{$singleanimal->user->first_name}} </span></div>
                                <div class="col-md-6"> <span style="font-size: 14px"> Last Name: {{$singleanimal->user->last_name}} </span></div>
                            </div>
                            <hr style=" height: 0px;">
                            <div class="row mt-3">
                                <div class="col-md-6"><span style="font-size: 14px"> Phone: {{$singleanimal->user->phone}} </span></div>
                                <div class="col-md-6"><span style="font-size: 14px"> Address: {{$singleanimal->user->address}} </span></div>
                            </div>
                            <hr style=" height: 0px;">
                            <div class="row mt-3">
                                <div class="col-md-6"><span style="font-size: 14px"> Email: {{$singleanimal->user->email}} </span></div>
                            </div>

                    </span>
                    <p class="stext-102 cl3 p-t-23 w-100">

                    </p>
                </div>
            </div>
        </div>

        <!-- comment  -->

    </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>
</section>
@endsection
