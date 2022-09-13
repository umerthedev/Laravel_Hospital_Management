<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
      <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="fw-semibold text-white tracking-wide" href="#">
          <span class="smini-visible">
            D<span class="opacity-75">x</span>
          </span>
          <span class="smini-hidden">
            Dash<span class="opacity-75">mix</span>
          </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
          <!-- Toggle Sidebar Style -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
          </button>
          <!-- END Toggle Sidebar Style -->

          <!-- Dark Mode -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
            <i class="far fa-moon" id="dark-mode-toggler"></i>
          </button>
          <!-- END Dark Mode -->

          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-times-circle"></i>
          </button>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
      </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
      <!-- Side Navigation -->
      <div class="content-side">
        <ul class="nav-main">
          <li class="nav-main-item">
            <a class="nav-main-link active" href="{{url('home')}}">
              <i class="nav-main-link-icon fa fa-location-arrow"></i>
              <span class="nav-main-link-name">Dashboard</span>
              <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link" href="{{url('add_doctor_view')}}">
              <i class="nav-main-link-icon fa fa-flask"></i>
              <span class="nav-main-link-name">Add Doctors</span>
              {{-- <span class="nav-main-link-badge badge rounded-pill bg-primary"></span> --}}
            </a>
          </li>
          
          <li class="nav-main-heading">Base</li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-border-all"></i>
              <span class="nav-main-link-name">Blocks</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_blocks_styles.html">
                  <span class="nav-main-link-name">Styles</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_blocks_options.html">
                  <span class="nav-main-link-name">Options</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_blocks_forms.html">
                  <span class="nav-main-link-name">Forms</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_blocks_themed.html">
                  <span class="nav-main-link-name">Themed</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_blocks_api.html">
                  <span class="nav-main-link-name">API</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-boxes"></i>
              <span class="nav-main-link-name">Widgets</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_tiles.html">
                  <span class="nav-main-link-name">Tiles</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_stats.html">
                  <span class="nav-main-link-name">Statistics</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_media.html">
                  <span class="nav-main-link-name">Media</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_users.html">
                  <span class="nav-main-link-name">Users</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_blog.html">
                  <span class="nav-main-link-name">Blog</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_widgets_various.html">
                  <span class="nav-main-link-name">Various</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-vector-square"></i>
              <span class="nav-main-link-name">Layout</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Page</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_page_default.html">
                      <span class="nav-main-link-name">Default</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_page_flipped.html">
                      <span class="nav-main-link-name">Flipped</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                      <span class="nav-main-link-name">Native Scrolling</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Main Content</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                      <span class="nav-main-link-name">Full Width</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                      <span class="nav-main-link-name">Narrow</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                      <span class="nav-main-link-name">Boxed</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Side Content</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_content_side_left.html">
                      <span class="nav-main-link-name">Left</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_content_side_right.html">
                      <span class="nav-main-link-name">Right</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Hero</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Color</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_hero_color_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_hero_color_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Image</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_hero_image_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_hero_image_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Video</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_hero_video_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_hero_video_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Header</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Fixed</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_fixed_light_glass.html">
                          <span class="nav-main-link-name">Light Glass</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_fixed_dark_glass.html">
                          <span class="nav-main-link-name">Dark Glass</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Static</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_static_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_static_light_glass.html">
                          <span class="nav-main-link-name">Light Glass</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_static_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_header_static_dark_glass.html">
                          <span class="nav-main-link-name">Dark Glass</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Footer</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_footer_static.html">
                      <span class="nav-main-link-name">Static</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_footer_fixed.html">
                      <span class="nav-main-link-name">Fixed</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Sidebar</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                      <span class="nav-main-link-name">Mini</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_sidebar_light.html">
                      <span class="nav-main-link-name">Light</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                      <span class="nav-main-link-name">Dark</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                      <span class="nav-main-link-name">Hidden</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="nav-main-link-name">Side Overlay</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                      <span class="nav-main-link-name">Visible</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                      <span class="nav-main-link-name">Hover Mode</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                      <span class="nav-main-link-name">No Page Overlay</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_layout_api.html">
                  <span class="nav-main-link-name">API</span>
                </a>
              </li>
            </ul>
          
          </li>
          
        </ul>
      </div>
      <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
  </nav>