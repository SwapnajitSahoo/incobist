<x-app-layout>
    @section('page_title', 'Edit Menu Item')

    <div class="container-fluid px-4">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center my-4">
            <div>
                <h4 class="mb-0 fw-bold text-dark">Edit Menu Item</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="font-size: 0.85rem;">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.navbar-menu.index') }}" class="text-decoration-none">Navbar</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
            <a href="{{ route('admin.navbar-menu.index') }}" class="btn btn-outline-secondary shadow-sm px-4" style="border-radius: 8px; font-weight: 500;">
                <i class="fe fe-arrow-left me-1"></i> Back to List
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger shadow-sm border-0 mb-4" style="border-radius: 10px;">
                <ul class="mb-0">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm mb-5" style="border-radius: 12px;">
                    <div class="card-body p-4">
                        <form action="{{ route('admin.navbar-menu.update', $navbarMenu) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-4">
                                {{-- TITLE --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-muted small text-uppercase mb-2">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $navbarMenu->title) }}" required style="border-radius: 8px; padding: 10px 15px;">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- SLUG --}}
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-muted small text-uppercase mb-2">Slug</label>
                                    <input type="text" name="slug" id="slug"
                                        class="form-control @error('slug') is-invalid @enderror bg-light"
                                        value="{{ old('slug', $navbarMenu->slug) }}" readonly style="border-radius: 8px; padding: 10px 15px;">
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- URL --}}
                                <div class="col-12">
                                    <label class="form-label fw-semibold text-muted small text-uppercase mb-2">URL Route</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-top-left-radius: 8px; border-bottom-left-radius: 8px;">incobist.com/</span>
                                        <input type="text" name="url" id="url"
                                            class="form-control bg-light border-start-0"
                                            value="{{ old('url', $navbarMenu->url) }}" readonly style="border-top-right-radius: 8px; border-bottom-right-radius: 8px; padding: 10px 15px;">
                                    </div>
                                    <div class="form-text small opacity-75 mt-2 ms-1">Auto-synced with title.</div>
                                </div>

                                {{-- PARENT --}}
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold text-muted small text-uppercase mb-2">Parent Menu</label>
                                    <select name="parent_id" class="form-select" style="border-radius: 8px; padding: 10px 15px;">
                                        <option value="">— None (top level) —</option>
                                        @foreach ($parents as $parent)
                                            <option value="{{ $parent->id }}"
                                                {{ old('parent_id', $navbarMenu->parent_id) == $parent->id ? 'selected' : '' }}>
                                                {{ $parent->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- ORDER --}}
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold text-muted small text-uppercase mb-2">Display Order</label>
                                    <input type="number" name="menu_order"
                                        class="form-control"
                                        value="{{ old('menu_order', $navbarMenu->menu_order) }}" min="0" style="border-radius: 8px; padding: 10px 15px;">
                                </div>

                                {{-- TARGET --}}
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold text-muted small text-uppercase mb-2">Open Behavior</label>
                                    <select name="target" class="form-select" style="border-radius: 8px; padding: 10px 15px;">
                                        <option value="_self"
                                            {{ old('target', $navbarMenu->target) == '_self' ? 'selected' : '' }}>
                                            Same window (_self)
                                        </option>
                                        <option value="_blank"
                                            {{ old('target', $navbarMenu->target) == '_blank' ? 'selected' : '' }}>
                                            New tab (_blank)
                                        </option>
                                    </select>
                                </div>

                                {{-- ICON --}}
                                <!-- <div class="col-md-6">
                                    <label class="form-label fw-semibold text-muted small text-uppercase mb-2">Icon Class</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0" style="border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                                            <i class="{{ $navbarMenu->icon ?? 'fe fe-link' }} opacity-50"></i>
                                        </span>
                                        <input type="text" name="icon"
                                            class="form-control border-start-0"
                                            placeholder="e.g. fe fe-house"
                                            value="{{ old('icon', $navbarMenu->icon) }}" style="border-top-right-radius: 8px; border-bottom-right-radius: 8px; padding: 10px 15px;">
                                    </div>
                                    @error('icon')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div> -->

                                {{-- ACTIVE --}}
                                <div class="col-md-6 d-flex align-items-center mt-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                            name="is_active" id="is_active"
                                            value="1"
                                            {{ old('is_active', $navbarMenu->is_active) ? 'checked' : '' }}>
                                        <label class="form-check-label fw-semibold text-muted ms-2" for="is_active">Visibility Status</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 d-flex gap-2">
                                <button type="submit" class="btn btn-primary shadow-sm px-5 py-2" style="border-radius: 8px; font-weight: 500;">
                                    <i class="fe fe-save me-1"></i> Update Menu Item
                                </button>
                                <a href="{{ route('admin.navbar-menu.index') }}" class="btn btn-light shadow-sm px-4 py-2 text-muted" style="border-radius: 8px; font-weight: 500; border: 1px solid #e5e7eb;">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 🔥 AUTO SLUG + URL SCRIPT --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.getElementById('title');
            const slugInput  = document.getElementById('slug');
            const urlInput   = document.getElementById('url');

            titleInput.addEventListener('input', function () {
                let slug = this.value
                    .toLowerCase()
                    .trim()
                    .replace(/ /g, '-')
                    .replace(/[^\w-]+/g, '');

                slugInput.value = slug;
                urlInput.value  = slug;
            });
        });
    </script>
</x-app-layout>