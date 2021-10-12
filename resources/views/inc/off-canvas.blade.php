<div class="off--canvas canvas-server">
  <nav class="navbar">
    @guest
      <div class="nav__menu">
        <div class="navbar-collapse">
          <ul class="custom-menu">
            <li>
              <div class="nh-search" style="margin-bottom: 15px">
                <div class="nh-search-container">
                  <form method="get" action="https://zeerk.com/search-jobs/">
                    <div class="ui input">
                      <input type="text" id="big-search" name="term1" autocomplete="off" onkeyup="" value="" placeholder="Find a Services">
                      <button type="submit" aria-label="Search" class="nav-btn-icon"></button>
                    </div>
                    <div id="big-search-submit" class="new-search-icon"></div>
                  </form>
                  <div class="autocomplete-list-container" style="display: none;"></div>
                </div>  
              </div>
            </li>
            <li class="dropdown-account dropdown">
              <a href="http://127.0.0.1:8000/login">
                <i class="fa fa-fw fa-sign-in"></i>
                Login
              </a>
            </li>
            <li class="dropdown-account dropdown">
              <a href="http://127.0.0.1:8000/signup">
                <i class="fa fa-user-plus i-login-register"></i>
                Register
              </a>
            </li>
          </ul>
        </div>
      </div>
    @else
      <div class="nav__menu">
        <div class="navbar-collapse">
          <ul class="custom-menu">
            <li>
              <div class="nh-search" style="margin-bottom: 15px">
                <div class="nh-search-container">
                  <form method="get" action="https://zeerk.com/search-jobs/">
                    <div class="ui input">
                      <input type="text" id="big-search" name="term1" autocomplete="off" onkeyup="" value="" placeholder="Find a Services">
                    </div>
                    <div id="big-search-submit" class="new-search-icon"></div>
                  </form>
                  <div class="autocomplete-list-container" style="display: none;"></div>
                </div>  
              </div>
          </li>
          <li class="dropdown dropdown-account">
            <a href="#" class="dropdown-toggle hlo-btn" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="pull-left">
                <img class="avatar avatar-xs m-0" src="https://d.top4top.io/p_1731mr5gr1.png" width="" height="">
              </div>
              <div class="media-body">
                <span class="account-name ellipsis">Welcome Eslam Youssef Mohamed</span>
                <span class="fa fa-chevron-down icon icon-rotates"></span> 
              </div>
            </a>
            <ul class="dropdown-menu nav-dropdown-menu mw-350">
              <li>
                <ul class="nav-dropdown-list nav-dropdown-scroll">
                  <li class="active">
                    <a href="#">
                      <div class="d-flex">
                        <up-c-img class="nav-avatar hydrated">
                          <up-c-intersection-observer class="hydrated">
                            <img src="https://www.upwork.com/profile-portraits/c1f1QSRXMu46TJTPG7xcShZqQbreY4zilzjgDVTUL-G8lIlyPgK270P0KmZdTK1kK2" alt="Mohamed abdelghney Hussin">
                          </up-c-intersection-observer>
                        </up-c-img>
                        <div class="d- flex-1 align-items-center">
                          <div class="ellipsis user">
                            Mohamed abdelghney Hussin
                          </div>
                          <div class="org-type ellipsis">
                            Seller
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find Work
            <span class="fa fa-chevron-down icon icon-rotates" aria-hidden="true"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="index.html">Find Jobs</a></li>
              <li><a href="index.html">Saved Jobs</a></li>
              <li><a href="index.html">Jobs with My Skills</a></li>
              <li><a href="index.html">Membership</a></li>
              <li><a href="index.html">Get Certifed</a></li>
            </ul>
          </li>
          <li class="dropdown-account dropdown">
            <a href="#">My Jobs</a>
          </li>
          <li class="dropdown-account dropdown">
            <a href="#">
              message <span>(1)</span>
            </a>
          </li>
          <li class="dropdown-account dropdown">
            <a href="#">
              Notifications <span>(1)</span>
            </a>
          </li>
          <li class="dropdown-account transformation dropdown">
            <a class="link--dropdown" href="#" style="">
            <span class="fa fa-cog"></span>
              Settings
            </a>
          </li>
          <li class="dropdown-account transformation dropdown">
            <a class="link--dropdown" href="#">
              <span class="fa fa-question-circle"></span>
                  Help &amp; Support
              </a>
          </li>
          <li class="dropdown-account transformation dropdown">
            <a class="link--dropdown" href="#" style="">
              <span class="fa fa-sign-out"></span>
                  Log Out
              </a>
          </li>
        </ul>
        </div>
      </div>
    @endguest
  </nav>
</div>
<div class="off--canvas canvas-server1">
  <nav class="navbar">
    <div class="nav__menu">
      <div class="navbar-collapse">
        <ul class="custom-menu">
          <div class="navbar-title d-md-block d-lg-none">
            <h4 class="mt-2 mb-0 text-center">Categories</h4>
          </div>
          <li class="dropdown-account dropdown account">
            <a href="http://127.0.0.1:8000/shopping-card/" class="dropdown-toggle">
              Programming &amp; IT
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle">
              Graphics &amp; Design
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle">
              Digital Marketing
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle">
              Writing &amp; Translation
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle"> 
              Video &amp; Animation
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle">
              Music &amp; Audio
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle">
              Business
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle">
              Entertainment
            </a>
          </li>
          <li class="dropdown-account dropdown account">
            <a href="#" class="dropdown-toggle">
              See All Categories
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>