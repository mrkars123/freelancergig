@extends('layout.app')

@section("content")
    <div class="page-wrapper" style="height: ">
        <div id="perseus-app" class="job_page_perseus">
            <div class="main-container">
                <div class="borderbox sigle-job-additional-title post-job-page" style="padding: 25px">
                    <h1 class="text-display-3">Post an New Service in Seconds</h1>
                    <div class="fit-popover fit-popover-right-top tooltip-wrapper m-0">
                        <p class="title">Describe the service you're looking to purchase - please be as detailed as possible:</p>
                        <div class="fit-textarea description text-body-2">
                            <textarea maxlength="2500" placeholder="I'm looking for..."></textarea>
                            <span class="fit-counter fit-textarea-counter">0 / 2500</span>
                        </div>
                    </div>
                    <div class="fit-popover fit-popover-right-top tooltip-wrapper m-0">
                        <h4>Choose a category:</h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select required class="form-control no-radius-border fit-select" id="category" name="category">
                                    <option selected disabled value="">Select Category</option>
                                    <option value= "programming" >Programming & IT</option>
                                    <option value= "designing" >Graphics & Design</option>
                                    <option value= "marketing" >Digital Marketing</option>
                                    <option value= "writing" >Writing & Translation</option>
                                    <option value= "video" >Video & Animation</option>
                                    <option value= "music" >Music & Audio</option>
                                    <option value= "business" >business</option>
                                    <option value= "entertainment" >Entertainment</option>
                                </select>
                            </div> 
                            <div class="form-group col-md-6">
                                <select required class="form-control no-radius-border fit-select disabled" id="subcategory" name="subcategory">
                                    <option value="0" data-chained="business" ></option>
                                    <option value="1" data-chained="business" >Branding Services</option>
                                    <option value="2" data-chained="business" >Business Plans</option>
                                    <option value="3" data-chained="business" >Companies Establishment Consultations</option>
                                    <option value="4" data-chained="business" >Entrepreneurship Services</option>
                                    <option value="5" data-chained="business" >Feasibility Studies</option>
                                    <option value="6" data-chained="marketing" >Social Media Marketing</option>
                                    <option value="7" data-chained="marketing" >Content Marketing</option>
                                    <option value="8" data-chained="marketing" >E-Commerce Marketing</option>
                                    <option value="9" data-chained="marketing" >SEO services</option>
                                    <option value="10" data-chained="marketing" >Web Traffic</option>
                                    <option value="11" data-chained="marketing" >Domain Name Research</option>
                                    <option value="12" data-chained="marketing" >Email Marketing</option>
                                    <option value="13" data-chained="marketing" >Mobile Marketing</option>
                                    <option value="14" data-chained="programming">Web Programming</option>
                                    <option value="15" data-chained="programming">Mobile Apps Development</option>
                                    <option value="16" data-chained="programming">Ecommerce</option>
                                    <option value="17" data-chained="programming">Games Development</option>
                                    <option value="18" data-chained="programming">Performance & SEO</option>
                                    <option value="19" data-chained="programming">Databases</option>
                                    <option value="20" data-chained="programming">Desktop applications</option>
                                    <option value="21" data-chained="writing">Translation Services</option> 
                                    <option value="22" data-chained="writing">Articles & Blog Posts</option>
                                    <option value="23" data-chained="writing">Creative Contents Writing</option>
                                    <option value="24" data-chained="writing">Research & Summaries</option>
                                    <option value="25" data-chained="writing">scritpwriting</option>
                                    <option value="26" data-chained="writing">Legal Writing</option>
                                    <option value="27" data-chained="writing">Proofreading & Editing</option>
                                    <option value="28" data-chained="marketing" >Video Marketing</option>   
                                    <option value="29" data-chained="marketing" >Marketing Plans</option>
                                    <option value="30" data-chained="marketing" >Sales Plans</option>
                                    <option value="31" data-chained="marketing" >Web Analytics</option>
                                    <option value="32" data-chained="marketing" >Others</option>    
                                    <option value="33" data-chained="programming">Artificial Intelligence</option>
                                    <option value="34" data-chained="programming">BlockChain</option>
                                    <option value="35" data-chained="programming">Cloud Computing</option>
                                    <option value="36" data-chained="programming">Convert Files</option>
                                    <option value="37" data-chained="programming">Data Analysis & Reports</option>
                                    <option value="38" data-chained="programming">Data Entry</option>
                                    <option value="39" data-chained="programming">Data Recovery</option>
                                    <option value="40" data-chained="programming">Information Security</option>
                                    <option value="41" data-chained="programming">Networking</option>
                                    <option value="42" data-chained="programming">Quality Assurance</option>
                                    <option value="43" data-chained="programming">Technical Support</option>
                                    <option value="44" data-chained="programming">Others</option>
                                    <option value="45" data-chained="writing">Resumes & Cover Letters</option>
                                    <option value="46" data-chained="writing">Press Releases</option>
                                    <option value="47" data-chained="writing">Product Description</option>
                                    <option value="48" data-chained="writing">Slogans</option>
                                    <option value="59" data-chained="writing">Transcripts</option>
                                    <option value="50" data-chained="writing">Others</option>                       
                                    <option value="51" data-chained="designing" >Logo Design</option>
                                    <option value="52" data-chained="designing" >Business Cards & Stationery</option>
                                    <option value="53" data-chained="designing" >Social Media Design</option>
                                    <option value="54" data-chained="designing" >Web & Mobile UX/UI Design</option>
                                    <option value="55" data-chained="designing" >Banner Ads</option>
                                    <option value="56" data-chained="designing" >Book & Album Covers</option>
                                    <option value="57" data-chained="designing" >Cartoons & Caricatures</option>
                                    <option value="58" data-chained="designing" >Flyers & Brochures</option>
                                    <option value="59" data-chained="designing" >Illustration</option>
                                    <option value="60" data-chained="designing" >Invitations</option>
                                    <option value="61" data-chained="designing" >Packaging Design</option>
                                    <option value="62" data-chained="designing" >Image Editing</option>
                                    <option value="63" data-chained="designing" >3D & 2D Models</option>
                                    <option value="64" data-chained="designing" >Architectural Designs</option>
                                    <option value="65" data-chained="designing" >Infographics</option>
                                    <option value="66" data-chained="designing" >Presentation Design</option>
                                    <option value="67" data-chained="designing" >T-Shirts & Merchandise</option>
                                    <option value="68" data-chained="designing" >Vector Tracing</option>
                                    <option value="69" data-chained="designing" >Others</option>
                                    <option value="70" data-chained="video" >Promotional & Ads Videos</option>
                                    <option value="71" data-chained="video" >Screencast Tutorial Videos</option>
                                    <option value="72" data-chained="video" >Editing & Post Production</option>
                                    <option value="73" data-chained="video" >Intros & Animated Logos</option>
                                    <option value="74" data-chained="video" >Whiteboard & Animated Explainers</option>
                                    <option value="75" data-chained="video" >Spokesperson Videos</option>
                                    <option value="76" data-chained="video" >Others - Video & Animation</option>
                                    <option value="77" data-chained="music" >Voice Over</option>
                                    <option value="78" data-chained="music" >Sound Effects</option>
                                    <option value="79" data-chained="music" >Jingles & Drops</option>
                                    <option value="80" data-chained="music" >Others</option>
                                    <option value="81" data-chained="business" >Financial Consultations</option>
                                    <option value="82" data-chained="business" >HR Consultations</option>
                                    <option value="83" data-chained="business" >Legal Consultations</option>
                                    <option value="84" data-chained="business" >Logistic Consultations</option>
                                    <option value="85" data-chained="business" >Market Research</option>
                                    <option value="86" data-chained="business" >Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="fit-popover fit-popover-right-top tooltip-wrapper m-0">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <h4>What is your budget for this service?</h4>
                                <div class="budget-input">
                                    <small class="currency-symbol">$</small>
                                    <div class="fit-input-wrapper fit-input-icon-start">
                                        <div class="fit-input-inner-wrapper">
                                            <input class="fit-input" type="number" value="">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group col-md-6  mb-5">
                                <h4>when would you like your service offer?</h4>
                                <select class="form-control no-radius-border fit-select" name="delivery" class="form-control">
                                    <option value="">Time to delivery</option>
                                    <option value="1">
                                    1 day </option>
                                    <option value="2">
                                    2 days </option>
                                    <option value="3">
                                    3 days </option>
                                    <option value="4">
                                    4 days </option>
                                    <option value="5">
                                    5 days </option>
                                    <option value="6">
                                    6 days </option>
                                    <option value="7">
                                    7 days </option>
                                    <option value="8">
                                    8 days </option>
                                    <option value="9">
                                    9 days </option>
                                    <option value="10">
                                    10 days </option>
                                    <option value="11">
                                    11 days </option>
                                    <option value="12">
                                    12 days </option>
                                    <option value="13">
                                    13 days </option>
                                    <option value="14">
                                    14 days </option>
                                    <option value="15">
                                    15 days </option>
                                    <option value="16">
                                    16 days </option>
                                    <option value="17">
                                    17 days </option>
                                    <option value="18">
                                    18 days </option>
                                    <option value="19">
                                     19 days </option>
                                    <option value="20">
                                    20 days </option>
                                    <option value="21">
                                    21 days </option>
                                    <option value="22">
                                    22 days </option>
                                    <option value="23">
                                    23 days </option>
                                    <option value="24">
                                    24 days </option>
                                    <option value="25">
                                    25 days </option>
                                    <option value="26">
                                    26 days </option>
                                    <option value="27">
                                    27 days </option>
                                    <option value="28">
                                    28 days </option>
                                    <option value="29">
                                    29 days </option>
                                    <option value="30">
                                    30 days </option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div style="position: relative;" class="attachFiles-dropArea  promoViewMaster">
                                    <div class="attachFiles-normalOptions">
                                        <div class="attachFiles-promoView with-embed ">
                                            <div class="attachFiles-types attachFiles-pvFiles" style="">
                                                <a id="attachFiles-pick-1" class="attachFiles-pick _attachFiles-link call-to-action" style="position:relative;z-index: 1;cursor: pointer;">
                                                    <div class="clearfix">
                                                        <span class="attach-icons attach-image"></span>
                                                    </div>
                                                    <label for="root-image-input" class="d-md-flex" style="display: flex;width: 100%;text-align: center !important;align-items: center;justify-content: center;cursor: pointer;cursor: pointer;font-size: 12px;color: #888">
                                                        Upload<br>photos
                                                    </label>
                                                    <input class="file-input" id="root-image-input" type="file" name="files[]" multiple="" style="position: absolute;top: -17px;left: -108px;opacity: 0;display: inline-block;min-width: 215px;max-width: 0;overflow: hidden;cursor: pointer;padding: 112px 0px;">
                                                 </a>
                                            </div>
                                            <div class="attachFiles-types attachFiles-pvFiles left-sep">
                                                <a id="attachFiles-pick-1" class="attachFiles-pick _attachFiles-link call-to-action" href="#" style="position:relative;z-index: 1;">
                                                     <div class="clearfix">
                                                        <span class="attach-icons attach-video"></span>
                                                    </div>
                                                    <label for="root-image-input1" class="d-md-flex" style="display: flex;width: 100%;text-align: center !important;align-items: center;justify-content: center;cursor: pointer;cursor: pointer;font-size: 12px;color: #888">
                                                        Upload<br>Video
                                                    </label>
                                                    <input class="file-input" id="root-image-input" type="file" name="files[]" multiple="" style="position: absolute;top: -17px;left: -107px;opacity: 0;display: inline-block;min-width: 215px;max-width: 0;overflow: hidden;cursor: pointer;padding: 112px 0px;">
                                               </a>
                                            </div>
                                            <div class="attachFiles-types attachFiles-pvFiles left-sep">
                                               <a id="attachFiles-pick-1" class="attachFiles-pick _attachFiles-link call-to-action" href="#" style="position:relative;z-index: 1;">
                                                     <div class="clearfix">
                                                        <span class="attach-icons attach-pdf"></span>
                                                    </div>
                                                    <label for="root-image-input1" class="d-md-flex" style="display: flex;width: 100%;text-align: center !important;align-items: center;justify-content: center;cursor: pointer;cursor: pointer;font-size: 12px;color: #888">
                                                        Upload<br>Pdf OR Txt
                                                    </label>
                                                    <input class="file-input" id="root-image-input" type="file" name="files[]" multiple="" style="position: absolute;top: -17px;left: -105px;opacity: 0;display: inline-block;min-width: 215px;max-width: 0;overflow: hidden;cursor: pointer;padding: 112px 0px;">
                                               </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <button class="fit-button fit-button-color-green fit-button-fill-full fit-button-size-medium">Submit Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection