<div class="navbar-wrapper">
        <div class="logo">
            <a href="{{url('/')}}"><img src="{{ asset('asset/image/logo.png') }}" alt="INCOBIST Logo" /></a>
        </div>
        <nav class="nav-menu" id="navMenu">
            <ul class="nav-links">
                <li class="active-nav">
                    <div class="nav-logo-dropdown">
                        <a href="{{url('/')}}">Home</a>
                    </div>
                </li>
                <hr class="nav-hr-line" />
                <li>
                    <div class="nav-logo-dropdown">
                        <a href="{{route('industry')}}">Industry</a>
                        <span class="dropdown-toggle"><i class="fas fa-caret-down"></i></span>
                    </div>
                    <ul class="submenu">
                        <hr class="nav-hr-line-2" />
                        <li><a href="{{route('high_tech_industry')}}">High Tech</a></li>
                        <li><a href="{{route('healthcare')}}">Healthcare</a></li>
                        <li><a href="{{route('banking')}}">Banking</a></li>
                        <li><a href="{{route('retail')}}">Retail</a></li>
                        <li><a href="{{route('travel')}}">Travel</a></li>
                        <li><a href="{{route('manufacturing')}}">Manufacturing</a></li>
                        <li><a href="{{route('education')}}">Education</a></li>
                        <li><a href="{{route('logistics')}}">Logistics</a></li>
                        <li><a href="{{route('public_sector')}}">Public Sector</a></li>
                    </ul>
                </li>
                <hr class="nav-hr-line" />
                <li>
                    <div class="nav-logo-dropdown">
                        <a href="{{route('resources')}}">Resources</a>
                        <span class="dropdown-toggle"><i class="fas fa-caret-down"></i></span>
                    </div>
                    <ul class="submenu">
                        <hr class="nav-hr-line-2" />
                        <li><a href="{{route('insight_blogs')}}">Insights and Blogs</a></li>
                        <li><a href="{{route('products_update')}}">Product Updates</a></li>
                        <li><a href="{{route('faq')}}">Investor FAQ</a></li>
                        <li><a href="{{route('media')}}">Media Kit</a></li>
                    </ul>
                </li>
                <hr class="nav-hr-line" />
                <li>
                    <div class="nav-logo-dropdown"><a href="{{route('solution')}}">Solution</a></div>
                </li>
                <hr class="nav-hr-line" />
                <li>
                    <div class="nav-logo-dropdown"><a href="{{route('experience')}}">Experience Center</a></div>
                </li>
                <hr class="nav-hr-line" />
                <li>
                    <div class="nav-logo-dropdown">
                        <a href="{{route('company')}}">Company</a>
                        <span class="dropdown-toggle"><i class="fas fa-caret-down"></i></span>
                    </div>
                    <ul class="submenu">
                        <hr class="nav-hr-line-2" />
                        <li><a href="{{route('career')}}">Career</a></li>
                        <li><a href="{{route('about')}}">Who Are We</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="nav-icons">
            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>