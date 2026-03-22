<div class="navbar-wrapper">
    <div class="logo">
        <a href="{{url('/')}}"><img src="{{ asset('asset/image/logo.png') }}" alt="INCOBIST Logo" /></a>
    </div>
    <nav class="nav-menu" id="navMenu">
        <ul class="nav-links">
            @foreach($menus as $menu)
            <li class="{{ request()->url() == url($menu->url) ? 'active-nav' : '' }}">

                <div class="nav-logo-dropdown">
                    <a href="{{ $menu->url ? url($menu->url) : '#' }}" target="{{ $menu->target }}">
                        {{ $menu->title }}
                    </a>

                    @if($menu->children->count() > 0)
                    <span class="dropdown-toggle">
                        <i class="fas fa-caret-down"></i>
                    </span>
                    @endif
                </div>

                {{-- Submenu --}}
                @if($menu->children->count() > 0)
                <ul class="submenu">
                    <hr class="nav-hr-line-2" />

                    @foreach($menu->children as $child)
                    <li>
                        <a href="{{ $child->url ? url($child->url) : '#' }}" target="{{ $child->target }}">
                            {{ $child->title }}
                        </a>
                    </li>
                    @endforeach

                </ul>
                @endif

            </li>

            <hr class="nav-hr-line" />
            @endforeach
        </ul>
    </nav>
    <div class="nav-icons">
        <div class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</div>