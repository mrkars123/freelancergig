@extends('layout.settings')

@section("content")
    <div class="settings">
        <div id="payments-settings" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="paymentsSetting row spacedlines">
                        <div class="col-xs-12 col-sm-10">
                            <h6>Withdrawal Accounts</h6>
                        </div>
                        <div class="col-xs-12 col-sm-2 settingAction action-container text-right">
                            <a class="js-toggler call-to-action1" role="button" aria-controls="withdrawal-accounts" data-parent="#payments-settings">Edit</a>
                        </div>
                    </div>
                </div>
                <div id="withdrawal-accounts" class="panel-collapse">
                    <div class="panel-body">
                        <div class="withdrawal-accounts spacedlines">
                            <div class="notification append-bottom clearfix">
                                <p>
                                <span>By adding a new account you can easily withdraw funds from your User Account. You can add Paypal, Payoneer, Bank Account.</span>
                                </p>
                            </div>
                            <div class="row withdrawal-add-account">
                                <div class="col-xs-12 col-md-2 text-center centered-cell">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <input class="call-to-action span-4 btn-lg" name="yt4" type="button" value="+ Add New Account">
                                        </font>
                                    </font>  
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