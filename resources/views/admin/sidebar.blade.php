<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown">
          <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        {{-- <li class="dropdown">
          <a href="{{ route('admin.menus.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Menu</span></a>
        </li> --}}
        <li class="dropdown">
          <a href="{{ route('admin.home.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Home</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.about.index') }}" class="nav-link"><i data-feather="monitor"></i><span>About</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.resume.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Resume</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.services.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Services</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.skills.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Skills</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.projects.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Projects</span></a>
        </li>
      
       
      </ul>
    </aside>
  </div>

