@extends('layout.app')

@section('content')
    <div class="page-wrapper" style="height: ">
        <div id="perseus-app" class="job_page_perseus">
            <div class="main-container" style="min-height: 500px;padding-top: 0;">
                <div class="container-fluid">
                    <div class="sigle-job-additional-title dashboard-style">
                        <div class="dashboard-wrapper seller_dashboard_perseus">
                            <div class="seller-performance-wrapper dashboard-box">
                                <div class="inner">
                                    <div class="profile-progresses-wrapper">
                                        <div class="profile-details-wrapper">
                                            <div class="img-wrapper">
                                                <div class="profile-img-wrapper">
                                                    <div class="user-profile-image">
                                                        <label class="profile-pict" style="width: 150px; height: 150px; font-size: 3em;">
                                                            <img src="https://cdn.talentsroot.com/upload/profile/no_image.png" class="profile-pict-img" alt="anady8">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-details-text-wrapper">
                                                <div class="user-details">
                                                    <a href="/anady8" class="username-link text-display-6">{{ Auth::user()->name }}</a>
                                                </div>
                                                <div class="user-details">
                                                    <a href="/anady8" class="edit-user">Edit my profile</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="progresses-wrapper">
                                            <li class="kpi-bar-wrapper">
                                                <a href="#">
                                                    <h6 class="text-body-1">Response Rate</h6>
                                                    <div class="progress-container help">
                                                        <div class="progress-bar-wrapper">
                                                            <div class="fit-progressbar fit-progressbar-bar">
                                                                <div class="fit-progressbar-background">
                                                                    <span class="progress-fill" style="width: 100%;"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="percent-text font-accent">
                                                            <div class="percent-text font-accent">
                                                                100%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="kpi-bar-wrapper">
                                                <a href="#">
                                                    <h6 class="text-body-1">Delivered on Time</h6>
                                                    <div class="progress-container help">
                                                        <div class="progress-bar-wrapper">
                                                            <div class="fit-progressbar fit-progressbar-bar">
                                                                <div class="fit-progressbar-background">
                                                                    <span class="progress-fill" style="width: 100%;"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="percent-text font-accent">
                                                            <div class="percent-text font-accent">
                                                                100%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="kpi-bar-wrapper">
                                                <a href="#">
                                                    <h6 class="text-body-1">Completion Order</h6>
                                                    <div class="progress-container help">
                                                        <div class="progress-bar-wrapper">
                                                            <div class="fit-progressbar fit-progressbar-bar">
                                                                <div class="fit-progressbar-background">
                                                                    <span class="progress-fill" style="width: 100%;"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="percent-text font-accent">
                                                            <div class="percent-text font-accent">
                                                                100%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ol class="text-wrapper">
                                        <li class="kpi-text-wrapper">
                                            <a href="#">
                                                <div class="kpi-data-inner">
                                                    <h6>Response Time</h6>
                                                    <span class="grade">1 hour</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="kpi-text-wrapper">
                                            <a href="#">
                                                <div class="kpi-data-inner">
                                                    <h6>Total Earneds</h6>
                                                    <span class="grade ">$0</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="kpi-text-wrapper">
                                            <a href="#">
                                                <div class="kpi-data-inner">
                                                    <h6>Earned In May</h6>
                                                    <span class="grade ">$0</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="kpi-text-wrapper">
                                            <a href="#">
                                                <div class="kpi-data-inner">
                                                    <h6>Pending Clearance</h6>
                                                    <span class="grade ">$0</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="kpi-text-wrapper">
                                            <a href="#">
                                                <div class="kpi-data-inner">
                                                    <h6>Cancelled Orders</h6>
                                                    <span class="grade ">$0</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                                <div class="seller-dashboard-wrapper">
                                    <div class="user-conversations">
                                        <header>
                                            Inbox (0 Unread)
                                            <a href="/inbox" class="link-blue">View All</a>
                                        </header>
                                        <div class="items-container" style="position: relative;">
                                            <div class="items-loading"></div>
                                            <ul class="items-ul" style="height: 360px;">
                                                <li class="items-li" style="transform:translateY(calc((100% - 2px) * 0));z-index:1;">
                                                    <div class="conversation-placeholder">
                                                        <div class="conversation-placeholder-avatar">
                                                            <img src="https://zeerk.com/storage/uploads/2018/05/logo-150x150.jpeg" class="pict-img" alt="anady8">
                                                        </div>
                                                        <div class="conversation-placeholder-description">
                                                            <div class="conversation-line-placeholder">
                                                                <div class="conversation-data-placeholder">
                                                                    <h4 class="message-username">mohamedashraf77</h4>
                                                                </div>
                                                                <div class="conversation-data-placeholder short">
                                                                    <div class="message-time"> Since 2 days </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-line-placeholder">
                                                                <div class="conversation-data-placeholder long">
                                                                    <h4 class="message-description">ميم متجر إلكتروني لبيع منتجات إنارةوان يكون متوفر فيه خاصية الشراء والسداد عن طريق التحويل البنكي أو الدفع عند الإستلام </h4>
                                                                </div>
                                                                <div class="conversation-data-placeholder short">
                                                                    <span class="unread-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="items-li" style="transform:translateY(calc((100% - 2px) * 0));z-index:1;">
                                                    <div class="conversation-placeholder">
                                                        <div class="conversation-placeholder-avatar">
                                                            <img src="https://zeerk.com/storage/uploads/2018/05/logo-150x150.jpeg" class="pict-img" alt="anady8">
                                                        </div>
                                                        <div class="conversation-placeholder-description">
                                                            <div class="conversation-line-placeholder">
                                                                <div class="conversation-data-placeholder">
                                                                    <h4 class="message-username">mohamedashraf77</h4>
                                                                </div>
                                                                <div class="conversation-data-placeholder short">
                                                                    <div class="message-time"> Since 2 days </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-line-placeholder">
                                                                <div class="conversation-data-placeholder long">
                                                                    <h6 class="message-description">Hello Sair How Are you man?</h6>
                                                                </div>
                                                                <div class="conversation-data-placeholder short">
                                                                    <span class="unread-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="items-li" style="transform:translateY(calc((100% - 2px) * 0));z-index:1;">
                                                    <div class="conversation-placeholder">
                                                        <div class="conversation-placeholder-avatar">
                                                            <img src="https://zeerk.com/storage/uploads/2018/05/logo-150x150.jpeg" class="pict-img" alt="anady8">
                                                        </div>
                                                        <div class="conversation-placeholder-description">
                                                            <div class="conversation-line-placeholder">
                                                                <div class="conversation-data-placeholder">
                                                                    <h4 class="message-username">mohamedashraf77</h4>
                                                                </div>
                                                                <div class="conversation-data-placeholder short">
                                                                    <div class="message-time"> Since 2 days </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-line-placeholder">
                                                                <div class="conversation-data-placeholder long">
                                                                    <h4 class="message-description">ميم متجر إلكتروني لبيع منتجات إنارةوان يكون متوفر فيه خاصية الشراء والسداد عن طريق التحويل البنكي أو الدفع عند الإستلام </h4>
                                                                </div>
                                                                <div class="conversation-data-placeholder short">
                                                                    <span class="unread-count">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="active-orders-wrapper dashboard-box">
                                <div class="filter-wrapper cf">
                                    <div class="welcome-box">
                                        <div class="welcome-info">
                                            <h4 class="welcome-heading">Welcome back, {{ Auth::user()->name }}!</h4>
                                            <div class="welcome-desc">
                                                Simply request an offer from sellers or use the search engine to find the best freelancer. 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-lg-3 col-6 mb-3">
                                        <div class="white-box statistic-boxes">
                                            <a href="order/shopping?tab=completed">
                                                <span>Completed Orders</span>
                                                <h4>0</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 mb-3">
                                        <div class="white-box statistic-boxes">
                                            <a href="order/shopping?tab=completed">
                                                <span>Active Orders</span>
                                                <h4>0</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 mb-3">
                                        <div class="white-box statistic-boxes">
                                            <a href="order/shopping?tab=completed">
                                                <span>Delivered Orders</span>
                                                <h4>0</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6 mb-3">
                                        <div class="white-box statistic-boxes">
                                            <a href="order/shopping?tab=completed">
                                                <span>Cancelled Orders</span>
                                                <h4>0</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-wrappe cf margin-top-20">
                                    <div class="fit-popover fit-popover-bottom-left fit-popover-clickable fit-select-wrapper">
                                        <div class="details">
                                            <div class="title-wrapper">
                                                <h4 class="font-accent">
                                                    active orders
                                                </h4>
                                            </div>
                                            <span>
                                                <div class="filter-reviews">
                                                    <select class="select-reviews"> 
                                                        <option id="relevant" class="js-gtm-event-auto" value="relevant" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-most-relevant" data-reviews-type="relevant" rel="noindex, nofollow">All Orders</option>
                                                        <option id="all" class="js-gtm-event-auto" value="all" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-most-recent" data-reviews-type="all" rel="noindex, nofollow">Most Recent</option>
                                                        <option id="positive" class="js-gtm-event-auto" value="positive" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-positive" data-reviews-type="positive" rel="noindex, nofollow">Positive Reviews</option>
                                                        <option id="negative" class="js-gtm-event-auto" value="negative" data-gtm-action=" data-gtm-category=gig-page-old data-gtm-action=click " data-gtm-label="reviews-negatve" data-reviews-type="negative" rel="noindex, nofollow">Negative Reviews</option>
                                                    </select>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="empty-title" style="display: none;">
                                    No active orders to show
                                </div>
                                <div class="white-box cf order" style="">
                                    <div class="row">
                                        <div class="col-lg- text-center" data-grid-width="2" data-grid-width1="3">
                                            <span>
                                                <img width="100px" src="https://cdn.talentsroot.com/upload/root/thumb_1577622970_4042128165744769.jpg">
                                            </span>
                                        </div>
                                        <div style="" class="col-lg- request-desc-block" data-grid-width="2" data-grid-width1="6">
                                            <div class="short-desc" style="">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/noprofilepicture.png" width="35px" style="margin-right: 5px;border-radius: 100%;width: 40px;height: 40px;border: 1px solid #e5d5d5;">
                                                Mrkars 
                                            </div>
                                        </div>
                                        <div class="col-lg- pt-2 text-center" data-grid-width="2" data-grid-width1="4">
                                            <p class="mb-3">Price</p>
                                            <p>$ 150</p>
                                        </div>
                                        <div class="col-lg- pt-2 text-center" data-grid-width="2" data-grid-width1="4">
                                            <p class="mb-3">Due In</p>
                                            <p>3d, 16h</p>
                                        </div>
                                        <div class="col-lg- pt-2 text-center" data-grid-width="2" data-grid-width1="4">
                                            <p class="mb-3">Status</p>
                                            <h5>In Progress</h5>
                                        </div>
                                        <div class="col-lg- text-center pt-4" data-grid-width="2" data-grid-width1="3" style="color: blue;">
                                            <a href="#" style="color: blue !important">View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-box cf order" style="">
                                    <div class="row">
                                        <div class="col-lg- text-center" data-grid-width="2" data-grid-width1="3">
                                            <span>
                                                <img width="100px" src="https://cdn.talentsroot.com/upload/root/thumb_1577622970_4042128165744769.jpg">
                                            </span>
                                        </div>
                                        <div style="" class="col-lg- request-desc-block" data-grid-width="2" data-grid-width1="6">
                                            <div class="short-desc" style="">
                                                <img src="https://mohamedkars.000webhostapp.com/assets/images/noprofilepicture.png" width="35px" style="margin-right: 5px;border-radius: 100%;width: 40px;height: 40px;border: 1px solid #e5d5d5;">
                                                Mrkars 
                                            </div>
                                        </div>
                                        <div class="col-lg- pt-2 text-center" data-grid-width="2" data-grid-width1="4">
                                            <p class="mb-3">Price</p>
                                            <p>$ 150</p>
                                        </div>
                                        <div class="col-lg- pt-2 text-center" data-grid-width="2" data-grid-width1="4">
                                            <p class="mb-3">Due In</p>
                                            <p>3d, 16h</p>
                                        </div>
                                        <div class="col-lg- pt-2 text-center" data-grid-width="2" data-grid-width1="4">
                                            <p class="mb-3">Status</p>
                                            <h5>In Progress</h5>
                                        </div>
                                        <div class="col-lg- text-center pt-4" data-grid-width="2" data-grid-width1="3" style="color: blue;">
                                            <a href="#" style="color: blue !important">View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-box cf feeds" style="">
                                    <div class="CardHeader">
                                        <div class="CardHeaderInner">
                                            <div class="CardHeading">
                                                <h2>News Feed</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ItemInner">
                                        <div class="BitsListItem">
                                            <div class="BitsListItemRow">
                                                <div class="BitsListItemContainer Bordered">
                                                    <div class="BitsListItemHeader">
                                                        <div class="BitsListItemContent">
                                                            <div class="Content">
                                                                <div class="UserAvatar">
                                                                    <div class="UserAvatar-inner">
                                                                        <figure class="ImgContainer">
                                                                            <img src="https://cdn2.f-cdn.com/ppic/105126431/logo/26495562/profile_logo_26495562.jpg" class="UserAvatar-img">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="WrappedContainer">
                                                                    <span>
                                                                        <div class="NativeElement">
                                                                            <a href="#" class="LinkElement">
                                                                                <div class="LinkInner">
                                                                                    <span class="LinkText">Pallavi N.</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </span>
                                                                    bid $13.00 USD to complete in 4 day(s)
                                                                    <div class="nt-text">
                                                                        22 days ago
                                                                    </div>
                                                                    <span class="BidDescription">
                                                                        <div class="NativeElement">
                                                                            Hello I will design the sidebar menu with the required features and will provide you in the earliest time possible.
                                                                        </div>
                                                                    </span>
                                                                    <div class="BidAwardClicked">
                                                                        <a href="#" class="ButtonElemen">
                                                                            Award Project 
                                                                        </a>
                                                                    </div>
                                                                    <div class="BidAwardClicked">
                                                                        <button class="ButtonElement">
                                                                            <div class="Indicator"></div>
                                                                            Send Message
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="BitsListItemRow">
                                                <div class="BitsListItemContainer Bordered">
                                                    <div class="BitsListItemHeader">
                                                        <div class="BitsListItemContent">
                                                            <div class="Content">
                                                                <div class="UserAvatar">
                                                                    <div class="UserAvatar-inner">
                                                                        <figure class="ImgContainer">
                                                                            <img src="https://cdn2.f-cdn.com/ppic/105126431/logo/26495562/profile_logo_26495562.jpg" class="UserAvatar-img">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="WrappedContainer">
                                                                    <span>
                                                                        <div class="NativeElement">
                                                                            <a href="#" class="LinkElement">
                                                                                <div class="LinkInner">
                                                                                    <span class="LinkText">Pallavi N.</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </span>
                                                                    bid $13.00 USD to complete in 4 day(s)
                                                                    <div class="nt-text">
                                                                        22 days ago
                                                                    </div>
                                                                    <span class="BidDescription">
                                                                        <div class="NativeElement">
                                                                            Hello I will design the sidebar menu with the required features and will provide you in the earliest time possible.
                                                                        </div>
                                                                    </span>
                                                                    <div class="BidAwardClicked">
                                                                        <a href="#" class="ButtonElemen">
                                                                            Award Project 
                                                                        </a>
                                                                    </div>
                                                                    <div class="BidAwardClicked">
                                                                        <button class="ButtonElement">
                                                                            <div class="Indicator"></div>
                                                                            Send Message
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="BitsListItemRow">
                                                <div class="BitsListItemContainer Bordered">
                                                    <div class="BitsListItemHeader">
                                                        <div class="BitsListItemContent">
                                                            <div class="Content">
                                                                <div class="UserAvatar">
                                                                    <div class="UserAvatar-inner">
                                                                        <figure class="ImgContainer">
                                                                            <img src="https://cdn2.f-cdn.com/ppic/105126431/logo/26495562/profile_logo_26495562.jpg" class="UserAvatar-img">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="WrappedContainer">
                                                                    <span>
                                                                        <div class="NativeElement">
                                                                            <a href="#" class="LinkElement">
                                                                                <div class="LinkInner">
                                                                                    <span class="LinkText">Pallavi N.</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </span>
                                                                    bid $13.00 USD to complete in 4 day(s)
                                                                    <div class="nt-text">
                                                                        22 days ago
                                                                    </div>
                                                                    <span class="BidDescription">
                                                                        <div class="NativeElement">
                                                                            Hello I will design the sidebar menu with the required features and will provide you in the earliest time possible.
                                                                        </div>
                                                                    </span>
                                                                    <div class="BidAwardClicked">
                                                                        <a href="#" class="ButtonElemen">
                                                                            Award Project 
                                                                        </a>
                                                                    </div>
                                                                    <div class="BidAwardClicked">
                                                                        <button class="ButtonElement">
                                                                            <div class="Indicator"></div>
                                                                            Send Message
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="BitsListItemRow">
                                                <div class="BitsListItemContainer Bordered">
                                                    <div class="BitsListItemHeader">
                                                        <div class="BitsListItemContent">
                                                            <div class="Content">
                                                                <div class="UserAvatar">
                                                                    <div class="UserAvatar-inner">
                                                                        <figure class="ImgContainer">
                                                                            <img src="https://cdn2.f-cdn.com/ppic/105126431/logo/26495562/profile_logo_26495562.jpg" class="UserAvatar-img">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="WrappedContainer">
                                                                    <span>
                                                                        <div class="NativeElement">
                                                                            <a href="#" class="LinkElement">
                                                                                <div class="LinkInner">
                                                                                    <span class="LinkText">Pallavi N.</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </span>
                                                                    bid $13.00 USD to complete in 4 day(s)
                                                                    <div class="nt-text">
                                                                        22 days ago
                                                                    </div>
                                                                    <span class="BidDescription">
                                                                        <div class="NativeElement">
                                                                            Hello I will design the sidebar menu with the required features and will provide you in the earliest time possible.
                                                                        </div>
                                                                    </span>
                                                                    <div class="BidAwardClicked">
                                                                        <a href="#" class="ButtonElemen">
                                                                            Award Project 
                                                                        </a>
                                                                    </div>
                                                                    <div class="BidAwardClicked">
                                                                        <button class="ButtonElement">
                                                                            <div class="Indicator"></div>
                                                                            Send Message
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="BitsListItemRow">
                                                <div class="BitsListItemContainer Bordered">
                                                    <div class="BitsListItemHeader">
                                                        <div class="BitsListItemContent">
                                                            <div class="Content">
                                                                <div class="UserAvatar">
                                                                    <div class="UserAvatar-inner">
                                                                        <figure class="ImgContainer">
                                                                            <img src="https://cdn2.f-cdn.com/ppic/105126431/logo/26495562/profile_logo_26495562.jpg" class="UserAvatar-img">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="WrappedContainer">
                                                                    <span>
                                                                        <div class="NativeElement">
                                                                            <a href="#" class="LinkElement">
                                                                                <div class="LinkInner">
                                                                                    <span class="LinkText">Pallavi N.</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </span>
                                                                    bid $13.00 USD to complete in 4 day(s)
                                                                    <div class="nt-text">
                                                                        22 days ago
                                                                    </div>
                                                                    <span class="BidDescription">
                                                                        <div class="NativeElement">
                                                                            Hello I will design the sidebar menu with the required features and will provide you in the earliest time possible.
                                                                        </div>
                                                                    </span>
                                                                    <div class="BidAwardClicked">
                                                                        <a href="#" class="ButtonElemen">
                                                                            Award Project 
                                                                        </a>
                                                                    </div>
                                                                    <div class="BidAwardClicked">
                                                                        <button class="ButtonElement">
                                                                            <div class="Indicator"></div>
                                                                            Send Message
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="link-top">
                                                <button class="LinkElement">
                                                    <div class="LinkInner">
                                                        <div class="LinkText">View all 14 bids</div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
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