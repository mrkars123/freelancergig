@extends('layout.app')

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

@section('content')
    <div class="page-wrapper" style="">
        <div id="perseus-app" class="job_page_perseus">
            <div class="single-job-wrapper main-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="root-detail-left col-lg-8 controller-hourlie action-view">
                            <div style="background: white;">
                                <div class="root-title-row">
                                    <div class="">
                                        <div class="root-title reaed-one text-left col-md-8 margin-bottom- p-md-0 pl-md-3 " style="padding-bottom: 10px;">
                                            <h1 class="">
                                                I will Develop And Design Full Website with DataBase and Control Panel
                                            </h1>

                                            <div class="root-metas" style="font-size: 14px;color: #000">
                                                <div class="root-categories">
                                                <a href="categories/web-development">Graphics &amp; Design</a>
                                                <a href="categories/web-development">Logo Design</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-right pl-md-0">
                                            <div class="queue-orders">
                                                <span>VIEWS 3,299</span>
                                                        -
                                                <span>SALES 53</span>
                                            </div>
                                            <div class="root-share-btns mt-2">
                                                <label for="checkFav" class="favLabel root-fav-btn-label">
                                                    <i class="heart fa fa-heart-o" id="3148"></i>
                                                    <span>Save</span>
                                                </label>
                                                <a href="#" class="root-sharing-btn" data-toggle="modal" data-target="#sharingModal">
                                                    <i class="fa fa-share-alt"></i>
                                                    <span>Share</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="root-images-row root-image-slider position-relative">
                                        <a class="root-slider-fullscreen-link">
                                            <i class="fa fa-arrows"></i>
                                            <span>&nbsp;Full Screen</span>
                                        </a>
                                        <div id="rootCarouselControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                            <img class="d-block w-100" src="https://zeerk.com/storage/uploads/2019/04/Worldwide-web-visitors-real-targeted-Organic-web-traffic-from-Worldwide-691x405.jpg">
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100" src="https://zeerk.com/storage/uploads/2019/04/European-web-visitors-real-targeted-Organic-web-traffic-from-Europe-691x405.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item active">
                                            <img class="d-block w-100" src="https://zeerk.com/storage/uploads/2019/04/European-web-visitors-real-targeted-Organic-web-traffic-from-Europe-691x405.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#rootCarouselControls" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                        <a class="right carousel-control" href="#rootCarouselControls" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div id="thumbcarousel" class="root-image-thumbs-slider" data-interval="false">
                                            <div class="scroll-control">
                                                <a class="scroll-btn control-prev" data-target="root-image-thumbs">
                                                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                </a>
                                                <a class="scroll-btn control-next" data-target="root-image-thumbs">
                                                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                </a>
                                            </div>
                                            <div class="root-image-thumbs scroller-block">
                                                <div data-target="#rootCarouselControls" data-slide-to="0" class="thumb">
                                                    <img src="https://zeerk.com/storage/uploads/2019/04/Worldwide-web-visitors-real-targeted-Organic-web-traffic-from-Worldwide-691x405.jpg" class="img-fluid">
                                                </div>
                                                <div data-target="#rootCarouselControls" data-slide-to="1" class="thumb">
                                                    <img src="https://zeerk.com/storage/uploads/2019/04/European-web-visitors-real-targeted-Organic-web-traffic-from-Europe-691x405.jpg" class="img-fluid">
                                                </div>
                                                <div data-target="#rootCarouselControls" data-slide-to="2" class="thumb">
                                                    <img src="https://zeerk.com/storage/uploads/2019/04/European-web-visitors-real-targeted-Organic-web-traffic-from-Europe-691x405.jpg">
                                                </div>
                                                <div data-target="#rootCarouselControls" data-slide-to="0" class="thumb">
                                                    <img src="https://cdn.talentsroot.com/upload/root/thumb_1577622819_2965506903902399.jpg" class="img-fluid">
                                                </div>
                                                <div data-target="#rootCarouselControls" data-slide-to="0" class="thumb">
                                                    <img src="https://cdn.talentsroot.com/upload/root/thumb_1577622819_2965506903902399.jpg" class="img-fluid">
                                                </div>
                                                <div data-target="#rootCarouselControls" data-slide-to="0" class="thumb">
                                                    <img src="https://cdn.talentsroot.com/upload/root/thumb_1577622819_2965506903902399.jpg" class="img-fluid">
                                                </div>
                                                <div data-target="#rootCarouselControls" data-slide-to="0" class="thumb">
                                                    <img src="https://cdn.talentsroot.com/upload/root/thumb_1577622819_2965506903902399.jpg" class="img-fluid">
                                                </div>
                                                <div data-target="#rootCarouselControls" data-slide-to="0" class="thumb">
                                                    <img src="https://cdn.talentsroot.com/upload/root/thumb_1577622819_2965506903902399.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="root-image-slider-full">
                                            <div class="d-flex">
                                                <a href="#" class="close-root-slider-fullscreen-link">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                <div id="rootFullCarouselControls" class="carousel slide">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item">
                                                            <img src="https://cdn.talentsroot.com/upload/root/1577622819_2965506903902399.jpg" class="img-fluid">
                                                        </div>
                                                        <div class="carousel-item active">
                                                            <img src="https://cdn.talentsroot.com/upload/root/1577622822_9362806036381005.jpg" class="img-fluid">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="https://cdn.talentsroot.com/upload/root/1577622824_3474314921632957.jpg" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control" href="#rootFullCarouselControls" role="button" data-slide="prev">
                                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="right carousel-control" href="#rootFullCarouselControls" role="button" data-slide="next">
                                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="root-description borderbox">
                                    <div class="boxcontent">
                                        <p>Congratulations, you have found the best Europe web traffic source. Do you need the traffic to improve SEO and boost Alexa ranks of your website? You have found the best web visitor provider that will help you achieve your goal.&nbsp;I will send 25.000 real targeted European web visitors for only $5.&nbsp;It is a real targeted traffic service from Europe.&nbsp;Add more 50.000 web visitors from Europe for only $10.&nbsp;We will drive real targeted website visitors from Europe. Contact us for other countries. We will send real targeted Organic web traffic from Europe from Google or social media sites to boost Alexa ranks and improve SEO. </p>

                                        <p>We support sending European web visitors with target search keywords. If you need high-quality European visitors for promoting products, services on your website, Stores, Affiliate websites, Amazon, eBay, Alibaba, AliExpress, Etsy or Shopify Store, you can order using our Worldwide Traffic on the following&nbsp;high-quality web traffic service:&nbsp; </p>

                                        <p>https://zeerk.com/jobs/seo/high-quality-web-traffic-for-affiliates-amazon-ebay-alibaba-aliexpress-etsy-or-shopify-store/&nbsp; </p>

                                        <p>
                                            <b>European Web Visitors From Europe Traffic, real targeted Organic web traffic from Europe.</b>
                                        </p>

                                        <p>
                                            <span>We are one of the best website traffic providers on&nbsp;Zeerk. Our services helped hundreds of website owners of our clients all over the world. We succeeded to improve thousands of websites with different niches. Boost your Website and Grow your Business by using our Web Visitors. We support&nbsp;web visitors&nbsp;from Europe and many other countries. We will target your search keyword as well. Contact us for other countries. The source of this traffic is Google or social media sites as per your request. 
                                            <br></span>
                                            <br>
                                            <b>For a single European country web visitors.</b>
                                            <br>
                                            <span>We support&nbsp;European&nbsp;
                                                <span>web visitors&nbsp;from&nbsp;Belgium,&nbsp;Czech Republic,&nbsp;France,&nbsp;Germany,&nbsp;Italy,&nbsp;Netherlands,&nbsp;Poland,&nbsp;Ireland,&nbsp;Romania,&nbsp;Spain,&nbsp;Turkey,&nbsp;Ukraine, and&nbsp;United Kingdom. The current offer is not for a single country. For a single country, click on the link on the previous countries. Contact us for other countries. 
                                                <br>
                                                </span>
                                            </span>
                                            <br>
                                            <b>European web visitors real targeted Organic web traffic from Europe.</b>
                                            <br>
                                            <br>
                                            <b>
                                                <u>Features of Targeted Web Traffic and Geo Traffic from Europe:</u>
                                            </b>
                                        </p>
                                        <ul>
                                            <li>Real&nbsp;genuine&nbsp;visitors with unique IP.</li>
                                            <li>Can be&nbsp;tracked&nbsp;by Google Analytics.</li>
                                            <li>Boost&nbsp;Alexa&nbsp;ranks.</li>
                                            <li>A&nbsp;tracking&nbsp;link provided</li>
                                            <li>Available&nbsp;support&nbsp;24/7</li>
                                            <li>100%&nbsp;Satisfaction&nbsp;Guaranteed.</li>
                                            <li>Google Adsense safe.</li>
                                            <li>SEO&nbsp;friendly.</li>
                                            <li>No&nbsp;Proxies, No&nbsp;Adblock, No&nbsp;Iframes</li>
                                        </ul>

                                        <p>
                                            <span>
                                                <b>WHAT DO I NEED FROM YOU?</b>
                                                <br>
                                            </span>- Site URL<br>- 1 Keyword
                                        </p>
                                        <p>
                                            <b>F. A. Q.</b>
                                            <br>
                                            <b>1. Do you accept non-English keywords and&nbsp;</b>
                                            <b>non-English&nbsp;</b>
                                            <span>
                                                <b>Sites?</b>
                                                <br>
                                            </span>Yes, we can accept non-English websites but you have to send me your keywords.
                                        </p>
                                        <p>
                                            <b>2</b>
                                            <b>.&nbsp;</b>
                                            <span>
                                                <b>Do you accept all Sites?</b>
                                                <br>
                                            </span>
                                            <b>
                                                <br>
                                            </b>
                                            No, we don't accept illegal Websites &amp; terrorism, Songs,<br>
                                            Casino Games, gambling, Nude, Sex or Pornographic, Religion, Drugs,<br>
                                            Dating, Black Magic, Astrology, Esoteric, music, Alcoholic drinks,<br>
                                            Adf.ly links, Viruses, and websites with pop up windows, Frame Breakers<br>
                                            and Force Javascript.
                                        </p>
                                        <p>
                                            <b>3</b>
                                            <b>.&nbsp;</b>
                                            <span>
                                                <b>Do you guarantee any conversions from your traffic?</b><br><br>
                                            </span>
                                            No, we do not guarantee any conversions, deals or affiliates from our traffic. We can not send users who are interested in your products or services. Our traffic is mainly used for improving Alexa and SEO rank only. If you need the traffic to improve your site Alexa rank then you have found the best service that will achieve your goal.
                                        </p>
                                    </div>
                                </div>
                                <div class="js-auto-pause-hidden">
                                    <div class="widget-order-hourlie-addons clearfix">
                                        <div class="title-container">
                                            <h3 class="clearfix prepend-top">Get more with Offer Additionals</h3>
                                        </div>
                                        <div class="content-text clear addons-container">
                                            <ul class="addons clearfix boxmodelfix">
                                                <li class="item bg-fill clearfix clear selected">
                                                    <div class="checkbox col-xs-1 col-sm-1">
                                                        <input type="checkbox" class="price-low custom-control-input  white- pph-custom-input" id="price-L2H1" name="price" value="48357" package-price="10" package-name="1" onchange="setTotal()">
                                                        <label class="custom-control-label" for="price-L2H1"></label>
                                                    </div>
                                                    <div class="description col-xs-6 col-sm-8">
                                                        <h6>
                                                            I can help you with real time python projects (per session)                    
                                                        </h6>
                                                        <p class="discreet small eta" data-hook="addon-duration" data-original-duration="Additional 1 working day">Additional 1 working day</p>
                                                    </div>
                                                    <div class="addon-price col-xs-5 col-sm-3 price-tag medium text-right js-addon-price" data-unit-price="10">
                                                        <span>+</span>
                                                        <span>$</span>
                                                        <span title="" id="price48357">10</span>
                                                    </div>
                                                </li>
                                                <li class="item bg-fill clearfix clear selected">
                                                    <div class="checkbox col-xs-1 col-sm-1">
                                                        <input type="checkbox" class="price-low custom-control-input  white- pph-custom-input" id="price-L2H2" name="price" value="48358" package-price="55" package-name="2" onchange="setTotal()">
                                                        <label class="custom-control-label" for="price-L2H2"></label>
                                                    </div>
                                                    <div class="description col-xs-6 col-sm-8">
                                                        <h6>
                                                            I can help you with real time python projects (per session)                    
                                                        </h6>
                                                        <p class="discreet small eta" data-hook="addon-duration" data-original-duration="Additional 1 working day">Additional 1 working day</p>
                                                    </div>
                                                    <div class="addon-price col-xs-5 col-sm-3 price-tag medium text-right js-addon-price" data-unit-price="10">
                                                        <span>+</span>
                                                        <span>$</span>
                                                        <span title="" id="price48358">20</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="borderbox sigle-job-additional-title reviews-job">
                                    <button class="feedback-toggle-container d-lg-none d-sm-block clearfix btn tall call-to-action col-sm-12" id="toggle-reviews" data-hide-msg="Hide Reviews" data-show-msg="Show Reviews (1,202)">
                                        Show Reviews (1,202)            
                                    </button>
                                    <div class="feedbacks-list-container" id="feedbacks-list-container">
                                        <header class="reviews-header">
                                            
                                            <div class="details">
                                                <h2>
                                                    Reviews as Seller
                                                    <small>
                                                        <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                        <p class="rating-text">
                                                            <strong>4.9</strong> (88 reviews)
                                                        </p>
                                                    </small>
                                                </h2>
                                                <span>
                                                    <div class="filter-reviews">
                                                        <select class="select-reviews"> 
                                                            <option id="relevant" class="js-gtm-event-auto" value="relevant" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-most-relevant" data-reviews-type="relevant" rel="noindex, nofollow">Most Relevant</option>
                                                            <option id="all" class="js-gtm-event-auto" value="all" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-most-recent" data-reviews-type="all" rel="noindex, nofollow">Most Recent</option>
                                                            <option id="positive" class="js-gtm-event-auto" value="positive" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-positive" data-reviews-type="positive" rel="noindex, nofollow">Positive Reviews</option>
                                                            <option id="negative" class="js-gtm-event-auto" value="negative" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-negatve" data-reviews-type="negative" rel="noindex, nofollow">Negative Reviews</option>
                                                        </select>
                                                    </div>
                                                </span>
                                            </div>
                                            <ul class="review-feat">
                                                <li>
                                                    Communication Level
                                                    <p class="review">
                                                        <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                        <span class="total-rating-out-five">4.9</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    Communication Level
                                                    <p class="review">
                                                        <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                        <span class="total-rating-out-five">4.9</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    Communication Level
                                                    <p class="review">
                                                        <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                        <span class="total-rating-out-five">4.9</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </header>
                                        <div class="profile-reviews-wrapper">
                                            <ul class="review-list">
                                                <li class="review-item">
                                                    <span class="user-pict-32">
                                                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/ad3217bbe7ad98c6ab340f40bc043a63-701807461577452311.114558/57F9047B-C6CE-4799-93DD-C31C88BF748B" alt="adrincallejas" data-reload="inprogress">
                                                    </span>
                                                    <header>
                                                        <div class="reviewer-details">
                                                            <h5>adrincallejas</h5>
                                                            <p class="review">
                                                                <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                                <span class="total-rating-out-five">4.9</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-description">
                                                            <p class="text-body-2">
                                                                ممتاز جدا و محترف ، انصح الجميع بالتعامل معه
                                                            </p>
                                                        </div>
                                                        <span class="summarize">
                                                            <time class="text-body-2">
                                                                Since 9 hours
                                                            </time>
                                                        </span>
                                                    </header>
                                                </li>
                                                <li class="review-item reply">
                                                    <span class="user-pict-32">
                                                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/ad3217bbe7ad98c6ab340f40bc043a63-701807461577452311.114558/57F9047B-C6CE-4799-93DD-C31C88BF748B" alt="adrincallejas" data-reload="inprogress">
                                                    </span>
                                                    <header>
                                                        <div class="reviewer-details">
                                                            <h5>adrincallejas</h5>
                                                            <p class="review">
                                                                <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                                <span class="total-rating-out-five">4.9</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-description">
                                                            <p class="text-body-2">
                                                                ممتاز جدا و محترف ، انصح الجميع بالتعامل معه
                                                            </p>
                                                        </div>
                                                        <span class="summarize">
                                                            <time class="text-body-2">
                                                                Since 9 hours
                                                            </time>
                                                        </span>
                                                    </header>
                                                </li>
                                                <li class="review-item">
                                                    <span class="user-pict-32">
                                                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/ad3217bbe7ad98c6ab340f40bc043a63-701807461577452311.114558/57F9047B-C6CE-4799-93DD-C31C88BF748B" alt="adrincallejas" data-reload="inprogress">
                                                    </span>
                                                    <header>
                                                        <div class="reviewer-details">
                                                            <h5>adrincallejas</h5>
                                                            <p class="review">
                                                                <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                                <span class="total-rating-out-five">4.9</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-description">
                                                            <p class="text-body-2">
                                                                ممتاز جدا و محترف ، انصح الجميع بالتعامل معه
                                                            </p>
                                                        </div>
                                                        <span class="summarize">
                                                            <time class="text-body-2">
                                                                Since 9 hours
                                                            </time>
                                                        </span>
                                                    </header>
                                                </li>
                                                <li class="review-item reply">
                                                    <span class="user-pict-32">
                                                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/ad3217bbe7ad98c6ab340f40bc043a63-701807461577452311.114558/57F9047B-C6CE-4799-93DD-C31C88BF748B" alt="adrincallejas" data-reload="inprogress">
                                                    </span>
                                                    <header>
                                                        <div class="reviewer-details">
                                                            <h5>adrincallejas</h5>
                                                            <p class="review">
                                                                <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                                <span class="total-rating-out-five">4.9</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-description">
                                                            <p class="text-body-2">
                                                                ممتاز جدا و محترف ، انصح الجميع بالتعامل معه
                                                            </p>
                                                        </div>
                                                        <span class="summarize">
                                                            <time class="text-body-2">
                                                                Since 9 hours
                                                            </time>
                                                        </span>
                                                    </header>
                                                </li>
                                                <li class="review-item">
                                                    <span class="user-pict-32">
                                                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/ad3217bbe7ad98c6ab340f40bc043a63-701807461577452311.114558/57F9047B-C6CE-4799-93DD-C31C88BF748B" alt="adrincallejas" data-reload="inprogress">
                                                    </span>
                                                    <header>
                                                        <div class="reviewer-details">
                                                            <h5>adrincallejas</h5>
                                                            <p class="review">
                                                                <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                                <span class="total-rating-out-five">4.9</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-description">
                                                            <p class="text-body-2">
                                                                ممتاز جدا و محترف ، انصح الجميع بالتعامل معه
                                                            </p>
                                                        </div>
                                                        <span class="summarize">
                                                            <time class="text-body-2">
                                                                Since 9 hours
                                                            </time>
                                                        </span>
                                                    </header>
                                                </li>
                                                <li class="review-item reply">
                                                    <span class="user-pict-32">
                                                        <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/ad3217bbe7ad98c6ab340f40bc043a63-701807461577452311.114558/57F9047B-C6CE-4799-93DD-C31C88BF748B" alt="adrincallejas" data-reload="inprogress">
                                                    </span>
                                                    <header>
                                                        <div class="reviewer-details">
                                                            <h5>adrincallejas</h5>
                                                            <p class="review">
                                                                <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                                <span class="total-rating-out-five">4.9</span>
                                                            </p>
                                                        </div>
                                                        <div class="review-description">
                                                            <p class="text-body-2">
                                                                ممتاز جدا و محترف ، انصح الجميع بالتعامل معه
                                                            </p>
                                                        </div>
                                                        <span class="summarize">
                                                            <time class="text-body-2">
                                                                Since 9 hours
                                                            </time>
                                                        </span>
                                                    </header>
                                                </li>
                                            </ul>
                                            <div class="load-more-wrapper">
                                                <a href="#!" class="js-gtm-event-auto" data-gtm-category="gig-page-gig_tracking_type" data-gtm-action="click" data-gtm-label="reviews-show-more">+ Load More Reviews
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="root-detail-right col-lg-4 " id="main-container">
                            <input type="hidden" name="product_price" id="product_price" value="5"/>
                            <aside class="borderbox sidebar-hourlie-view right-column sidebar-hourlie-one offcanvas-sidebar">
                                <div class="clearfix js-keep-in-view cta-container" style="width: auto;">
                                    <div class="col-md-4 col-sm-4 col-xs-3 no-padding">
                                        <h3 class="gig-price price" id="total">5$</h3>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 no-padding">
                                        <select class="input-sm vv" name="number" style="height: 30px;margin-right: 5px;padding: 0px 50px 0px 15px !important;" id="number" onchange="setTotal()">

                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                        </select>
                                        <label class="gig-quantity pull-right">Select Quantity</label>
                                    </div>
                                    <div class="clear"></div>
                                    <button class="btn btn-block gig-buy-btn" id="buy_button" type="button" value="" onclick="$('#login-modal').modal('show');"> <span class="btn-price">ORDER NOW</span></button>
                                    <hr>
                                    <div class="clearfix main-information row">
                                        <div class="col-sm-4 col-xs-4 text-center no-padding popover-toggle">
                                            <div class="icon-container text-center">
                                                <i class="fpph fpph-invite-earn"></i>
                                            </div>
                                            <div class="label-container">
                                                Delivery in
                                            </div>
                                            <div class="value-container">
                                                <span class="value js-delivery-days">2 days</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-4 text-center no-padding popover-toggle">
                                            <div class="icon-container">
                                                <i class="fpph fpph-rating"></i>
                                            </div>
                                            <div class="label-container">
                                            Rating    
                                            </div>
                                            <div class="value-container">
                                                <span class="d-inline-block">
                                                    <span class="star-rating-s15 rate-10 show-one" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                </span>
                                                <span class="root-rating-text"> 
                                                    5.0 <span class="root-rating-span">(6)</span>
                                                </span>
                                                <br>
                                                <span>(1,202 review)</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-4 text-center no-padding popover-toggle">
                                            <div class="icon-container">
                                            <svg style="fill:#98999c;" enable-background="new 0 0 150 150" height="27px" id="Icons" version="1.1" viewBox="0 0 80 80" width="27px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g>
                                                    <rect height="5.996" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.8063 21.2604)" width="12" x="15.26" y="18.762"></rect>
                                                    <rect height="12" transform="matrix(0.7071 -0.7071 0.7071 0.7071 2.1714 47.7627)" width="4.996" x="56.242" y="15.26"></rect><path d="M42.5,21.162V16h-5v5.162C27.083,22.4,19,31.249,19,42c0,4.897,1.69,9.392,4.501,12.964l-3.653,3.653l3.536,3.536   l3.653-3.653C30.608,61.309,35.103,63,40,63s9.392-1.69,12.964-4.501l3.653,3.653l3.536-3.536l-3.653-3.653   C59.31,51.392,61,46.897,61,42C61,31.249,52.917,22.4,42.5,21.162z M24,42c0-8.822,7.177-16,16-16s16,7.177,16,16s-7.177,16-16,16   S24,50.822,24,42z"></path>
                                                    <polygon points="42.5,30.998 37.5,30.998 37.5,43.145 43.619,49.264 47.154,45.729 42.5,41.074  "></polygon>
                                                </g>
                                            </svg>
                                            </div>
                                            <div class="label-container">
                                                Response time   
                                            </div>
                                            <div class="value-container">
                                                <span class="value">Instantly</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </aside>
                            <div class="sidebar-buy-job d-lg-none">
                                <div class="root-author-box borderbox">
                                    <div class="user-img-container">
                                        <a href="https://zeerk.com/user/minutesuae/">
                                            <img class="round-avatar text-center" width="130" height="130" border="0" src="https://zeerk.com/storage/uploads/2018/05/logo-150x150.jpeg">
                                        </a>
                                    </div>
                                    <div class="user-info text-center">
                                        <h3 class="overflow-ellipsis">
                                            <a class="" style="vertical-align: middle" href="https://zeerk.com/user/minutesuae/">
                                                minutesuae
                                            </a>
                                            <div class="user-status" style="display:inline-block">
                                                <div class="online" style="display:inline-block">
                                                    Online
                                                </div>
                                            </div>
                                            <div class="root-author-rating">
                                                <p class="review">
                                                    <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                    <span class="total-rating-out-five">4.9</span>(58)
                                                </p>
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="root-author-desc">
                                        <div class="short-desc">
                                            Web Full-Stack DeveloperThanks for reading my overview.
                                            Here is website development expert who you are looking now.
                                            I have experience in website development for 8+ years.
                                            - PHP, Javascript, Ruby, C/C++, C#
                                            - Laravel, Codeigniter, Yii, cakePHP, Zend, React, Angular, Node, Vue, 
                                            <a class="pro-description-see-more" style="cursor: pointer;">
                                                Read moro
                                                <i class="fa fa-sort-down"></i>
                                            </a>
                                        </div>
                                        <div class="full-desc">
                                            Web Full-Stack Developer
                                            <p>
                                            Thanks for reading my overview.
                                            Here is website development expert who you are looking now.
                                            I have experience in website development for 8+ years.
                                            - PHP, Javascript, Ruby, C/C++, C#
                                            - Laravel, Codeigniter, Yii, cakePHP, Zend, React, Angular, Node, Vue, Ruby on Rails
                                            - SQL and NoSQL (mysql, sql, sqlite3, mongoDB, postgreSQL)
                                            - Github, Bitbucket, SCM Tools
                                            I also have strong experience in the shopping site development for 5+ years.
                                            I will do my best for you.
                                            I am looking forward to hearing from good clients.
                                            Sincerely And I am A professional Graphic Design Using Photoshop, illustrator, indesign. Thanks for your time.
                                            Mohamed.
                                            </p> 
                                        </div>
                                    </div>
                                    <div class="cb divider"></div>
                                    <div class="root-author-info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Country:</td>
                                                    <td>
                                                        <span>Egypt</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Last Seen:</td>
                                                    <td>
                                                        <span>Since 5 hours</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Response Time:</td>
                                                    <td>
                                                        <span>27 hours</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Recent Delivery:</td>
                                                    <td>
                                                        <span>Since 19 days</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Local Time:</td>
                                                    <td>
                                                        <span>2:06 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Languages:</td>
                                                    <td>
                                                        <span>Arabic, English</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="bottom-content">
                                        <button class="ui primary button">Contact Me</button>
                                    </div>
                                    <div class="cb divider"></div>
                                    <div class="root-info-note">
                                        <img alt="" src="https://cdn.talentsroot.com/image/secure-icon.png">
                                        <div class="root-info-note-content">
                                            <h4>
                                                <strong>100% Secure</strong>
                                            </h4>
                                            <span>If you never accept any communications or payments outside talentsroot.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-buy-job profile-job" id="aboutSeller">
                                <div class="root-author-box borderbox">
                                    <div class="user-img-container">
                                        <a href="https://zeerk.com/user/minutesuae/">
                                            <img class="round-avatar text-center" width="130" height="130" border="0" src="https://zeerk.com/storage/uploads/2018/05/logo-150x150.jpeg">
                                        </a>
                                    </div>
                                    <div class="user-info text-center">
                                        <h3 class="overflow-ellipsis">
                                            <a class="" style="vertical-align: middle" href="https://zeerk.com/user/minutesuae/">
                                                minutesuae
                                            </a>
                                            <div class="user-status" style="display:inline-block">
                                                <div class="online" style="display:inline-block">
                                                    Online
                                                </div>
                                            </div>
                                            <div class="root-author-rating">
                                                <p class="review">
                                                    <span class="star-rating-s15 rate-10" data-user-rating="4.9" data-user-ratings-count="88"></span>
                                                    <span class="total-rating-out-five">4.9</span>(58)
                                                </p>
                                            </div>
                                        </h3>
                                    </div>
                                    <div class="root-author-desc">
                                        <div class="short-desc">
                                            Web Full-Stack DeveloperThanks for reading my overview.
                                            Here is website development expert who you are looking now.
                                            I have experience in website development for 8+ years.
                                            - PHP, Javascript, Ruby, C/C++, C#
                                            - Laravel, Codeigniter, Yii, cakePHP, Zend, React, Angular, Node, Vue, 
                                            <a class="pro-description-see-more" style="cursor: pointer;">
                                                Read moro
                                                <i class="fa fa-sort-down"></i>
                                            </a>
                                        </div>
                                        <div class="full-desc">
                                            Web Full-Stack Developer
                                            <p>
                                            Thanks for reading my overview.
                                            Here is website development expert who you are looking now.
                                            I have experience in website development for 8+ years.
                                            - PHP, Javascript, Ruby, C/C++, C#
                                            - Laravel, Codeigniter, Yii, cakePHP, Zend, React, Angular, Node, Vue, Ruby on Rails
                                            - SQL and NoSQL (mysql, sql, sqlite3, mongoDB, postgreSQL)
                                            - Github, Bitbucket, SCM Tools
                                            I also have strong experience in the shopping site development for 5+ years.
                                            I will do my best for you.
                                            I am looking forward to hearing from good clients.
                                            Sincerely And I am A professional Graphic Design Using Photoshop, illustrator, indesign. Thanks for your time.
                                            Mohamed.
                                            </p> 
                                        </div>
                                    </div>
                                    <div class="cb divider"></div>
                                    <div class="root-author-info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Country:</td>
                                                    <td>
                                                        <span>Egypt</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Last Seen:</td>
                                                    <td>
                                                        <span>Since 5 hours</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Response Time:</td>
                                                    <td>
                                                        <span>27 hours</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Recent Delivery:</td>
                                                    <td>
                                                        <span>Since 19 days</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Local Time:</td>
                                                    <td>
                                                        <span>2:06 AM</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Languages:</td>
                                                    <td>
                                                        <span>Arabic, English</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="bottom-content">
                                        <button class="ui primary button">Contact Me</button>
                                    </div>
                                    <div class="cb divider"></div>
                                    <div class="root-info-note">
                                        <img alt="" src="https://cdn.talentsroot.com/image/secure-icon.png">
                                        <div class="root-info-note-content">
                                            <h4>
                                                <strong>100% Secure</strong>
                                            </h4>
                                            <span>If you never accept any communications or payments outside talentsroot.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="earn-money-affliate">
                                    <ul class="green-list">
                                        <li>You may share your Affiliate Link on Facebook, YouTube, Twitter, forums, articles or blogs.</li>
                                        <li>Anyone who clicks this link will be tagged with your cookie and you will make 10% of whatever they buy on Zeerk.</li>
                                        <li>The cookie stays forever!</li>
                                        <li>You can even just send friends to the Zeerk home page and get 10% on anything they stumble upon and buy!</li>
                                    </ul>
                                    <div class="text-center">
                                        <u>
                                            <a href="https://zeerk.com/affiliates/" class="custom-link-class">Here's How..</a>
                                        </u>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme" id="owl-demo">
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" id="3148" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
                            <div class="item">
                                <div class="proposal-card-base mp-proposal-card">
                                    <div class="pph-c-ribbon⤍Ribbon⤚1JMZp pph-c-ribbon--orange⤍Ribbon⤚1FFD9 pph-c-ribbon--top-left⤍Ribbon⤚2k5BO">
                                    <span>Featured</span>
                                    </div>
                                    <a href="#">
                                        <img src="https://cdntr.talentsroot.com/upload/root/thumb_1582211497_6903653899328762.jpg" class="img-fluid">
                                    </a>
                                    <div class="proposal-card-caption">
                                        <div class="proposal-seller-info">
                                            <span class="fit-avatar s24 position-relative">
                                                <img src="https://cdn.talentsroot.com/upload/profile/thumb_1577606728_3663956305696428.jpg" width="32" height="32">
                                                <span class="user-online-status online_status_94 red"><i class="fa fa-circle"></i></span>
                                            </span>
                                            <div class="seller-info-wrapper">
                                                <a href="https://www.gig.dog/danishali459" class="seller-name">TheDeveloper</a>
                                                <div class="gig-seller-tooltip hint--top-right level" data-hint="Completed at least 50 orders on time with a minimum 4.8 rating">
                                                    Level 2 Seller	    
                                                </div>
                                            </div>
                                            <div class="favoriteIcon">
                                                <i data-id="105" id="3148" class="heart fa fa-heart-o proposal-favorite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Favorite"></i>
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
        </div>
    </div>
@endsection

@section("scripts")
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        itemsDesktop : [1000,5], //5 items between 1000px and 901px
        loop:true,
        margin:5,
        nav:true,
        merge:true,
        responsive:{
            0:{
                items:1,
                mergeFit:true
            },
            450:{
                items:2,
                mergeFit:true
            },
            600:{
                items:2,
                mergeFit:true
            },
            650:{
                items:3,
                mergeFit:true
            },
            860:{
                items:4,
                mergeFit:true
            },
            1000:{
                items:5,
                mergeFit:true
            }
        }
    })
  </script>
@endsection