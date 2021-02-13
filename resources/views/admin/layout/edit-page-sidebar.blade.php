<div class="sidebar">
 <nav class="sidebar-nav">
  <ul class="nav">

   <li class="nav-title">
    <a href="{{ url('admin') }}" class="navbar-brand text-white">
     <i class="nav-icon fas fa-film"></i>
     animate.in
    </a>
   </li>
   

   <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/pages') }}">
     <i class="nav-icon fas fa-video text-white"></i>
     {{ trans('admin.page.title') }}
    </a>
   </li>

   <li class="nav-title">
    {{ trans('brackets/admin-ui::admin.sidebar.settings') }}
   </li>

   <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/admin-users') }}">
     <i class="fas fa-user-lock"></i>
     {{ __('Manage access') }}
    </a>
   </li>

   <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/translations') }}">
     <i class="fas fa-map-marker"></i>
     {{ __('Translations') }}
    </a>
   </li>

  </ul>
 </nav>
 <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
