@extends('layout.settings')

@section("content")
    <div class="Box-sc-1ljro7x-0 dmGOpi">
        <div class="heading-with-action">
            <div class="heading-with-action__heading">
                <h2 class="Heading-sc-1ii725b-0 oKnYY">Change password</h2>
            </div>
        </div>
    </div>
    <div class="Box-sc-1ljro7x-0 dmGOpi">
        <div class="two-column-layout">
            <div class="two-column-layout__header">
                <label class="form-label" for="fullName">Current Password
                </label>
            </div>
            <div class="two-column-layout__body">
                <span>
                <div class="field vertical-spacing vertical-spacing--none">
                    <div class="Box-sc-1ljro7x-0 dgrBSz">
                    <div class="field__input">
                        <input id="fullName" name="fullName" class="input-text" value="" type="text">
                    </div>
                    </div>
                </div>
                </span>
            </div>
        </div>
    </div>
    <div class="Box-sc-1ljro7x-0 dmGOpi">
        <div class="two-column-layout">
            <div class="two-column-layout__header">
                <label class="form-label" for="fullName">
                    New Password
                    <span style="color: red;">*</span>
                </label>
            </div>
            <div class="two-column-layout__body">
                <span>
                    <div class="field vertical-spacing vertical-spacing--none">
                        <div class="Box-sc-1ljro7x-0 dgrBSz">
                            <div class="field__input">
                                <input id="fullName" name="fullName" class="input-text" value="" type="text">
                            </div>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <div class="Box-sc-1ljro7x-0 dmGOpi">
        <div class="two-column-layout">
            <div class="two-column-layout__header">
                <label class="form-label" for="fullName">
                    Confirm new password
                    <span style="color: red;">*</span>
                </label>
            </div>
            <div class="two-column-layout__body">
                <span>
                    <div class="field vertical-spacing vertical-spacing--none mb-4">
                        <div class="Box-sc-1ljro7x-0 dgrBSz">
                            <div class="field__input">
                                <input id="fullName" name="fullName" class="input-text" value="" type="text">
                            </div>
                        </div>
                    </div>
                </span>
                <div class="field field--submission">
                    <div class="button-group">
                        <div class="button-group__item">
                            <input type="submit" class="form-button btn green-btn fw-400" value="Save Changes">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")

@endsection