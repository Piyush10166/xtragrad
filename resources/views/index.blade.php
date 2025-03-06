@include('layouts.header')

<main class="rbt-main-wrapper">
    <!-- Start Banner Area  -->
    <div class="rbt-banner-area rbt-banner-18">
        <div class="wrapper">
            <div class="shape-wrap">
                <div class="shadow-1">
                </div>
                <div class="shadow-2">
                </div>
                <div class="shadow-3">
                </div>
                <div class="shadow-4">
                </div>
                <div class="glass">
                    <img src="images/i-glass.png" alt="Banner Shape">
                </div>
                <div class="union">
                    <img src="images/o-union.png" alt="Banner Shape">
                </div>
                <div class="dot-shape-1 scene">
                    <span data-depth="1">
                        <img src="images/ic-dots.png" alt="Banner Shape">
                    </span>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="inner position-relative">
                            <h6 class="subtitle"><span class="theme-gradient">Professional & Lifelong Learning</span></h6>
                            <h1 class="sec-title">Online Learning Now In Your <span class="theme-gradient">Fingertips</span></h1>
                            <p class="description">Enrolled by <span class="w-500"> 2L+ Students</span></p>
                            <div class="button-group">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Started Now</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="line-arrow scene">
                                <span data-depth="1">
                                    <img src="images/i-line-arrow.png" alt="Banner Shape">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="banner-wrap">
                            <div class="banner" data-parallax="{" x":="" 0,="" "y":="" 60}"="">
                                <img src="images/i-banner.png" alt="Banner">
                            </div>
                            <div class="feature">
                                <span>
                                    <img src="images/o-icon-1.png" alt="">
                                </span>
                                <div>
                                    <h6 class="feature-title">Your</h6>
                                    <p class="feature-description">Admissoin Complete</p>
                                </div>
                            </div>
                            <div class="enrolled">
                                <div class="enrolled-cont">
                                    <span>
                                        <img src="images/o-icon-2.png" alt="">
                                    </span>
                                    <div>
                                        <h6 class="feature-title">2L+</h6>
                                        <p class="feature-description">Enrolled Students</p>
                                    </div>
                                </div>
                                <div class="profile-share">
                                    <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                        <img src="images/art-stu-2.png" alt="education">
                                    </a>
                                    <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                        <img src="images/art-stu-1.png" alt="education">
                                    </a>
                                    <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0">
                                        <img src="images/art-stu-3.png" alt="education">
                                    </a>
                                    <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                        <img src="images/i-team.png" alt="education">
                                    </a>
                                </div>
                            </div>
                            <div class="feature item-2">
                                <span>
                                    <img src="images/o-icon-3.png" alt="">
                                </span>
                                <div>
                                    <h6 class="feature-title">99%</h6>
                                    <p class="feature-description">Satisfied</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Brand -->
                <div class="brand-box-wrap">
                    <div class="uion">
                        <img src="images/i-uion-big.png" alt="Banner Shape">
                    </div>
                    <div class="leaf" data-parallax="{" x":="" 0,="" "y":="" -30}"="">
                        <img src="images/i-leaf.png" alt="Banner Shape">
                    </div>
                    <div class="brand-box text-center bg-white">
                        <span class="b1 w-600 mb-0">Making Sensitive Clients More Valuable For Companies Like</span>
                        <ul class="brand-list brand-style-3 justify-content-start justify-content-lg-between mt--30">
                            <li><a href="#"><img src="logos/adobe_logo.svg" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="logos/autodesk_logo.svg" alt="Brand Image"></a></li>
                            {{-- <li><a href="#"><img src="logos/internship_logo.svg" alt="Brand Image"></a></li> --}}
                            <li><a href="#"><img src="logos/skillIndia_logo_mobile.svg" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="logos/microsoft_logo.svg" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="logos/nasscom_logo.svg" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="logos/nsdc_logo_mobile.svg" alt="Brand Image"></a></li>
                            <li><a href="#"><img src="logos/googleForEducation.png" alt="Brand Image"></a></li>
                           
                        </ul>
                    </div>
                </div>
                <!-- End Brand -->
            </div>
        </div>
    </div>
    <!-- End Banner Area  -->

    <!-- Start Category Area -->
    <div class="rbt-category-area rbt-section-gapBottom">
        <div class="container">
            <div class="section-title text-center mb--55">
                <h6 class="b2 mb--15"><span class="theme-gradient">Popular Categories</span></h6>
                <h2 class="title w-600">Explore Top Courses Categories <br> That <span class="theme-gradient">Change Yourself</span></h2>
            </div>
            <div class="swiper category-activation-one rbt-arrow-between icon-bg-gray rbt-dot-bottom-center gutter-swiper-30 pb--50">
                <div class="swiper-wrapper">
                    @foreach($categories as $category)
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <a class="rbt-cat-box rbt-cat-box-1 text-center" href="#">
                                    <div class="inner">
                                        <div class="icons">
                                            {{-- <img src="{{ $category->icon }}" alt="Icons Images"> --}}
                                            <img src="images/smartphone-1818253_1280-removebghd.png" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">{{ $category->name }}</h5>
                                            <div class="read-more-btn">
                                                <span class="rbt-btn-link">{{ $category->courses_count }} Courses<i class="feather-arrow-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="rbt-swiper-arrow rbt-arrow-left">
                    <div class="custom-overfolow">
                        <i class="rbt-icon feather-arrow-left"></i>
                        <i class="rbt-icon-top feather-arrow-left"></i>
                    </div>
                </div>
                <div class="rbt-swiper-arrow rbt-arrow-right">
                    <div class="custom-overfolow">
                        <i class="rbt-icon feather-arrow-right"></i>
                        <i class="rbt-icon-top feather-arrow-right"></i>
                    </div>
                </div>
                <div class="rbt-swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- End Category Area -->

    <!-- Start Course Area -->
    <div class="rbt-course-area rbt-sec-cir-shadow-1 bg-color-extra2 rbt-section-gap">
        <div class="gradient-shape-top"></div>
        <div class="gradient-shape-bottom"></div>
        <div class="container">
            <div class="row mb--30">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h6 class="b2 mb--15">
                            <span class="theme-gradient">Our Course</span>
                        </h6>
                        <h2 class="title w-600">Limitless Learning, More <br> <span class="theme-gradient">Possibilities</span></h2>
                    </div>
                </div>
            </div>

            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="rbt-course-tab-button-wrap">
                        <ul class="rbt-course-tab-button nav nav-tabs" id="rbt-myTab" role="tablist">
                            @foreach($categories as $category)
                                <li class="nav-item" role="presentation">
                                    <button class="{{ $loop->first ? 'active' : '' }}" id="category-{{ $category->id }}-tab" data-bs-toggle="tab" data-bs-target="#category-{{ $category->id }}" type="button" role="tab" aria-controls="category-{{ $category->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                        <span class="filter-text">{{ $category->name }}</span>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="rbt-myTabContent">
                        @foreach($categories as $category)
                            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="category-{{ $category->id }}-tab">
                                <div class="row g-5">
                                    @foreach($category->courses as $course)
                                        @php
                                            $images = json_decode($course->images, true);
                                            $firstImage = $images[0] ?? 'image.png';
                                        @endphp
                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-04 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="{{ route('course.details', $course->id) }}">
                                                        <img src="{{ asset('storage/' . $firstImage) }}" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>{{ $course->lessons_count }} Lessons</li>
                                                        <li><i class="feather-users"></i>{{ $course->students_count }} Students</li>
                                                    </ul>
                                                    <h4 class="rbt-card-title"><a href="{{ route('course.details', $course->id) }}">{{ $course->name }}</a></h4>
                                                    <p class="rbt-card-text">{{ $course->short_description }}</p>
                                                    <div class="rbt-review">
                                                        <div class="rating">
                                                            @for($i = 0; $i < 5; $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <h6 class="current-price mb-0">${{ $course->price }}</h6>
                                                            @if($course->original_price)
                                                                <span class="off-price version-02">${{ $course->original_price }}</span>
                                                            @endif
                                                        </div>
                                                        <a class="rbt-btn-link color-primary" href="{{ route('course.details', $course->id) }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="rbt-myTabContent">
                        @foreach($categories as $category)
                            <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="category-{{ $category->id }}-tab">
                                <div class="row g-5">
                                    @foreach($category->courses as $course)
                                        @php
                                            $images = json_decode($course->images, true);
                                            $firstImage = $images[0] ?? 'image.png';
                                        @endphp
                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <a href="{{ route('course.detail') }}" class="rbt-card-link">
                                                <div class="rbt-card variation-04 rbt-hover">
                                                    <div class="rbt-card-img">
                                                        <img src="{{ asset('storage/' . $firstImage) }}" alt="Card image">
                                                    </div>
                                                    <div class="rbt-card-body">
                                                        <ul class="rbt-meta">
                                                            <li><i class="feather-book"></i>{{ $course->lessons_count }} Lessons</li>
                                                            <li><i class="feather-users"></i>{{ $course->students_count }} Students</li>
                                                        </ul>
                                                        <h4 class="rbt-card-title">{{ $course->name }}</h4>
                                                        <p class="rbt-card-text">{{ $course->short_description }}</p>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                @for($i = 0; $i < 5; $i++)
                                                                    <i class="fas fa-star"></i>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <div class="rbt-card-bottom">
                                                            <div class="rbt-price">
                                                                <h6 class="current-price mb-0">${{ $course->price }}</h6>
                                                                @if($course->original_price)
                                                                    <span class="off-price version-02">${{ $course->original_price }}</span>
                                                                @endif
                                                            </div>
                                                            <span class="rbt-btn-link color-primary">Enroll Course<i class="feather-arrow-right"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- End Single Course  -->
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            

            <div class="row mt--55 mt_sm--50">
                <div class="col-lg-12">
                    <div class="load-more-btn text-center">
                        <a class="rbt-btn btn-gradient btn-lg btn-mobile hover-icon-reverse" href="course-with-tab-two.html">
                                <span class="icon-reverse-wrapper">View All Courses</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Area -->

    <!-- Start Video Area  -->
    <div class="rbt-video-area video-section-03 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center position-relative">
                <div class="union-shape">
                    <img src="images/v-union.png" alt="Union Shape">
                </div>
                <div class="star-shape">
                    <img src="images/v-star.png" alt="Shape">
                </div>
                <div class="col-lg-6">
                    <div class="video-popup-wrapper">
                        <img class="w-100 rbt-radius" src="images/video-09.png" alt="Video Images">
                        <a class="rbt-btn rounded-player popup-video position-to-top rbtplayer border-rounded" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                            <span><i class="feather-play"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_lg--0 pl_md--0 pl_sm--0">
                        <div class="section-title text-start">
                            <h6 class="b2 mb--15"><span class="theme-gradient">Why Choose Us</span></h6>
                            <h2 class="title w-600">Courses Focused on <br> Building Strong Foundational Skills for <span class="theme-gradient">Career Growth</span></h2>
                            <div class="rbt-feature-wrapper mt--40">
                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Flexible Classes</h6>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Learn From Anywhere</h6>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-coral-opacity">
                                        <i class="feather-monitor"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Skill-Based Learning</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area  -->

    <!-- Start Testimonial Area -->
    <div class="rbt-testimonial-area bg-color-white rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--60 mb_sm--50">
                    <div class="section-title text-center">
                        <h6 class="b2 mb--15"><span class="theme-gradient">Testimonials</span></h6>
                        <h2 class="title">Student's <span class="theme-gradient">Feedback</span></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-item-3-activation swiper rbt-arrow-between icon-bg-gray rbt-dot-bottom-center pb--50 gutter-swiper-30">
                <div class="swiper-wrapper">

                    <!-- Start Single Testimonial  -->
                    <div class="swiper-slide">
                        <div class="single-slide">
                            <div class="rbt-testimonial-box">
                                <div class="inner shadow-11">
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="images/client-01.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Martha Maldonado</h5>
                                            <span>Executive Chairman <i>@ Google</i></span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                            auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                        <div class="rating mt--20">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="swiper-slide">
                        <div class="single-slide">
                            <div class="rbt-testimonial-box">
                                <div class="inner shadow-11">
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="images/client-02.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Michael D. Lovelady</h5>
                                            <span>CEO <i>@ Google</i></span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                            auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                        <div class="rating mt--20">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="swiper-slide">
                        <div class="single-slide">
                            <div class="rbt-testimonial-box">
                                <div class="inner shadow-11">
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="images/client-03.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Valerie J. Creasman</h5>
                                            <span>Executive Designer <i>@ Google</i></span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                            auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                        <div class="rating mt--20">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="swiper-slide">
                        <div class="single-slide">
                            <div class="rbt-testimonial-box">
                                <div class="inner shadow-11">
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="images/client-03.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Valerie J. Creasman</h5>
                                            <span>Executive Designer <i>@ Google</i></span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                            auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                        <div class="rating mt--20">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="swiper-slide">
                        <div class="single-slide">
                            <div class="rbt-testimonial-box">
                                <div class="inner shadow-11">
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="images/client-03.png" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Valerie J. Creasman</h5>
                                            <span>Executive Designer <i>@ Google</i></span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                            auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                        <div class="rating mt--20">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>

                <div class="rbt-swiper-arrow rbt-arrow-left">
                    <div class="custom-overfolow">
                        <i class="rbt-icon feather-arrow-left"></i>
                        <i class="rbt-icon-top feather-arrow-left"></i>
                    </div>
                </div>

                <div class="rbt-swiper-arrow rbt-arrow-right">
                    <div class="custom-overfolow">
                        <i class="rbt-icon feather-arrow-right"></i>
                        <i class="rbt-icon-top feather-arrow-right"></i>
                    </div>
                </div>

                <div class="rbt-swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->

    <!-- Start Blog Area -->
    <div class="rbt-rbt-blog-area rbt-section-gap bg-color-extra2 rbt-sec-cir-shadow-1">
        <div class="gradient-shape-top version-02"></div>
        <div class="gradient-shape-bottom version-02"></div>
        <div class="container">
            <div class="row mb--60 mb_sm--50 g-5 align-items-end">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="section-title text-start">
                        <h6 class="b2 mb--15"><span class="theme-gradient">News & Blog</span></h6>
                        <h2 class="title">Have a Look on <span class="theme-gradient">Our Update</span></h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="blog.html">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">View All Posts</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="images/instuctor-blog-01.png" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Difficult Things About Education.</a></h5>
                            <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Read
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"></path><path stroke-linecap="square" d="M.663 5.572h14.594"></path></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="images/coaching-blog-02.png" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Learn How More Money With
                                    lms.</a></h5>
                            <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Read
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"></path><path stroke-linecap="square" d="M.663 5.572h14.594"></path></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="images/instuctor-blog-02.png" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Understand The Background Of
                                    lms.</a></h5>
                            <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Read
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"></path><path stroke-linecap="square" d="M.663 5.572h14.594"></path></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Newsletter Area -->
    <div class="rbt-newsletter-area newsletter-style-2 bg-gradient-7 rbt-section-gap">
        <div class="container">
            <div class="row row--15 align-items-center">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15 color-white">Get Latest Histudy Update</h6>
                            <h2 class="title color-white w-600"><strong>Subscribe</strong> Our Newsletter</h2>
                            <p class="description color-white mt--20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam explicabo sit est eos earum reprehenderit inventore nam autem corrupti rerum!</p>
                        </div>
                        <form action="#" class="newsletter-form-1 mt--40">
                            <input type="email" placeholder="Enter Your E-Email">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Subscribe</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </form>
                        <span class="note-text color-white mt--20">No ads, No trails, No commitments</span>

                        <div class="row row--15 mt--50 justify-content-center">
                            <!-- Start Single Counter -->
                            <div class="col-lg-3 col-md-6 col-sm-6 single-counter">
                                <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                    <div class="inner">
                                        <div class="content">
                                            <h3 class="counter color-white w-600"><span class="odometer rbt-font-primary" data-count="500">00</span>
                                            </h3>
                                            <h5 class="title color-white">Successfully Trained</h5>
                                            <span class="subtitle color-white">Learners & counting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter -->

                            <!-- Start Single Counter -->
                            <div class="col-lg-3 col-md-6 col-sm-6 single-counter mt_mobile--30">
                                <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                    <div class="inner">
                                        <div class="content">
                                            <h3 class="counter color-white w-600"><span class="odometer rbt-font-primary" data-count="100">00</span>
                                            </h3>
                                            <h5 class="title color-white">Certification Students</h5>
                                            <span class="subtitle color-white">Online Course</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area -->

    @include('layouts.footer')
</main>