@extends('admin/layout/edit-page')

@section('content')
 <div class="app-body overflow-hidden m-0">

  @if (View::exists('admin.layout.edit-page-sidebar'))
   @include('admin.layout.edit-page-sidebar')
  @endif

  <main class="main m-0">

   <div id="app" :class="{'loading': loading}" class="container-lg vh-100">
    <div class="modals">
     <v-dialog />
    </div>
    <div>
     <notifications position="bottom right" :duration="2000" />
    </div>
    <div class="vh-100">
     <iframe src="{{ $page->url }}"></iframe>
    </div>
   </div>
  </main>
 </div>
@endsection

@section('bottom-scripts')
 @parent
@endsection
