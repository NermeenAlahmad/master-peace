@extends('public-site.layouts.master')
@section('content')

<link rel="stylesheet" href="style.css">
	<!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
        <!-- section -->

        <!-- Content page -->
<section class="bg0 p-t-100 p-b-60 mt-5">
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-lg-3 p-b-80">
                <div class="side-menu">
                    <div class="bor17 of-hidden pos-relative">
                    <form action="{{ route('search') }}" method="get">
                            <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

                            <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04" name="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>

                </div>
              </div>

              <div class="col-md-8 col-lg-9 p-b-80">
                <div class="row d-flex flex-wrap">

                  <!-- start products -->
                  @isset($animal)
                  @if($animal->isNotEmpty())
                    @foreach ($animal as $animal)
                   <div class="col-sm-6 col-md-3 col-lg-4 p-b-35 isotope-item women">
                   <!-- Block2 -->
                    <div class="block2">
                       <div class="block2-pic hov-img0">
                           <img src="{{asset($animal->main_image)}}" alt="IMG-PRODUCT">

                           <a href="{{ route('single_animal',$animal->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                View
                           </a>
                       </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                           <div class="block2-txt-child1 flex-col-l ">
                               <a href="" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$animal->name}}
                               </a>


                               <span class="stext-105 cl3">
                                    <h4 class="d-inline">  </h4>
                                    <del style="color:red"> </del>

                               </span>

                           </div>
                       </div>
                    </div>
                  </div>
                  @endforeach
                    @else
                        <div>

                            <h2>No Result!</h2>
                        </div>
                    @endif
                    @endisset



               <!-- products -->


                </div>


            </div>
        </div>
    </div>
</section>
        <!-- end section -->

    </div>
</div>
@endsection
