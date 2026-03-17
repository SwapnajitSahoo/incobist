 <aside class="app-sidebar">
     <div class="app-sidebar__logo">
         <a class="header-brand" href="index.html">
             <img src="{{ asset('asset/admin/images/brand/logo.png') }}" class="header-brand-img desktop-lgo" alt="Admintro logo">
             <img src="{{ asset('asset/admin/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Admintro logo">
             <img src="{{ asset('asset/admin/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Admintro logo">
             <img src="{{ asset('asset/admin/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
         </a>
     </div>
     <div class="app-sidebar__user">
         <div class="dropdown user-pro-body text-center">
             <div class="user-pic">
                 <img src="{{ asset('asset/admin/images/users/2.jpg') }}" alt="user-img" class="avatar-xl rounded-circle mb-1">
             </div>
             <div class="user-info">
                 <h5 class=" mb-1">{{ Auth::user()->name }} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
                 <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->email }}</span>
             </div>
         </div>

     </div>
     <ul class="side-menu app-sidebar3">
         <li class="side-item side-item-category mt-4">Main</li>
         <li class="slide">
             <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                 <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                     <path d="M0 0h24v24H0V0z" fill="none" />
                     <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                 </svg>
                 <span class="side-menu__label">Dashboard</span>
             </a>
         </li>

         <li class="side-item side-item-category">CMS</li>

         {{-- Navbar --}}
         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#">
                 <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                     <path d="M0 0h24v24H0V0z" fill="none" />
                     <path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z" />
                 </svg>
                 <span class="side-menu__label">Navbar</span>
                 <i class="angle fa fa-angle-right"></i>
             </a>
             <ul class="slide-menu">
                 <li>
                     <a href="{{ route('admin.nav_setup') }}" class="slide-item">Navigation Setup</a>
                 </li>
             </ul>
         </li>

         {{-- Pages --}}
         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#">
                 <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                     <path d="M0 0h24v24H0V0z" fill="none" />
                     <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z" />
                 </svg>
                 <span class="side-menu__label">Pages</span>
                 <i class="angle fa fa-angle-right"></i>
             </a>
             <ul class="slide-menu">
                 <li>
                     <a href="{{ route('admin.page-contents.index') }}" class="slide-item">All Pages</a>
                 </li>
                 <li>
                     <a href="{{ route('admin.page-contents.create') }}" class="slide-item">Add New Page</a>
                 </li>
             </ul>
         </li>

         {{-- Sections (quick access) --}}
         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#">
                 <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                     <path d="M0 0h24v24H0V0z" fill="none" />
                     <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                 </svg>
                 <span class="side-menu__label">Sections</span>
                 <i class="angle fa fa-angle-right"></i>
             </a>
             <ul class="slide-menu">
                 @php
                 $sidebarPages = \App\Models\PageContent::with('menu')
                 ->where('is_published', 1)
                 ->latest()
                 ->take(5)
                 ->get();
                 @endphp
                 @forelse($sidebarPages as $sPage)
                 <li>
                     <a href="{{ route('admin.page-contents.edit', $sPage->id) }}" class="slide-item">
                         {{ $sPage->page_title }}
                     </a>
                 </li>
                 @empty
                 <li><span class="slide-item text-muted">No pages yet</span></li>
                 @endforelse
             </ul>
         </li>

     </ul>
 </aside>