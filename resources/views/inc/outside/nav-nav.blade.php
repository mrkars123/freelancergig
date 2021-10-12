<div class="nav-wrapper">
  <div class="v3-container">
    @include('inc.outside.nav-header')
    <div id="nav-main" class="nav-collapse-1">
      <div class="nav-left nav-align nav-d-flex flex-1 nh-search">
        <!---->
        <!---->
        @include('inc.outside.nav-search')
        <a role="menuitem" href="http://127.0.0.1:8000/become-a-seller/" class="nav-item login-link d-none d-lg-block px-1">Become a Seller</a>
        <span class="divider d-none d-lg-block"></span>
        <a role="menuitem" href="/signup/?dest=home" class="up-btn up-btn-primary up-btn-sm mr-0 mb-0 navbar-cta-btn d-none d-lg-block" data-toggle="modal" data-target="#loginModal">Post a Job</a>
        <div class="locale" style="position: relative;">
          <a role="menuitem" class="up-btn btn-light up-btn-primary up-btn-sm mr-0 mb-0 navbar-cta-btn d-none d-lg-block">
            <span class="lang">English</span>
            <i _ngcontent-xqo-c2="" class="icon">
              <svg fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" _ngcontent-dpr-c60="" class="inline-block w-6"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM2 12h20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" _ngcontent-dpr-c60=""></path><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10v0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" _ngcontent-dpr-c60=""></path></svg>
            </i>
          </a>
          <aside class="popover-box">
            <div class="popover-box-content">
              <section class="selection-list">
                <a class="item-row text-body-default" href="http://127.0.0.1:8000/ar/" data-locale="ar-EG">
                  <div class="item-row-content selected">
                    <p><!-- -->العربية</p>
                  </div>
                </a>
                <a class="item-row text-body-default" href="http://127.0.0.1:8000/en/" data-locale="en-US">
                  <div class="item-row-content selected">
                    <p><!-- -->English</p>
                  </div>
                </a>
              </section>
            </div>
          </aside>
        </div>
        @include('inc.outside.link_out_system')
      </div>
    </div>
  </div>
</div>