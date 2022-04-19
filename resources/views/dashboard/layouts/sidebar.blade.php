<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="database"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/jumbotron*') ? 'active' : '' }}" href="/dashboard/jumbotron">
            <span data-feather="home"></span>
            Jumbotron
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }}" href="/dashboard/about/">
            <span data-feather="user"></span>
            About
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/menus*') ? 'active' : '' }}" href="/dashboard/menus">
            <span data-feather="shopping-cart"></span>
            Menu
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/faqs*') ? 'active' : '' }}" href="/dashboard/faqs">
            <span data-feather="search"></span>
            FAQ
          </a>
        </li>
    </div>
  </nav>