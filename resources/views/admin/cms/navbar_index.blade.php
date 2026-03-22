<x-app-layout>

    @section('page_title', 'Navbar Menus')

    <div class="container py-4">

        {{-- ── Header ── --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Navbar Menus</h2>
            <a href="{{ route('admin.nav_setup') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i> Add Menu Item
            </a>
        </div>

        {{-- ── Flash Messages ── --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ── Table ── --}}
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>URL</th>
                            <th>Parent</th>
                            <th class="text-center">Order</th>
                            <th class="text-center">Target</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($menus as $menu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if ($menu->icon)
                                        <i class="{{ $menu->icon }} me-1 text-muted"></i>
                                    @endif
                                    <strong>{{ $menu->title }}</strong>
                                </td>

                                <td><code>{{ $menu->slug }}</code></td>

                                <td>
                                    <span class="text-muted small">{{ $menu->url }}</span>
                                </td>

                                <td>
                                    @if ($menu->parent)
                                        <span class="badge bg-secondary">{{ $menu->parent->title }}</span>
                                    @else
                                        <span class="text-muted">—</span>
                                    @endif
                                </td>

                                <td class="text-center">{{ $menu->menu_order }}</td>

                                <td class="text-center">
                                    @if ($menu->target === '_blank')
                                        <span class="badge bg-info text-dark">New tab</span>
                                    @else
                                        <span class="badge bg-light text-dark border">Same tab</span>
                                    @endif
                                </td>

                                {{-- ── Toggle Active ── --}}
                                <td class="text-center">
                                    <form action="{{ route('admin.navbar-menu.toggle', $menu) }}"
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn btn-sm {{ $menu->is_active ? 'btn-success' : 'btn-outline-secondary' }}"
                                            title="{{ $menu->is_active ? 'Click to deactivate' : 'Click to activate' }}">
                                            @if ($menu->is_active)
                                                <i class="bi bi-toggle-on me-1"></i> Active
                                            @else
                                                <i class="bi bi-toggle-off me-1"></i> Inactive
                                            @endif
                                        </button>
                                    </form>
                                </td>

                                {{-- ── Edit / Delete ── --}}
                                <td class="text-center">
                                    <a href="{{ route('admin.navbar-menu.edit', $menu) }}"
                                       class="btn btn-sm btn-outline-primary me-1">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>

                                    <form action="{{ route('admin.navbar-menu.destroy', $menu) }}"
                                          method="POST" class="d-inline"
                                          onsubmit="return confirm('Delete \'{{ addslashes($menu->title) }}\'?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-5 text-muted">
                                    No menu items found.
                                    <a href="{{ route('admin.nav_setup') }}">Create one →</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-app-layout>