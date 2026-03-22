<x-app-layout>

    @section('page_title', 'Edit Menu Item')

    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Edit Menu Item</h2>
            <a href="{{ route('admin.navbar-menu.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i> Back to List
            </a>
        </div>

        {{-- ── Validation Errors ── --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">

                <form action="{{ route('admin.navbar-menu.update', $navbarMenu) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        {{-- TITLE --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $navbarMenu->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- SLUG --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug"
                                class="form-control @error('slug') is-invalid @enderror"
                                value="{{ old('slug', $navbarMenu->slug) }}" readonly>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Auto-generated from title. Clear &amp; retype title to regenerate.</div>
                        </div>
                    </div>

                    {{-- URL --}}
                    <div class="mb-3">
                        <label class="form-label">URL</label>
                        <input type="text" name="url" id="url"
                            class="form-control"
                            value="{{ old('url', $navbarMenu->url) }}" readonly>
                        <div class="form-text">Auto-synced with slug.</div>
                    </div>

                    <div class="row">
                        {{-- PARENT --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Parent Menu</label>
                            <select name="parent_id" class="form-select">
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
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Menu Order</label>
                            <input type="number" name="menu_order"
                                class="form-control"
                                value="{{ old('menu_order', $navbarMenu->menu_order) }}" min="0">
                        </div>
                    </div>

                    <div class="row">
                        {{-- TARGET --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Open Target</label>
                            <select name="target" class="form-select">
                                <option value="_self"
                                    {{ old('target', $navbarMenu->target) == '_self' ? 'selected' : '' }}>
                                    Same tab (_self)
                                </option>
                                <option value="_blank"
                                    {{ old('target', $navbarMenu->target) == '_blank' ? 'selected' : '' }}>
                                    New tab (_blank)
                                </option>
                            </select>
                        </div>

                        {{-- ICON --}}
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Icon Class</label>
                            <input type="text" name="icon"
                                class="form-control @error('icon') is-invalid @enderror"
                                placeholder="e.g. bi bi-house"
                                value="{{ old('icon', $navbarMenu->icon) }}">
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- ACTIVE --}}
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox"
                            name="is_active" id="is_active"
                            value="1"
                            {{ old('is_active', $navbarMenu->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-1"></i> Update Menu Item
                        </button>
                        <a href="{{ route('admin.navbar-menu.index') }}" class="btn btn-outline-secondary">
                            Cancel
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </div>

    {{-- 🔥 AUTO SLUG + URL SCRIPT --}}
    <script>
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
    </script>

</x-app-layout>