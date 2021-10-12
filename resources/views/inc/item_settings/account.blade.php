@extends('layout.settings')

@section("content")
    <div class="mainpane">
        <div class="box-inner">
            <div data-v-0c5a7a44="" class="d-flex justify-content-between mb-3">
                <p data-v-0c5a7a44="" class="my-auto fs-14">ACCOUNT SETTINGS</p> 
                <div data-v-0c5a7a44="" class="cta my-auto">
                </div>
            </div>
            <div data-v-0c5a7a44="" class="d-flex justify-content-between">
                <div data-v-0c5a7a44="" class="jmofy-badge">
                    <div data-v-0c5a7a44="" class="d-flex flex-wrap">
                        <div data-v-0c5a7a44="" class="pr-2">
                            <img data-v-0c5a7a44="" src="https://d3pxsalajcuc1.cloudfront.net/userfiles/user_-AEdaApSSnS.png" style="max-height: 60px;">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="jmofy-form py-4">
                        <div data-v-0c5a7a44="" class="row">
                            <div data-v-0c5a7a44="" class="col-12 col-lg-8">
                                <div data-v-0c5a7a44="" class="row mb-2">
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-4 my-auto">
                                        <label data-v-0c5a7a44="" for="acct_name" class="mb-2">
                                        <span data-v-0c5a7a44="" class="gray-text fs-14">User Type</span>
                                        </label>
                                    </div>
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-8 my-auto">
                                        <div data-v-0c5a7a44="" class="input-wrap mb-2">
                                        <select class="form-control has-value" required="" name="usertype" id="" disabled="" style="background-color: #e9ecef !important">
                                            <option value="0" selected="">
                                                {{ Auth::user()->type }}
                                            </option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-0c5a7a44="" class="row mb-2">
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-4 my-auto">
                                        <label data-v-0c5a7a44="" for="acct_name" class="mb-2">
                                        <span data-v-0c5a7a44="" class="gray-text fs-14">First Name</span>
                                        </label>
                                    </div>
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-8 my-auto">
                                        <div data-v-0c5a7a44="" class="input-wrap mb-2">
                                        <input data-v-0c5a7a44="" type="text" name="first_name" id="acct_name" value="{{ Auth::user()->type }}" placeholder="Enter Name" class="py-2">
                                        </div>
                                    </div>
                                </div>
                                <div data-v-0c5a7a44="" class="row mb-2">
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-4 my-auto">
                                        <label data-v-0c5a7a44="" for="acct_name" class="mb-2">
                                        <span data-v-0c5a7a44="" class="gray-text fs-14">Last Name</span>
                                        </label>
                                    </div>
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-8 my-auto">
                                        <div data-v-0c5a7a44="" class="input-wrap mb-2">
                                        <input data-v-0c5a7a44="" type="text" name="acct_name" id="acct_name" value="mohamedx" placeholder="Enter Name" class="py-2">
                                        </div>
                                    </div>
                                </div>
                                <div data-v-0c5a7a44="" class="row mb-2">
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-4 my-auto">
                                        <label data-v-0c5a7a44="" for="acct_name" class="mb-2">
                                        <span data-v-0c5a7a44="" class="gray-text fs-14">Email</span>
                                        </label>
                                    </div>
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-8 my-auto">
                                        <div data-v-0c5a7a44="" class="input-wrap mb-2">
                                        <input data-v-0c5a7a44="" type="email" name="acct_email" id="acct_email" placeholder="Enter Email Address" value="mrjootito@gmail.com" class="py-2" readonly="" required="">
                                        </div>
                                    </div>
                                </div>
                                <div data-v-0c5a7a44="" class="row mb-2">
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-4 my-auto">
                                        <label data-v-0c5a7a44="" for="acct_name" class="mb-2">
                                        <span data-v-0c5a7a44="" class="gray-text fs-14">Account Status</span>
                                        </label>
                                    </div>
                                    <div data-v-0c5a7a44="" class="col-12 col-lg-8 my-auto">
                                        <div data-v-0c5a7a44="" class="input-wrap mb-2">
                                        <input data-v-0c5a7a44="" type="text" name="acct_is_active" id="acct_is_active" placeholder="" class="py-2" readonly="readonly" value="For Verification">
                                        </div>
                                    </div>
                                </div>
                                <div data-v-0c5a7a44="" class="row mb-2">
                                    
                                </div>
                                <div data-v-0c5a7a44="" class="row mb-2">
                                    <div class="col-12 submit-btn">
                                        <button class="form-button btn green-btn fw-400" type="submit">Save Change</button>
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

@endsection