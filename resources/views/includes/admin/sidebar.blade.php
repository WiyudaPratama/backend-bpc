<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-text mx-3">Sifo BPC</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-user-shield"></i>
      <span>Pengurus</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('member.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Member</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('study.index') }}">
      <i class="fas fa-fw fa-book-reader"></i>
      <span>Kelas</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-dollar-sign"></i>
      <span>Transaksi</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>