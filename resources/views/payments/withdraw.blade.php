@extends('my_payments')

@section("content")
    <div class="requests-list mb-5">
        <div class="row">
            <div class="form-group col-md-5">
                <h5 class="margin-bottom-5" style="padding: 3px">From payment user account</h5>
                <input type="text" disabled="disabled" class="form-control" placeholder="US-dollar - User Account ( Total: $50 )">
            </div>
            <div class="form-group col-md-12">
                <h5 class="margin-bottom-5">Amount</h5>
                <div class="amount budget-input">
                    <small class="currency-symbol">$</small>
                    <div class="fit-input-wrapper fit-input-icon-start">
                        <div class="fit-input-inner-wrapper">
                            <input class="fit-input" type="number" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12">
                <h5>Select a Withdrawal Account</h5>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group withdraw-options">
                    <input type="radio" name="gateway" value="paypal" id="paypal">
                    <label for="paypal"></label>
                    <label for="paypal"><img alt="paypal" src="https://cdn.talentsroot.com/image/Paypal.png"></label>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group withdraw-options">
                    <input type="radio" name="gateway" value="payoneer" id="payoneer">
                    <label for="payoneer"></label>
                    <label for="payoneer"><img alt="payoneer" src="https://cdn.talentsroot.com/image/payoneer.jpg"></label>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group withdraw-options">
                    <input type="radio" name="gateway" value="bank" id="bank">
                    <label for="bank"></label>
                    <label for="bank"><img alt="bank" src="../images/bank.jpg"></label>
                </div>
            </div>
        </div>
        <div class="content row" id="withdrawRow" style="display:none">
            <div class="col-4">
                <div class="form-group withdraw-gateway-options paypal">
                    <input type="text" name="paypalid"placeholder="PayPal ID" readonly="" value="cxxxxxxxxxxxx@gmi.com" class="form-control">
                </div>
                <div class="form-group withdraw-gateway-options payoneer" style="display:none">
                    <input type="text" name="payoneerid" value="" placeholder="Payoneer Email" class="form-control">
                </div>
                <div class="form-group withdraw-gateway-options Bank-Account" style="display:none">
                    <input type="text" name="Bankid" placeholder="Bank Account" readonly="" value="xxxxxxxxxxxx3343" class="form-control">
                </div>
            </div>
        </div>
        <div class="mt-3 footer">
            <button class="margin-top-15 fit-button fit-button-withdrawal fit-button-color-green fit-button-fill-full fit-button-size-medium">Request withdrawal</button>
        </div>
    </div>
@endsection

@section("scripts")

@endsection