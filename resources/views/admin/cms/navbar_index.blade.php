<x-app-layout>
    @section('page_title', 'Navbar Menus')

    <div class="container-fluid px-4">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center my-4">
            <div>
                <h4 class="mb-0 fw-bold">Navbar Menus</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="font-size: 0.85rem;">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item active">Navbar Menus</li>
                    </ol>
                </nav>
            </div>
            <a href="{{ route('admin.nav_setup') }}" class="btn btn-primary shadow-sm px-4 py-2" style="border-radius: 8px; font-weight: 500;">
                <i class="fe fe-plus me-1"></i> Add Menu Item
            </a>
        </div>

        <!-- Flash Message -->
        @if(session('success'))
            <div id="flash-message" class="custom-alert d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" onclick="removeFlash()" class="btn-close-custom bg-transparent border-0 p-0 text-dark opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <script>
                function removeFlash() {
                    const flash = document.getElementById('flash-message');
                    if (flash) {
                        flash.classList.add('hide');
                        setTimeout(() => flash.remove(), 400);
                    }
                }
                setTimeout(removeFlash, 4000);
            </script>
        @endif

        <style>
            .custom-alert {
                background: linear-gradient(135deg, #ecfdf5, #d1fae5);
                color: #065f46;
                padding: 12px 16px;
                border-radius: 10px;
                border-left: 4px solid #10b981;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
                font-weight: 500;
                transition: all 0.4s ease;
            }
            .custom-alert.hide {
                opacity: 0;
                transform: translateY(-10px);
            }
            .table-action-btn {
                background: white;
                border-radius: 6px;
                font-weight: 500;
                font-size: 0.8rem;
                padding: 4px 12px;
                border: 1px solid #f3f4f6;
                transition: all 0.2s;
            }
            .table-action-btn:hover {
                background: #f9fafb;
                transform: translateY(-1px);
                box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            }
            code {
                color: #e83e8c;
                background-color: #f8f9fa;
                padding: 2px 4px;
                border-radius: 4px;
            }
        </style>

        <!-- Navbar Menu List Table -->
        <div class="card border-0 shadow-sm mb-5" style="border-radius: 12px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-white text-uppercase"
                            style="font-size: 0.75rem; font-weight: 700; color: #4b5563; border-bottom: 2px solid #f3f4f6;">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Title</th>
                                <th class="px-4 py-3">Slug / URL</th>
                                <th class="px-4 py-3 text-center">Parent</th>
                                <th class="px-4 py-3 text-center">Order</th>
                                <th class="px-4 py-3 text-center">Target</th>
                                <th class="px-4 py-3 text-center">Status</th>
                                <th class="px-4 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($menus as $menu)
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td class="px-4 text-muted">{{ $loop->iteration }}</td>
                                    <td class="px-4">
                                        <div class="d-flex align-items-center">
                                            @if ($menu->icon)
                                                <i class="{{ $menu->icon }} me-2 text-muted" style="font-size: 1.1rem;"></i>
                                            @endif
                                            <strong class="text-dark">{{ $menu->title }}</strong>
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        <div class="d-flex flex-column gap-1">
                                            <code style="font-size: 0.75rem; width: fit-content;">{{ $menu->slug }}</code>
                                            <span class="text-muted small">{{ $menu->url }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 text-center">
                                        @if ($menu->parent)
                                            <span class="badge rounded-pill px-3 py-1" style="background-color: #f3f4f6; color: #4b5563; border: 1px solid #e5e7eb;">
                                                {{ $menu->parent->title }}
                                            </span>
                                        @else
                                            <span class="text-muted opacity-50">—</span>
                                        @endif
                                    </td>
                                    <td class="px-4 text-center fw-bold text-muted">{{ $menu->menu_order }}</td>
                                    <td class="px-4 text-center">
                                        @if ($menu->target === '_blank')
                                            <span class="badge rounded-pill px-3 py-1" style="background-color: #e0f2fe; color: #075985;">New Tab</span>
                                        @else
                                            <span class="badge rounded-pill px-3 py-1 text-muted border" style="background-color: transparent;">Same Tab</span>
                                        @endif
                                    </td>
                                    <td class="px-4 text-center">
                                        <form action="{{ route('admin.navbar-menu.toggle', $menu) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="border-0 bg-transparent p-0">
                                                @if ($menu->is_active)
                                                    <span class="badge rounded-pill px-3 py-1" style="background-color: #dcfce7; color: #166534; cursor: pointer;">Active</span>
                                                @else
                                                    <span class="badge rounded-pill px-3 py-1" style="background-color: #fee2e2; color: #991b1b; cursor: pointer;">Inactive</span>
                                                @endif
                                            </button>
                                        </form>
                                    </td>
                                    <td class="px-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.navbar-menu.edit', $menu) }}" class="table-action-btn text-primary text-decoration-none">Edit</a>
                                            <form action="{{ route('admin.navbar-menu.destroy', $menu) }}" method="POST" 
                                                onsubmit="return confirm('Delete \'{{ addslashes($menu->title) }}\'?')" class="m-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="table-action-btn text-danger border-0">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-5">
                                        <div class="mb-3">
                                            <i class="fe fe-menu text-muted opacity-50" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <p class="mb-0">No navbar menu items found. <a href="{{ route('admin.nav_setup') }}" class="text-primary fw-semibold">Create one →</a></p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>