<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('admin')}}">Essence</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{route('admin')}}">Es</a>
    </div>
    <ul class="sidebar-menu" id="myList">
      <li class="menu-header">Dashboard</li>
      <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}"><a href="{{route('admin')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

      <li class="menu-header">Quản lý</li>
      <li class="nav-item {{ request()->routeIs('category.*') ? 'active' : '' }}">
        <a href="{{ route('category.index') }}" class="nav-link">
          <i class="fas fa-columns"></i>
          <span>Danh mục</span>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('product.*') ? 'active' : '' }}">
        <a href="{{ route('product.index') }}" class="nav-link">
          <i class="fas fa-box"></i>
          <span>Sản phẩm</span>
        </a>
      </li>
    </ul>
  </aside>
</div>