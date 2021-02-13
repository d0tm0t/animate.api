<div class="sidebar">
 <nav class="sidebar-nav">
  <ul class="nav">
   <li class="nav-title">
    @include('admin.layout.logo')
   </li>
   <li class="nav-item"><a class="nav-link" href="{{ url('admin/pages') }}">
     <font-awesome-icon icon="user-secret" />
     {{ trans('admin.page.title') }}
    </a></li>
   {{-- Do not delete me :) I'm used for auto-generation menu items --}}

   <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
   <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i>
     {{ __('Manage access') }}</a></li>
   <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i
      class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
  </ul>
 </nav>

</div>
