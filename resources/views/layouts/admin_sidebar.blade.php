<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ route("index") }}">
            <img src="{{ asset('asset/admin/images/brand/logo.png') }}" class="header-brand-img desktop-lgo"
                alt="Admintro logo">
            <img src="{{ asset('asset/admin/images/brand/logo1.png') }}" class="header-brand-img dark-logo"
                alt="Admintro logo">
            <img src="{{ asset('asset/admin/images/brand/favicon.png') }}" class="header-brand-img mobile-logo"
                alt="Admintro logo">
            <img src="{{ asset('asset/admin/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo"
                alt="Admintro logo">
        </a>
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{ asset('asset/admin/images/users/2.jpg') }}" alt="user-img"
                    class="avatar-xl rounded-circle mb-1">
            </div>
            <div class="user-info">
                <h5 class=" mb-1">{{ Auth::user()->name }} <i class="ion-checkmark-circled  text-success fs-12"></i>
                </h5>
                <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->email }}</span>
            </div>
        </div>

    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4">Main</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('admin.dashboard') }}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                </svg>
                <span class="side-menu__label">Dashboard</span>
            </a>
        </li>

        <li class="side-item side-item-category">CMS</li>

        {{-- Navbar --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z" />
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
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z" />
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
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
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

        {{-- Insight Blogs --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V9h2v7zm4 0h-2v-7h2v7z" />
                </svg>
                <span class="side-menu__label">Insight Blogs</span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li>
                    <a href="{{ route('admin.insight-blogs.index') }}" class="slide-item">All Blogs</a>
                </li>
                <li>
                    <a href="{{ route('admin.insight-blogs.create') }}" class="slide-item">Add New Blog</a>
                </li>
            </ul>
        </li>
        {{-- Products --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M20 7h-4V5c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zm10 15H4V9h16v11z" />
                </svg>
                <span class="side-menu__label">Products</span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li>
                    <a href="{{ route('admin.products.index') }}" class="slide-item">All Products</a>
                </li>
                <li>
                    <a href="{{ route('admin.products.create') }}" class="slide-item">Add New Product</a>
                </li>
            </ul>
        </li>

        {{-- FAQs --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M4 6h18V4H4c-1.1 0-2 .9-2 2v11H0v3h14v-3H4V6zm19 2h-6c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1zm-1 9h-4v-7h4v7z" />
                </svg>
                <span class="side-menu__label">FAQs</span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li>
                    <a href="{{ route('admin.faqs.index') }}" class="slide-item">All FAQs</a>
                </li>
                <li>
                    <a href="{{ route('admin.faqs.create') }}" class="slide-item">Add New FAQ</a>
                </li>
            </ul>
        </li>
        {{-- Potential ROI --}}
        <li class="slide">
            <a class="side-menu__item" href="{{ route('admin.roi.index') }}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M11 2v20c-5.07-.5-9-4.79-9-10s3.93-9.5 9-10zm2 0v8.51c2 .15 3.89 1.1 5.13 2.49l.71-.71C17.43 10.85 15.31 9.3 13 9.04V2zm0 18v-7.04c2.31-.26 4.43-1.81 5.84-3.25l.71.71c-1.24 1.39-3.13 2.34-5.13 2.49V22c5.07-.5 9-4.79 9-10s-3.93-9.5-9-10v.04z" />
                </svg>
                <span class="side-menu__label">Potential ROI</span>
            </a>
        </li>
        {{-- Contact Inquiries --}}
        <li class="slide">
            <a class="side-menu__item" href="{{ route('admin.contacts.index') }}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
                <span class="side-menu__label">Contact Inquiries</span>
            </a>
        </li>
        {{-- Resources --}}
        <li class="slide">
            <a class="side-menu__item" href="{{ route('admin.resources.index') }}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="1 1 24 24"
                    width="24">
                    <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z" />
                </svg>
                <span class="side-menu__label">Resources</span>
            </a>
        </li>
    </ul>
</aside>