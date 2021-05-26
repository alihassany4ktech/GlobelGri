

 <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: 0.8" />
                <span class="brand-text font-weight-light">globelgri</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
          
                            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
 
                        
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">admin</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search" />
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{route('admin.home')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                         
                        </li>
                        {{-- Profile --}}
                         <li class="nav-item">
                            <a href="{{route('admin.profile')}}" class="nav-link">

                                <i class="nav-icon  fas fa-user"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>      
                        {{-- end Ptofile  --}}  

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Agents
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.agents')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Agents</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.addagent')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Agent</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.trash')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Trashed Agents</p>
                                    </a>
                                </li>
                            </ul>
                        </li>      
                        
                        
                        {{-- General Settings --}}
                         <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fa fa-setting"></i> --}}
                                <i class="nav-icon  fas fa-cog"></i>
                                <p>
                                    General Setting
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.generalsetting')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Setting</p>
                                    </a>
                                </li>
                            </ul>
                        </li>      
                        {{-- end general setting  --}}

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

{{-- 
    
    <!-- Side Overlay-->
    <aside id="side-overlay">
      <!-- Side Header -->
      <div class="content-header content-header-fullrow">
          <div class="content-header-section align-parent">
              <!-- Close Side Overlay -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                  <i class="fa fa-times text-danger"></i>
              </button>
              <!-- END Close Side Overlay -->

              <!-- User Info -->
              <div class="content-header-item">
                  <a class="img-link mr-5" href="be_pages_generic_profile.html">
                      <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                  </a>
                  <a class="align-middle link-effect text-primary-dark font-w600" href="{{asset('be_pages_generic_profile.html')}}">John Smith</a>
              </div>
              <!-- END User Info -->
          </div>
      </div>
      <!-- END Side Header -->

      <!-- Side Content -->
      <div class="content-side">
          <!-- Search -->
          <div class="block pull-t pull-r-l">
              <div class="block-content block-content-full block-content-sm bg-body-light">
                  <form action="be_pages_generic_search.html" method="post">
                      <div class="input-group">
                          <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                          <div class="input-group-append">
                              <button type="submit" class="btn btn-secondary px-10">
                                  <i class="fa fa-search"></i>
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <!-- END Search -->

          <!-- Mini Stats -->
          <div class="block pull-r-l">
              <div class="block-content block-content-full block-content-sm bg-body-light">
                  <div class="row">
                      <div class="col-4">
                          <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                          <div class="font-size-h4">460</div>
                      </div>
                      <div class="col-4">
                          <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                          <div class="font-size-h4">728</div>
                      </div>
                      <div class="col-4">
                          <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                          <div class="font-size-h4">$7,860</div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- END Mini Stats -->

          <!-- Friends -->
          <div class="block pull-r-l">
              <div class="block-header bg-body-light">
                  <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                  <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                          <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                  </div>
              </div>
              <div class="block-content">
                  <ul class="nav-users push">
                      <li>
                          <a href="be_pages_generic_profile.html">
                              <img class="img-avatar" src="{{asset('assets/media/avatars/avatar1.jpg')}}" alt="">
                              <i class="fa fa-circle text-success"></i> Carol Ray
                              <div class="font-w400 font-size-xs text-muted">Photographer</div>
                          </a>
                      </li>
                      <li>
                          <a href="be_pages_generic_profile.html">
                              <img class="img-avatar" src="{{asset('assets/media/avatars/avatar12.jpg')}}" alt="">
                              <i class="fa fa-circle text-success"></i> Jose Mills
                              <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                          </a>
                      </li>
                      <li>
                          <a href="be_pages_generic_profile.html">
                              <img class="img-avatar" src="{{asset('assets/media/avatars/avatar7.jpg')}}" alt="">
                              <i class="fa fa-circle text-warning"></i> Alice Moore
                              <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                          </a>
                      </li>
                      <li>
                          <a href="be_pages_generic_profile.html">
                              <img class="img-avatar" src="{{asset('assets/media/avatars/avatar9.jpg')}}" alt="">
                              <i class="fa fa-circle text-danger"></i> Jeffrey Shaw
                              <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- END Friends -->

          <!-- Activity -->
          <div class="block pull-r-l">
              <div class="block-header bg-body-light">
                  <h3 class="block-title">
                      <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                  </h3>
                  <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                          <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                  </div>
              </div>
              <div class="block-content">
                  <ul class="list list-activity">
                      <li>
                          <i class="si si-wallet text-success"></i>
                          <div class="font-w600">+$29 New sale</div>
                          <div>
                              <a href="{{asset('javascript:void(0)')}}">Admin Template</a>
                          </div>
                          <div class="font-size-xs text-muted">5 min ago</div>
                      </li>
                      <li>
                          <i class="si si-close text-danger"></i>
                          <div class="font-w600">Project removed</div>
                          <div>
                              <a href="{{asset('javascript:void(0)')}}">Best Icon Set</a>
                          </div>
                          <div class="font-size-xs text-muted">26 min ago</div>
                      </li>
                      <li>
                          <i class="si si-pencil text-info"></i>
                          <div class="font-w600">You edited the file</div>
                          <div>
                              <a href="{{asset('javascript:void(0)')}}">
                                  <i class="fa fa-file-text-o"></i> Docs.doc
                              </a>
                          </div>
                          <div class="font-size-xs text-muted">3 hours ago</div>
                      </li>
                      <li>
                          <i class="si si-plus text-success"></i>
                          <div class="font-w600">New user</div>
                          <div>
                              <a href="{{asset('javascript:void(0)')}}">StudioWeb - View Profile</a>
                          </div>
                          <div class="font-size-xs text-muted">5 hours ago</div>
                      </li>
                      <li>
                          <i class="si si-wrench text-warning"></i>
                          <div class="font-w600">App v5.5 is available</div>
                          <div>
                              <a href="{{asset('javascript:void(0)')}}">Update now</a>
                          </div>
                          <div class="font-size-xs text-muted">8 hours ago</div>
                      </li>
                      <li>
                          <i class="si si-user-follow text-pulse"></i>
                          <div class="font-w600">+1 Friend Request</div>
                          <div>
                              <a href="{{asset('javascript:void(0)')}}">Accept</a>
                          </div>
                          <div class="font-size-xs text-muted">1 day ago</div>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- END Activity -->

          <!-- Profile -->
          <div class="block pull-r-l">
              <div class="block-header bg-body-light">
                  <h3 class="block-title">
                      <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                  </h3>
                  <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                  </div>
              </div>
              <div class="block-content">
                  <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                      <div class="form-group mb-15">
                          <label for="side-overlay-profile-name">Name</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                              <div class="input-group-append">
                                  <span class="input-group-text">
                                      <i class="fa fa-user"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group mb-15">
                          <label for="side-overlay-profile-email">Email</label>
                          <div class="input-group">
                              <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                              <div class="input-group-append">
                                  <span class="input-group-text">
                                      <i class="fa fa-envelope"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group mb-15">
                          <label for="side-overlay-profile-password">New Password</label>
                          <div class="input-group">
                              <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                              <div class="input-group-append">
                                  <span class="input-group-text">
                                      <i class="fa fa-asterisk"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group mb-15">
                          <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                          <div class="input-group">
                              <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                              <div class="input-group-append">
                                  <span class="input-group-text">
                                      <i class="fa fa-asterisk"></i>
                                  </span>
                              </div>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-6">
                              <button type="submit" class="btn btn-block btn-alt-primary">
                                  <i class="fa fa-refresh mr-5"></i> Update
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <!-- END Profile -->

          <!-- Settings -->
          <div class="block pull-r-l">
              <div class="block-header bg-body-light">
                  <h3 class="block-title">
                      <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                  </h3>
                  <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                  </div>
              </div>
              <div class="block-content">
                  <div class="row gutters-tiny">
                      <div class="col-6">
                          <div class="custom-control custom-checkbox mb-5">
                              <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                              <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                          </div>
                          <div class="custom-control custom-checkbox mb-5">
                              <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                              <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                          </div>
                          <div class="custom-control custom-checkbox mb-5">
                              <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                              <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="custom-control custom-checkbox mb-5">
                              <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                              <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                          </div>
                          <div class="custom-control custom-checkbox mb-5">
                              <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                              <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                          </div>
                          <div class="custom-control custom-checkbox mb-5">
                              <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                              <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- END Settings -->
      </div>
      <!-- END Side Content -->
  </aside>
  <!-- END Side Overlay -->

  <!-- Sidebar -->
  <!--
      Helper classes

      Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
      Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

      Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
      Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
          - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
  -->
  <nav id="sidebar">
      <!-- Sidebar Content -->
      <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header content-header-fullrow px-15">
              <!-- Mini Mode -->
              <div class="content-header-section sidebar-mini-visible-b">
                  <!-- Logo -->
                  <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                      <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                  </span>
                  <!-- END Logo -->
              </div>
              <!-- END Mini Mode -->

              <!-- Normal Mode -->
              <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                  <!-- Close Sidebar, Visible only on mobile screens -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                      <i class="fa fa-times text-danger"></i>
                  </button>
                  <!-- END Close Sidebar -->

                  <!-- Logo -->
                  <div class="content-header-item">
                      <a class="link-effect font-w700" href="index.html">
                          <i class="si si-fire text-primary"></i>
                          <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                      </a>
                  </div>
                  <!-- END Logo -->
              </div>
              <!-- END Normal Mode -->
          </div>
          <!-- END Side Header -->

          <!-- Side User -->
          <div class="content-side content-side-full content-side-user px-10 align-parent">
              <!-- Visible only in mini mode -->
              <div class="sidebar-mini-visible-b align-v animated fadeIn">
                  <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="sidebar-mini-hidden-b text-center">
                  <a class="img-link" href="be_pages_generic_profile.html">
                      <img class="img-avatar" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                  </a>
                  <ul class="list-inline mt-10">
                      <li class="list-inline-item">
                          <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">J. Smith</a>
                      </li>
                      <li class="list-inline-item">
                          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                          <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                              <i class="si si-drop"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                              <i class="si si-logout"></i>
                          </a>
                      </li>
                  </ul>
              </div>
              <!-- END Visible only in normal mode -->
          </div>
          <!-- END Side User -->

          <!-- Side Navigation -->
          <div class="content-side content-side-full">
              <ul class="nav-main">
                  <li>
                      <a class="active" href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                  </li>
                  <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                  <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-users"></i><span class="sidebar-mini-hide">Users</span></a>
                      <ul>
                          <li>
                              <a  href="{{route('admin.users')}}"><span class="sidebar-mini-hide">All Users</span></a>
                          </li>
                          <li>
                            <a  href="{{route('admin.adduser')}}"><span class="sidebar-mini-hide">Add User</span></a>
                          </li>
                         <li>
                            <a  href="{{route('admin.trash')}}"><span class="sidebar-mini-hide">Trashed Users</span></a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Next</span></li>
                  <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-product-hunt"></i><span class="sidebar-mini-hide">Product</span></a>
                      <ul>
                          <li>
                              <a href="{{route('admin.products')}}">All Products</a>
                          </li>
                          <li>
                              <a href="{{route('admin.product.create')}}">Add Product</a>
                          </li>
                          <li>
                              <a href="be_blocks_draggable.html"></a>
                          </li>
                          <li>
                              <a href="be_blocks_api.html"></a>
                          </li>
                      </ul>
                  </li>
                 
              </ul>
          </div>
          <!-- END Side Navigation -->
      </div>
      <!-- Sidebar Content -->
  </nav>
  <!-- END Sidebar -->

 
 
   --}}