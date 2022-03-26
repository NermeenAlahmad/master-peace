@extends('public-site.layouts.master')
@section('content')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 70%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: fill;
        }

    </style>

    <section class="section-slide  main-slider">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1" style="background-image: url('img/adopt10.jpg');">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Adopt pet
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    Enjoy your explore
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="{{ route('categories.index' )}}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 read-more-btn">
                                    Adopt Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url('img/kkk.jpg');">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Adopt pet
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    Enjoy your explore
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="{{ route('categories.index' )}}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 read-more-btn">
                                    Adopt Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url('img/adopt11.jpg');">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Adopt pet
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    Enjoy your explore
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="{{ route('categories.index' )}}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 read-more-btn">
                                    Adopt Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url('img/adopt9.jpg');">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Adopt pet
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    Enjoy your explore
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                <a href="{{ route('categories.index' )}}"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 read-more-btn">
                                    Adopt Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Start Section 1 --}}

    <div class="sec-banner bg0 p-t-80 p-b-50 landing-section1">
        <div class="container">
            <h1 class="text-center pb-5"> Pets Available For Adoption </h1>
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{asset($category->category_image)}}" alt="{{$category->category_name}}" style="width:200px">

                        <a href="{{ route('single_category',$category->id )}}"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8" style="padding-left: 180px">
                                    {{$category->category_name}}
                                </span>

                                <span class="block1-info stext-102 trans-04" style="padding-left: 180px">

                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09" style="color: black">
                                    Adopt Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#C2F1DB" fill-opacity="0.5" d="M0,160L60,186.7C120,213,240,267,360,261.3C480,256,600,192,720,181.3C840,171,960,213,1080,202.7C1200,192,1320,128,1380,96L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#C2F1DB" fill-opacity="0.5" d="M0,160L7.3,165.3C14.5,171,29,181,44,186.7C58.2,192,73,192,87,197.3C101.8,203,116,213,131,218.7C145.5,224,160,224,175,202.7C189.1,181,204,139,218,154.7C232.7,171,247,245,262,229.3C276.4,213,291,107,305,90.7C320,75,335,149,349,170.7C363.6,192,378,160,393,154.7C407.3,149,422,171,436,160C450.9,149,465,107,480,117.3C494.5,128,509,192,524,197.3C538.2,203,553,149,567,154.7C581.8,160,596,224,611,240C625.5,256,640,224,655,208C669.1,192,684,192,698,208C712.7,224,727,256,742,224C756.4,192,771,96,785,85.3C800,75,815,149,829,170.7C843.6,192,858,160,873,144C887.3,128,902,128,916,117.3C930.9,107,945,85,960,96C974.5,107,989,149,1004,144C1018.2,139,1033,85,1047,85.3C1061.8,85,1076,139,1091,160C1105.5,181,1120,171,1135,170.7C1149.1,171,1164,181,1178,170.7C1192.7,160,1207,128,1222,133.3C1236.4,139,1251,181,1265,197.3C1280,213,1295,203,1309,197.3C1323.6,192,1338,192,1353,197.3C1367.3,203,1382,213,1396,186.7C1410.9,160,1425,96,1433,64L1440,32L1440,0L1432.7,0C1425.5,0,1411,0,1396,0C1381.8,0,1367,0,1353,0C1338.2,0,1324,0,1309,0C1294.5,0,1280,0,1265,0C1250.9,0,1236,0,1222,0C1207.3,0,1193,0,1178,0C1163.6,0,1149,0,1135,0C1120,0,1105,0,1091,0C1076.4,0,1062,0,1047,0C1032.7,0,1018,0,1004,0C989.1,0,975,0,960,0C945.5,0,931,0,916,0C901.8,0,887,0,873,0C858.2,0,844,0,829,0C814.5,0,800,0,785,0C770.9,0,756,0,742,0C727.3,0,713,0,698,0C683.6,0,669,0,655,0C640,0,625,0,611,0C596.4,0,582,0,567,0C552.7,0,538,0,524,0C509.1,0,495,0,480,0C465.5,0,451,0,436,0C421.8,0,407,0,393,0C378.2,0,364,0,349,0C334.5,0,320,0,305,0C290.9,0,276,0,262,0C247.3,0,233,0,218,0C203.6,0,189,0,175,0C160,0,145,0,131,0C116.4,0,102,0,87,0C72.7,0,58,0,44,0C29.1,0,15,0,7,0L0,0Z"></path></svg> --}}
    {{-- End Section 1 --}}

    {{-- Start Section 2 --}}
    <div class="sec-banner bg0 p-t-80 p-b-50 landing-section2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-center col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <h3 class="text-center pb-5"> Dog Adoption Articles <i class="fas fa-bone"
                            style="color: #C2F1DB"></i> </h3>
                    <img src="/assets/public-img/slider2.jpg" alt="IMG-BANNER"
                        style="width:333px; height: 243px; border-radius: 20px;">
                    <a href="https://www.humanesociety.org/resources/top-reasons-adopt-pet" target="blank"
                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 mt-4 read-more-btn"
                        tabindex="-1">
                        Read more
                    </a>
                </div>

                <div class="col-md-6 d-flex flex-column align-items-center col-xl-4 p-b-30 m-lr-auto">
                    <h3 class="text-center pb-5"> Cat Adoption Articles <i class="fas fa-paw"
                            style="color: #496076"></i> </h3>
                    <!-- Block1 -->

                    <img src="/assets/public-img/slider3.jpg" alt="IMG-BANNER"
                        style="width:333px; height: 243px; border-radius: 20px; ">
                    <a href="https://catadoptionteam.org/category/news/articles/" target="blank"
                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 mt-4 read-more-btn"
                        tabindex="-1">
                        Read more
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- End Section 2 --}}

    {{-- Start Section 3 --}}
    <div class="sec-banner bg0 p-t-80 p-b-50 landing-section3">
        <div class="container">
            <h1 class="text-center pb-5 about-h1"> About Us </h1>
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-center col-xl-4 p-b-30 m-lr-auto    about-head-section3">
                    <!-- Block1 -->
                    <h5>We're Pet Lovers Trying to Make a Difference
                        Welcome to Adopt Pet. We're all about getting homeless pets into homes.</h5>
                        <br>
                    <p> We help over 21,000 animal shelters, humane societies, SPCAs, pet rescue groups, and pet adoption
                        agencies advertise their homeless pets to millions of adopters a month, all for free. And now, we’re
                        a Kinship company too. Haven’t heard of them yet? They’re a coalition of brands, teams, and
                        partners, all using their individual strengths to help bring more care to pet care. </p>

                </div>

                <div class="col-md-6 d-flex flex-column align-items-center col-xl-4 p-b-30 m-lr-auto">
                    <h3 class="text-center pb-5" style="color: #496076"> Cat Adoption Articles <i class="fas fa-paw"
                        style="color: #C2F1DB"></i> </h3>
                    <!-- Block1 -->

                    <img src="/assets/public-img/adopt4.png" alt="IMG-BANNER"
                        style="width:333px; height: 243px; border-radius: 20px; ">
                </div>

            </div>
        </div>
    </div>

    {{-- End Section 3 --}}

    {{-- jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj --}}

<div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="hd">Why People Believe in Us</div>
    <p><small class="text-muted">Always render more and better service than <br />is expected of you, no matter what your ask may be.</small></p>
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"> <img class="img" src="/assets/public-img/nomoney.png" />
                    <div class="shadow"></div>
                    <div class="card-title"> We're Free </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">We spent thousands of hours creating on algorithm that does this for you in seconds. We collect a small fee from the professional after they meet your</small> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-3 col-12 ml-2">
            <div class="card-content">
                <div class="card-body"> <img class="img" src="/assets/public-img/ads.png" />
                    <div class="card-title"> We're Unbiased </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted"> We don't accept ads from anyone. We use actual data to match you who the best person. </small> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-3 col-12 ml-2">
            <div class="card-content">
                <div class="card-body"> <img class="img rck" src="/assets/public-img/kk.png" />
                    <div class="card-title"> We Guide you </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">Re-homing or adopting a pet  is often the largest transaction anyone does in their life. we guide you through the process so that you can be confident in reaching your dream outcome.</small> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj --}}



    {{-- tttttttttttttttttttttttttttttttttttttttttttttttttttttt --}}

    <section class="home-testimonial">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center testimonial-pos">
                <div class="col-md-12 pt-4 d-flex justify-content-center">

                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h2>Explore the experience</h2>
                </div>
            </div>
            <section class="home-testimonial-bottom">
                <div class="container testimonial-inner">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">“At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.”</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </section>


    {{-- tttttttttttttttttttttttttttttttttttttttttttttttttttttt --}}

    {{-- Start Section 4 --}}
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-center col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->

                    <img src="/assets/public-img/Capture.png" alt="IMG-BANNER"
                        style="width:333px; height: 243px;">
                </div>

                <div class="col-md-6 d-flex flex-column align-items-left col-xl-4 p-b-30 m-lr-auto section4">
                    <!-- Block1 -->
                    <h3 class="text-start"> Do you want to adopt?</h3>
                        <br>
                    <p> Discover how adopt pets website can help you to find a pet. </p>

                    <a href="{{ route('categories.index' )}}"
                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 mt-4 w-5 read-more-btn-section4"
                    tabindex="-1">
                    All categories
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- End Section 4 --}}

    {{-- Start Section 5 --}}

    {{-- End Section 5 --}}

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>



@endsection
