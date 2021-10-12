@extends('layout.app')

@section("header")
    <div class="page-container">
        <div class="layout-container">
            <div class="nav-v2 nav-visitor top-nav-visitor-ia">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @guest
                            @section("header")
                                <div class="page-container">
                                    <div class="layout-container">
                                        <div class="nav-v2 nav-visitor top-nav-visitor-ia">
                                            @include('inc.outside.nav')
                                            @include('inc.outside.categories')
                                        </div>
                                    </div>
                                </div>
                            @endsection
                            @else
                            @if(Auth::user()->type === 'seller')
                            @endif
                            @if(Auth::user()->type === 'buyer')
                            @endif
                        @endguest
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="page-wrapper">
        <section class="main-footer-wrapper" style="position:relative">
            <main class=" main--no-" style="overflow: hidden;">
                <div class="hero⤍HeroImage⤚20uLT">
                    <div class="pph-row">
                        <div class="hero__container⤍HeroImage⤚344Vh">
                            <div class="pph-col-xs-12 pph-col-sm-12 pph-col-md-12 pph-col-lg-6 pph-col-xl-7">
                                <div class="hero__slider-container⤍HeroImage⤚1WXiq">
                                    <div class="image-slider⤍HeroImageSlider⤚1vhaq">
                                        <div class="owl-carousel image-slider__content⤍ImageSlider⤚Z88Ys" id="slider__container_v1" :items="1" :loop="true" :rtl="true" :mouseDrag="false" :margin="10" :autoplayTimeout="4000" :autoplayHoverPause="true" :navigation="true" :autoplay="true" :nav="false">								
                                            <li class="image-slider__slide⤍HeroImageSlider⤚3oHN4 undefined image-slide⤍ImageSlide⤚HPkac image-slide--active⤍ImageSlide⤚3jxc3">
                                                <div class="image-slide⤍HeroImageSlide⤚1sY_u">
                                                    <picture>
                                                        <source srcset="https://mohamedkars.000webhostapp.com/assets/images/08.png" media="(min-width: 54rem)" sizes="(min-width: 54rem) 100vw" type="image/webp">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/08.png" alt="interface design" sizes="100vw" width="760" height="618">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="image-slider__slide⤍HeroImageSlider⤚3oHN4 undefined image-slide⤍ImageSlide⤚HPkac image-slide--active⤍ImageSlide⤚3jxc3">
                                                <div class="image-slide⤍HeroImageSlide⤚1sY_u">
                                                    <picture>
                                                        <source srcset="https://mohamedkars.000webhostapp.com/assets/images/2.png" media="(min-width: 54rem)" sizes="(min-width: 54rem) 100vw" type="image/webp">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/2.png" alt="interface design" sizes="100vw" width="760" height="618">
                                                    </picture>
                                                </div>
                                            </li>
                                            <li class="image-slider__slide⤍HeroImageSlider⤚3oHN4 undefined image-slide⤍ImageSlide⤚HPkac image-slide--active⤍ImageSlide⤚3jxc3">
                                                <div class="image-slide⤍HeroImageSlide⤚1sY_u">
                                                    <picture>
                                                        <source srcset="https://mohamedkars.000webhostapp.com/assets/images/1.png" media="(min-width: 54rem)" sizes="(min-width: 54rem) 100vw" type="image/webp">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/1.png" alt="interface design" sizes="100vw" width="760" height="618">
                                                    </picture>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="hero__freelancer-card⤍HeroImage⤚1sQR6">
                                        <div class="card⤍FreelancerMiniCard⤚3dHBe">
                                            <picture class="card__image⤍FreelancerMiniCard⤚2QdxO enterDone⤍FreelancerMiniCard⤚S7QaH">
                                                <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-7/profile-pic/profile-pic.webp 1x, https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-7/profile-pic/profile-pic@2x.webp 2x" media="(min-width: 54rem)" sizes="(min-width: 54rem) 100vw" type="image/webp">
                                                <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-7/profile-pic/profile-pic.png 1x, https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-7/profile-pic/profile-pic@2x.png 2x" media="(min-width: 54rem)" sizes="(min-width: 54rem) 100vw" type="image/png">
                                                <img src="https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-7/profile-pic/profile-pic.png" alt="freelancer">
                                            </picture>
                                            <h6 class="title-nano card__job⤍FreelancerMiniCard⤚KDCWe">Industrial Designer</h6>
                                            <div class="body card__name⤍FreelancerMiniCard⤚1KJyN">WZ DESIGNS LTD</div>
                                            <div class=" card__ratings⤍FreelancerMiniCard⤚2U1iT">
                                                <svg fill="#69728C" width="16" height="16" viewBox="0 0 1024 1024" class="card__ratings--icon⤍FreelancerMiniCard⤚2mk9W">
                                                    <path d="M512.32 115.2l-111.296 286.208h-282.624l229.824 174.592-79.36 288.512 243.456-163.136 243.52 163.136-79.36-288.512 229.76-174.592h-282.56z"></path>
                                                </svg>
                                                <span class="card__ratings--rating⤍FreelancerMiniCard⤚3PWxT">5.0</span>
                                                &nbsp;
                                                <span class="is-muted">(7)</span>
                                            </div>
                                        </div>
                                    </div>
                                    has become Transformation your Ideas is faster than ever
                                    -->
                                </div>
                            </div>
                            <div class="pph-col-xs-12 pph-col-sm-12 pph-col-md-12 pph-col-lg-6 pph-col-xl-5">
                                <div class="body__title-block⤍HeroImage⤚3HNuL">
                                    <h1 class="super hero__title⤍HeroImage⤚3Zxsf" style="color: rgb(48 61 89);">Find services that are ideal for your business at affordable rates</h1>
                                    <p class="title-new hero__subtitle⤍HeroImage⤚2oMVe">Find the Top freelancers for your business</p>
                                </div>
                                <form method="POST" class="search-bar⤍HeroImage⤚3bYFo search-bar⤍SearchBar⤚2T_-G">
                                    <div class="search-input⤍HeroImage⤚o3cWn search-bar__input⤍SearchBar⤚30CB4">
                                        <div class="container⤍SearchBar⤚1ryqt">
                                            <input type="text" value="" autocomplete="off" role="combobox" aria-autocomplete="list" aria-owns="react-autowhatever-1" aria-expanded="false" aria-haspopup="false" maxlength="100" placeholder="Try &quot;web design&quot;">
                                            <div id="react-autowhatever-1" class="suggestionsContainer⤍SearchBar⤚1VJJz"></div>
                                        </div>
                                    </div>
                                    <button class="search-bar__button⤍SearchBar⤚295lK search-btn⤍HeroImage⤚100QX search-btn--instance-1⤍HeroImage⤚20zya button⤍Button⤚2e-9B " type="submit">
                                        Search
                                    </button>
                                </form>
                                <div class="u-mgt--2 hero__find-expert--skills⤍HeroImage⤚2tMUo">
                                    <p class="small is-muted hero__find-expert--note⤍HeroImage⤚28KMn" style="font-size: 13px">Popular:</p>
                                    <div style="opacity: 1; transition: opacity 60ms cubic-bezier(0, 0, 0.088, 0.958) 50ms;">
                                        <ul class="hero__tags⤍HeroImage⤚3-ULH tags⤍Tags⤚1fGXR">
                                            <li class="tags__item⤍Tags⤚1ikIv">
                                                <a class="tags__link⤍Tags⤚3tg99" href="#">wordpress</a>
                                            </li>
                                            <li class="tags__item⤍Tags⤚1ikIv">
                                                <a class="tags__link⤍Tags⤚3tg99" href="#">seo</a>
                                            </li>
                                            <li class="tags__item⤍Tags⤚1ikIv">
                                                <a class="tags__link⤍Tags⤚3tg99" href="#">databases</a>
                                            </li>
                                            <li class="tags__item⤍Tags⤚1ikIv">
                                                <a class="tags__link⤍Tags⤚3tg99" href="#">software testing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section>
                    <div class="pph-strip is-shallow get-started⤍GetStarted⤚1H8Kw">
                        <section class="promo⤍GetStarted⤚2Fx3R" id="work">
                            <div class="u-vertically-center pph-row">
                                <div class="u-hide--lg u-hide--xl pph-col-sm-12 pph-col-md-12 u-mgb--2 promo__image-mobile⤍GetStarted⤚2rQLI">
                                    <picture>
                                        <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--tablet.webp 1x, https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--tablet@2x.webp 2x" media="(min-width: 33rem)" type="image/webp">
                                        <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--tablet.jpg 1x, https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--tablet.jpg 2x" media="(min-width: 33rem)" type="image/jpeg">
                                        <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--mobile.webp 1x, https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--mobile@2x.webp 2x" media="(max-width: 32.9375rem)" type="image/webp">
                                        <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--mobile.jpg 1x, https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--mobile@2x.jpg 2x" media="(max-width: 32.9375rem)" type="image/jpeg">
                                        <img src="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--desktop.jpg" alt="get-started" loading="lazy" width="648" height="330">
                                    </picture>
                                </div>
                                <div class="pph-col-sm-12 pph-col-md-12 pph-col-lg-6">
                                    <h2 class="large">Has become Getting your ideas is faster than ever</h2>
                                    <div class="promo__content⤍GetStarted⤚xqOgL">
                                        <ul>
                                            <li class="get-started__check⤍GetStarted⤚xz4SU">
                                                <svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="get-started__icon⤍GetStarted⤚10wDd">
                                                    <path d="M8 1.75C4.54822 1.75 1.75 4.54822 1.75 8C1.75 11.4518 4.54822 14.25 8 14.25C11.4518 14.25 14.25 11.4518 14.25 8C14.25 4.54822 11.4518 1.75 8 1.75ZM0.25 8C0.25 3.71979 3.71979 0.25 8 0.25C12.2802 0.25 15.75 3.71979 15.75 8C15.75 12.2802 12.2802 15.75 8 15.75C3.71979 15.75 0.25 12.2802 0.25 8Z"></path>
                                                    <path d="M11.5303 5.46967C11.8232 5.76256 11.8232 6.23744 11.5303 6.53033L7.53033 10.5303C7.23744 10.8232 6.76256 10.8232 6.46967 10.5303L4.46967 8.53033C4.17678 8.23744 4.17678 7.76256 4.46967 7.46967C4.76256 7.17678 5.23744 7.17678 5.53033 7.46967L7 8.93934L10.4697 5.46967C10.7626 5.17678 11.2374 5.17678 11.5303 5.46967Z"></path>
                                                </svg>
                                                <span class="title-nano get-started__check--title⤍GetStarted⤚4Iy0k">
                                                    Providing maximum value at the lowest cost
                                                </span>
                                            </li>
                                            <li class="get-started__check⤍GetStarted⤚xz4SU">
                                                <svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="get-started__icon⤍GetStarted⤚10wDd">
                                                    <path d="M8 1.75C4.54822 1.75 1.75 4.54822 1.75 8C1.75 11.4518 4.54822 14.25 8 14.25C11.4518 14.25 14.25 11.4518 14.25 8C14.25 4.54822 11.4518 1.75 8 1.75ZM0.25 8C0.25 3.71979 3.71979 0.25 8 0.25C12.2802 0.25 15.75 3.71979 15.75 8C15.75 12.2802 12.2802 15.75 8 15.75C3.71979 15.75 0.25 12.2802 0.25 8Z"></path>
                                                    <path d="M11.5303 5.46967C11.8232 5.76256 11.8232 6.23744 11.5303 6.53033L7.53033 10.5303C7.23744 10.8232 6.76256 10.8232 6.46967 10.5303L4.46967 8.53033C4.17678 8.23744 4.17678 7.76256 4.46967 7.46967C4.76256 7.17678 5.23744 7.17678 5.53033 7.46967L7 8.93934L10.4697 5.46967C10.7626 5.17678 11.2374 5.17678 11.5303 5.46967Z"></path>
                                                </svg>
                                                <span class="title-nano get-started__check--title⤍GetStarted⤚4Iy0k">
                                                    Get matched with Top Freelancers in minutes
                                                </span>
                                            </li>
                                            <li class="get-started__check⤍GetStarted⤚xz4SU">
                                                <svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="get-started__icon⤍GetStarted⤚10wDd">
                                                    <path d="M8 1.75C4.54822 1.75 1.75 4.54822 1.75 8C1.75 11.4518 4.54822 14.25 8 14.25C11.4518 14.25 14.25 11.4518 14.25 8C14.25 4.54822 11.4518 1.75 8 1.75ZM0.25 8C0.25 3.71979 3.71979 0.25 8 0.25C12.2802 0.25 15.75 3.71979 15.75 8C15.75 12.2802 12.2802 15.75 8 15.75C3.71979 15.75 0.25 12.2802 0.25 8Z"></path>
                                                    <path d="M11.5303 5.46967C11.8232 5.76256 11.8232 6.23744 11.5303 6.53033L7.53033 10.5303C7.23744 10.8232 6.76256 10.8232 6.46967 10.5303L4.46967 8.53033C4.17678 8.23744 4.17678 7.76256 4.46967 7.46967C4.76256 7.17678 5.23744 7.17678 5.53033 7.46967L7 8.93934L10.4697 5.46967C10.7626 5.17678 11.2374 5.17678 11.5303 5.46967Z"></path>
                                                </svg>
                                                <span class="title-nano get-started__check--title⤍GetStarted⤚4Iy0k">
                                                    Safe and secure payment methods for peace of mind
                                                </span>
                                            </li>
                                            <li class="get-started__check⤍GetStarted⤚xz4SU">
                                                <svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="get-started__icon⤍GetStarted⤚10wDd">
                                                    <path d="M8 1.75C4.54822 1.75 1.75 4.54822 1.75 8C1.75 11.4518 4.54822 14.25 8 14.25C11.4518 14.25 14.25 11.4518 14.25 8C14.25 4.54822 11.4518 1.75 8 1.75ZM0.25 8C0.25 3.71979 3.71979 0.25 8 0.25C12.2802 0.25 15.75 3.71979 15.75 8C15.75 12.2802 12.2802 15.75 8 15.75C3.71979 15.75 0.25 12.2802 0.25 8Z"></path>
                                                    <path d="M11.5303 5.46967C11.8232 5.76256 11.8232 6.23744 11.5303 6.53033L7.53033 10.5303C7.23744 10.8232 6.76256 10.8232 6.46967 10.5303L4.46967 8.53033C4.17678 8.23744 4.17678 7.76256 4.46967 7.46967C4.76256 7.17678 5.23744 7.17678 5.53033 7.46967L7 8.93934L10.4697 5.46967C10.7626 5.17678 11.2374 5.17678 11.5303 5.46967Z"></path>
                                                </svg>
                                                <span class="title-nano get-started__check--title⤍GetStarted⤚4Iy0k">
                                                    Our Dedicated 24/7 support service team
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="promo__cta⤍GetStarted⤚2VFdF get-started__cta⤍GetStarted⤚1VmsM">
                                        <div class="get-started__cta⤍GetStarted⤚1VmsM">
                                            <a class="button⤍Button⤚2e-9B button--big⤍Button⤚1kwvN" href="javascript:void(0)" data-toggle="modal" data-target="#registerModal">GET STARTED</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-hide--xs u-hide--sm u-hide--md pph-col-md-6 pph-col-lg-6 promo__image⤍GetStarted⤚1Bmhv">
                                    <picture>
                                        <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--desktop.webp 1x, https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--desktop@2x.webp 2x" media="(min-width: 54rem)" type="image/webp">
                                        <source srcset="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--desktop.jpg 1x, https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--desktop@2x.jpg 2x" media="(min-width: 54rem)" type="image/jpeg">
                                        <img src="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--desktop.jpg" alt="get-started" loading="lazy" width="648" height="330">
                                    </picture>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
                <section class="marketplace">
                    <div class="imagee">
                    <div class=" container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="marketplace-heading text-center">
                                    Explore the Marketplace
                                    <span class="text-center pt-3">Get everything you need to grow And  To develop your business</span>
                                </h2>
                                <div class="tr_inner_row f_cats_wrapper">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/digital-marketing.svg" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Digital Marketing</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/web-design.svg" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Graphics &amp; Design</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/icon-5.svg" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Web, Mobile &amp; Software Dev</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/icon-13.svg" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Writing &amp; Translation</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/video-camera.png" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Video &amp; Animation</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/music.png" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Music &amp; Audio</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/hand-shake.png" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Business</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3 col-6">
                                            <div class="cat-block">
                                                <a href="https://www.freelancinggig.com/online-marketing">
                                                    <figure>
                                                        <picture>
                                                            <img class="bg-icon" src="https://mohamedkars.000webhostapp.com/assets/images/icon-7.svg" alt="Service Category Image"> 
                                                        </picture>
                                                        <figcaption>Engineering &amp; Architecture</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
                <section class="how-it-works">
                    <div class="container">
                        <h2 class="heading-work c-section__title">How it works</h2>
                        <ul class="o-flex-container o-flex-container--four u-margin-bottom--xlarge">
                            <li class="o-flex-container__item">
                                <div class="c-feature">
                                    <div class="c-feature__icon">
                                        <figure class="c-icon">
                                            1         
                                        </figure>
                                    </div>
                                    <div>
                                        <h3 class="c-heading c-heading--small">
                                            Find the service you need
                                        </h3>
                                        <p>
                                            You can find the services you need using The search box is at the top or Through by browsing categories.
                                        </p>
                                    </div>

                                </div>
                            </li>
                            <li class="o-flex-container__item">
                                <div class="c-feature">
                                    <div class="c-feature__icon">
                                        <figure class="c-icon">
                                            2        
                                        </figure>
                                    </div>
                                    <div>
                                        <h3 class="c-heading c-heading--small">
                                            Ask for service you like
                                        </h3>
                                        <p>
                                            See service description And buyers ratings then Request the service to open a contact with the seller to get started.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="o-flex-container__item">
                                <div class="c-feature">
                                    <div class="c-feature__icon">
                                        <figure class="c-icon">
                                            3
                                        </figure>
                                    </div>
                                    <div>
                                        <h3 class="c-heading c-heading--small">
                                            Manage your job online
                                        </h3>
                                        <p>
                                            Share files and comments easily within the platform using messaging tools and Other
                                        </p>
                                    </div>

                                </div>
                            </li>
                            <li class="o-flex-container__item">
                                <div class="c-feature">
                                    <div class="c-feature__icon">
                                        <figure class="c-icon">
                                            4
                                        </figure>
                                    </div>
                                    <div>
                                        <h3 class="c-heading c-heading--small">
                                            Approve the service
                                        </h3>
                                        <p>
                                            Once you're happy with the work, approve the service. After communicating with the sellers Hand over all the deliverables
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="why-mostaql">
                    <div class="container py-5">
                        <div class="row align-items-center pt-4 pb-5">
                            <div class="col-md-12 text-center pb-3">
                                <h3 class="text-kufi">Advantages Of Working On a Site Kafeel</h3>							
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-6 col-md-4">
                                <div class=" mb-5 category-box">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img class="rounded img-fluid-o featurette-img lazy loaded" data-src="/resources/images/default/manager.svg" alt="كن مدير نفسك" src="https://mohamedkars.000webhostapp.com/assets/images/man.svg" data-was-processed="true">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="text-kufi mb-3">Be You are manager a yourself</h5>
                                        <p class="lead">Your business in site kafiil It is considered as are you Possess Your activity business, what you have to do you he is Select days the work you suits in the hours And times Fit your With circumstances And you timet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class=" mb-5 category-box">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img class="rounded img-fluid-o featurette-img lazy loaded" data-src="/resources/images/default/manager.svg" alt="كن مدير نفسك" src="https://mohamedkars.000webhostapp.com/assets/images/document.svg" data-was-processed="true">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="text-kufi mb-3">Services Various And Professional</h5>
                                        <p class="lead">You Will find All you need Of services are the available in a site kafiil And in all areas Each What Must on You have to do is service Selection Which you suit And The start Implement an idea Your project.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class=" mb-5 category-box">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img class="rounded img-fluid-o featurette-img lazy loaded" data-src="/resources/images/default/manager.svg" alt="كن مدير نفسك" src="https://mohamedkars.000webhostapp.com/assets/images/shield.svg" data-was-processed="true">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="text-kufi mb-3">Guarantee 100% For your rights</h5>
                                        <p class="lead">Whether you are a seller or a buyer. Provides site kafiil guarantee 100% For your rights. No fear after today From providing services Or pay money And Not Getting On the required service.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="row mb-5 category-box">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img class="rounded img-fluid-o featurette-img lazy loaded" data-src="/resources/images/default/manager.svg" alt="كن مدير نفسك" src="https://mohamedkars.000webhostapp.com/assets/images/cost.svg" data-was-processed="true">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="text-kufi mb-3">Execute your services At the lowest cost</h5>
                                        <p class="lead">Do Implement Your services On a low budget And at a varied cost And reasonable No more paying a lot of money To carry out the tasks And business Which Need it.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="row mb-5 category-box">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img class="rounded img-fluid-o featurette-img lazy loaded" data-src="/resources/images/default/manager.svg" alt="كن مدير نفسك" src="https://mohamedkars.000webhostapp.com/assets/images/pay.svg" data-was-processed="true">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="text-kufi mb-3">Multiple and secure payment options</h5>
                                        <p class="lead">There are We have many payment methods In order to pay for your purchases.And make sure That the payment process in site kafiil insured and protected Form Fully for peace of mind.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="row mb-5 category-box">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img class="rounded img-fluid-o featurette-img lazy loaded" data-src="/resources/images/default/manager.svg" alt="كن مدير نفسك" src="https://mohamedkars.000webhostapp.com/assets/images/support.svg" data-was-processed="true">
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="text-kufi mb-3">Technical Support 24/7</h5>
                                        <p class="lead">Dedicated support team the dedicated we've got in site kafiil Are available 24/7 To help you And presenting the support Optimized for you,no matter where you are located.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container margin-bottom-30" id="top-rated-roots">
                        <div class="section__head" data-v-b05e14c6="">
                            <h2 data-v-b05e14c6="">Top Rated Sellers</h2> 
                            <a href="/services/social-media-advertising" aria-label="Show all results for &quot;Scale yr business with social media solutions&quot;" class="section__link ml-10 flex-none d-md-flex" data-v-b05e14c6="">
                            Show all
                                <div class="ml-10 up-icon" data-v-b05e14c6="">
                                    
                                </div>
                            </a>
                        </div>
                        <div class="tr_inner_row roots_listing_wrapper home-top-rated-roots gridview">
                                <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 pl-sm-0">
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <a href="#">
                                                <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                                <span>Recommended</span>
                                                </div>
                                            </a>
                                            <div>
                                                <a href="#">
                                                    <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                                </a>
                                            </div>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container margin-bottom-30" id="top-rated-roots">
                        <div class="section__head" data-v-b05e14c6="">
                            <h2 data-v-b05e14c6="">Recommended Services</h2> 
                            <a href="/services/social-media-advertising" aria-label="Show all results for &quot;Scale yr business with social media solutions&quot;" class="section__link ml-10 flex-none d-md-flex" data-v-b05e14c6="">
                            Show all
                                <div class="ml-10 up-icon" data-v-b05e14c6="">
                                    
                                </div>
                            </a>
                        </div>
                        <div class="tr_inner_row roots_listing_wrapper home-top-rated-roots gridview">
                                <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 pl-sm-0">
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container margin-bottom-30" id="top-rated-roots">
                        <div class="section__head" data-v-b05e14c6="">
                            <h2 data-v-b05e14c6="">Popular Services</h2> 
                            <a href="/services/social-media-advertising" aria-label="Show all results for &quot;Scale yr business with social media solutions&quot;" class="section__link ml-10 flex-none d-md-flex" data-v-b05e14c6="">
                            Show all
                                <div class="ml-10 up-icon" data-v-b05e14c6="">
                                
                                </div>
                            </a>
                        </div>
                        <div class="tr_inner_row roots_listing_wrapper home-top-rated-roots gridview">
                                <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 pl-sm-0">
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                            <span>Recommended</span>
                                            </div>
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container margin-bottom-30" id="top-rated-roots">
                        <div class="section__head" data-v-b05e14c6="">
                            <h2 data-v-b05e14c6="">Latest Services</h2> 
                            <a href="/services/social-media-advertising" aria-label="Show all results for &quot;Scale yr business with social media solutions&quot;" class="section__link ml-10 flex-none d-md-flex" data-v-b05e14c6="">
                            Show all
                                <div class="ml-10 up-icon" data-v-b05e14c6="">
                                    
                                </div>
                            </a>
                        </div>
                        <div class="tr_inner_row roots_listing_wrapper home-top-rated-roots gridview">
                                <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 pl-sm-0">
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info position-relative">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-3 pr-lg-1 gigs-div">
                                        <div class="proposal-card-base mp-proposal-card">
                                            <a href="#">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/service_card_sukiafat-portfolio-01.jpg" class="img-fluid-o">
                                            </a>
                                            <div class="proposal-card-caption">
                                                <div class="proposal-seller-info">
                                                    <span class="fit-avatar s24 position-relative">
                                                        <img src="https://mohamedkars.000webhostapp.com/assets/images/59354_2648037855.jpg" width="32" height="32">
                                                        <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                                    </span>
                                                    <div class="seller-info-wrapper">
                                                        <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                        <div class="gig-seller-level ">
                                                            Level 2 Seller	    
                                                        </div>
                                                    </div>
                                                    <div class="favoriteIcon">
                                                        <i data-id="105" href="#" class="fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Favorite"></i>
                                                    </div>
                                                </div>
                                                <div style="">
                                                    <a href="https://www.gig.dog/proposals/Disigner_rocky/i-will-create-simple-mascot-and-animal-colorful-logo-within-24-hours" class="proposal-link-main js-proposal-card-imp-data">
                                                        <h3>I will create simple mascot and animal colorful logo within 24 hours</h3>
                                                    </a>
                                                    <div class="root-rating-details">
                                                            <i class="fa fa-star root-star"></i>
                                                        <span class="root-rating-text">5.0 <span class="root-rating-span">(26)</span></span>
                                                    </div>
                                                </div>
                                                <footer class="proposal-card-footer">
                                                    <span class="root-price">
                                                        <small>STARTING AT</small>
                                                        $15
                                                    </span>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container-visitor">
                    <div class="reg-banner cta-area cta-area-2 responsive-text-center section-bg-2 padding-top-70px padding-bottom-70px">
                        <div class="banner d-flex flex-column">
                            <div class="flex-none" data-v-748c03ac="">
                                <h2>Find Freelance Services For Your Business Today</h2>
                                <p>We've got you covered for all your business needs</p>
                            </div> 
                            <div class="mt-0" data-v-748c03ac="">
                                <a class="button⤍Button⤚2e-9B button--big⤍Button⤚1kwvN" href="/join?source=hplo_get_started" data-toggle="modal" data-target="#registerModal">
                                    GET STARTED
                                </a>
                            </div>
                        </div>
                        <!--
                        <div class="content">
                            <h2>Find Freelance Services For Your Business Today</h2>
                            <p>We've got you covered for all your business needs</p>
                            <a href="#" class="c-btn c-fill-color-btn">Get Started</a>
                        </div>
                        -->
                </div></section>
            </main>	
        </section>
    </div>
@endsection

@section("scripts")
    <script type="text/javascript">

        $(document).on("click", function(event){
            var $triggerOn = $(".locale");
            if($triggerOn !== event.target && !$triggerOn.has(event.target).length){
                $(".popover-box").removeClass("active");
            }            
        });  

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:10,
            rtl:true,
            autoplay:true,
            animateIn: 'flipInX',
            autoplayTimeout:4000,
            mouseDrag:false,
            autoplayHoverPause:true
        });
        
    </script>
@endsection


@section("scripts")

@endsection