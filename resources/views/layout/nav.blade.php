      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview">
                <a href="/dashboard" class="nav-link {{ request()->is('home') ?  'active' : ''}}">
                  <i class="nav-icon fas fa-chalkboard-teacher"></i>
                  <p>
                    MONITOR
                  </p>
                </a>
              </li>
          <li class="nav-item has-treeview {{ request()->is('fo') ?  'menu-open' : ''}}">
            <a href="#" class="nav-link {{ request()->is('fo') ?  'active' : ''}}">
              <i class="nav-icon fas fa-link"></i>
              <p>
                FO Links
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/fo" class="nav-link {{ request()->is('fo') ?  'active' : ''}}">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>Ont / Onu / Zte</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ request()->is('radio') ?  'menu-open' : ''}}">
            <a href="#" class="nav-link {{ request()->is('radio') ?  'active' : ''}}">
              <i class="nav-icon fas fa-broadcast-tower"></i>
              <p>
                Wireless Links
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/radio" class="nav-link {{ request()->is('radio') ?  'active' : ''}}">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>Radio / Sektoral</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ request()->is('server') ?  'menu-open' : ''}}">
            <a href="#" class="nav-link {{ request()->is('server') ?  'active' : ''}}">
              <i class="nav-icon fas fa-database"></i>
              <p>
                SERVER
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/server" class="nav-link {{ request()->is('server') ?  'active' : ''}}">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>VM / Master / Router</p>
                </a>
              </li>
            </ul>
          </li>             
          <li class="nav-item has-treeview {{ request()->is('akses') ?  'menu-open' : ''}}">
            @if (auth()->user()->level =='admin')
            <a href="#" class="nav-link {{ request()->is('akses') ?  'active' : ''}}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                SETTING
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @endif
            <ul class="nav nav-treeview">
              @if (auth()->user()->level =='admin')
              <li class="nav-item">
                <a href="/akses" class="nav-link {{ request()->is('akses') ?  'active' : ''}}">
                  <i class="far fa-hand-point-right nav-icon"></i>
                  <p>User Akses</p>
                </a>
              </li>
              @endif
            </ul>
          </li>                            
      </ul>
      </nav>
      <!-- /.sidebar-menu -->