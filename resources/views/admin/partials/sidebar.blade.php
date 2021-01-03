<div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="{{url('admin/dashboard')}}" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="{{url('admin/categories')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="layout"></i>
              </span>
              <span class="sidebar-nav-name">
                Categories
              </span>
              <span class="sidebar-nav-end">
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="{{url('admin/Blog')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="pie-chart"></i>
              </span>
              <span class="sidebar-nav-name">
                Mengelola Konten
              </span>
              <span class="sidebar-nav-end">
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Pengaturan Content Layouts
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
              <li class="sidebar-nav-item">
                <a href="{{url('admin/AboutUs')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    AU
                  </span>
                  <span class="sidebar-nav-name">
                    About Us
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="{{url('admin/WhyChooseUs')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    WU
                  </span>
                  <span class="sidebar-nav-name">
                    Why Choose Us
                  </span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- Sidebar End -->