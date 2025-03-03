<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> E-comproject</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>

        <div class="sl-sideleft-menu">

          <a href="{{url('/')}}" class="sl-menu-link" target="_blank">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
              <span class="menu-item-label">Visit Site</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          <a href="{{route('admin.dashboard')}}" class="sl-menu-link @yield('dashboard-active')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

          <a href="{{route('brand')}}" class="sl-menu-link @yield('brand-active')">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
              <span class="menu-item-label">Brands</span>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link @yield('categories-active')">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Categories</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('category')}}" class="nav-link @yield('add-category-active')">All Category</a></li>
          <li class="nav-item"><a href="chart-flot.html" class="nav-link">All Sub-category</a></li>
        </ul>

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
