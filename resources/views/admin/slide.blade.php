<div class="main-sidebar sidebar-style-2" style="overflow: hidden; outline: none;" tabindex="1">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/">
        <span style="color: #fff;text-align: center;">Admin Control</span>
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">A.D</a>
    </div>
    <ul class="sidebar-menu">
      <li class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="fas fa-home"></i> 
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sidebar-item {{ Request::is('admin/users') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.users') }}">
          <i class="fas fa-users"></i> 
          <span>Users</span>
        </a>
      </li>
      <li class="sidebar-item {{ Request::is('admin/category*') ? 'active' : '' }}  {{ Request::is('admin/subcategory*') ? 'active' : '' }}">
        <a style="cursor: pointer;" class="nav-link" href="#" data-toggle="collapse" data-target="#subcategory" aria-expanded="true" aria-controls="subcategory">
          <i class="fas fa-th-large"></i> 
          <span>Categories</span>
        </a>
        <ul style="padding: 0;transition: all 0.5s ease 0s;" class="collapse  mm-collapse {{ Request::is('admin/category*') ? 'show' : '' }} {{ Request::is('admin/subcategory*') ? 'show' : '' }}" id="subcategory">
          <li style="display: block;width: 100%;" class="sidebar-item-new {{ Request::is('admin/category*') ? 'active' : '' }}">
            <a href="{{ route('admin.category.index') }}" class="nav-link" style="padding: .4rem 1.5rem .4rem 5rem  !important;">Category</a>
          </li>
          <li style="display: block;width: 100%;" class="sidebar-item-new {{ Request::is('admin/subcategory*') ? 'active' : '' }}">
            <a href="{{ route('admin.subcategory.index') }}" class="nav-link" style="padding: .4rem 1.5rem .4rem 5rem  !important;">Sub Category</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item {{ Request::is('admin/tags*') ? 'active' : '' }}  {{ Request::is('admin/tags*') ? 'active' : '' }}">
        <a style="cursor: pointer;" class="nav-link" href="{{ route('admin.tags.index') }}" aria-expanded="true" aria-controls="tags">
          <i class="fas fa-tags"></i>
          <span>Tags</span>
        </a>
      </li>

      <li class="sidebar-item {{ Request::is('admin/proposals') ? 'active' : '' }}">
        <a class="nav-link"href="{{ route('admin.proposals') }}">
          <i>
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="buffer" class="svg-inline--fa fa-buffer fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor" d="M427.84 380.67l-196.5 97.82a18.6 18.6 0 0 1-14.67 0L20.16 380.67c-4-2-4-5.28 0-7.29L67.22 350a18.65 18.65 0 0 1 14.69 0l134.76 67a18.51 18.51 0 0 0 14.67 0l134.76-67a18.62 18.62 0 0 1 14.68 0l47.06 23.43c4.05 1.96 4.05 5.24 0 7.24zm0-136.53l-47.06-23.43a18.62 18.62 0 0 0-14.68 0l-134.76 67.08a18.68 18.68 0 0 1-14.67 0L81.91 220.71a18.65 18.65 0 0 0-14.69 0l-47.06 23.43c-4 2-4 5.29 0 7.31l196.51 97.8a18.6 18.6 0 0 0 14.67 0l196.5-97.8c4.05-2.02 4.05-5.3 0-7.31zM20.16 130.42l196.5 90.29a20.08 20.08 0 0 0 14.67 0l196.51-90.29c4-1.86 4-4.89 0-6.74L231.33 33.4a19.88 19.88 0 0 0-14.67 0l-196.5 90.28c-4.05 1.85-4.05 4.88 0 6.74z"></path>
            </svg>
          </i>
          <span>Offers / Proposals</span>
        </a>
      </li>
      <style type="text/css">
        .fa-buffer:before {
            content: "\f837";
        }
      </style>
      <li class="sidebar-item {{ Request::is('admin/requests*') ? 'active' : '' }}">
        <a class="nav-link"href="{{ route('admin.requests.index') }}" >
          <div data-toggle="collapse" data-target="#requests" aria-expanded="true" aria-controls="requests"><i class="fas fa-edit"></i> </div>
          <span>Requests</span>
        </a>
        <ul style="padding: 0;transition: all 0.5s ease 0s;" class="collapse  mm-collapse {{ Request::is('admin/requests*') ? 'show' : '' }}" id="<!-- requests -->">
          <li style="display: block;width: 100%;" class="sidebar-item-new {{ Request::is('admin/requests/create') ? 'active' : '' }}">
            <a href="{{ route('admin.requests.create') }}" class="nav-link" style="padding: .4rem 1.5rem .4rem 5rem  !important;">Create requests</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item {{ Request::is('admin/withdraw-money') ? 'active' : '' }}">
        <a class="nav-link"href="{{ route('admin.withdraw') }}">
          <i class="fas fa-coins"></i> 
          <span>Withdraw Money</span>
        </a>
      </li>
      <li>
        <a class="nav-link" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt" style="font-size:20px;"></i>Sign Out
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      </li>
    </ul>
  </aside>
</div>