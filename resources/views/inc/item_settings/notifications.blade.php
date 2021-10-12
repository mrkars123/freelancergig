@extends('layout.settings')

@section("content")
    <div class="mainpane box-wrap">
        <div class="box-inner">
            <div class="mb-3">
                <div data-v-08f936ce="" class="d-flex justify-content-between mb-3">
                    <p data-v-08f936ce="" class="my-auto fs-14">NOTIFICATIONS SETTINGS</p> 
                </div>
                <div data-v-08f936ce="" class="row">
                    <div data-v-08f936ce="" class="col-12">
                        <p data-v-08f936ce="" class="mb-0">Manage your notifications for important updates</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                        <form class="jmofy-form py-4">
                            <div class="row pb-3">
                                <div data-v-08f936ce="" class="col-6">
                                    <span data-v-08f936ce="" class="gray-text fs-12">Notifications</span>
                                </div>
                            </div>
                            <div data-v-08f936ce="" class="row">
                                <div data-v-08f936ce="" class="col-6">
                                    <label data-v-08f936ce="" class="fs-12">Enable Email Notifications</label>
                                </div> 
                                <div data-v-08f936ce="" class="col-3 text-center">
                                    <label data-v-08f936ce="" for="email_message" class="pr-3 mx-2 d-inline-block">
                                        <div data-v-08f936ce="" class="checkbox">
                                            <input data-v-08f936ce="" type="checkbox" id="email_message" name="email_message"> <span data-v-08f936ce=""></span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div data-v-08f936ce="" class="row">
                                <div data-v-08f936ce="" class="col-6">
                                    <label data-v-08f936ce="" class="fs-12">Enable Mobile Notifications</label>
                                </div> 
                                <div data-v-08f936ce="" class="col-3 text-center">
                                    <label data-v-08f936ce="" for="email_reviews" class="pr-3 mx-2 d-inline-block">
                                        <div data-v-08f936ce="" class="checkbox">
                                            <input data-v-08f936ce="" type="checkbox" id="email_reviews" name="email_reviews"> <span data-v-08f936ce=""></span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div data-v-08f936ce="" class="row">
                                <div data-v-08f936ce="" class="col-12">
                                    <input type="submit" class="form-button btn green-btn fw-400" value="Save Changes">
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")

@endsection