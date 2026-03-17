<x-app-layout>
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center my-3">
        <h4 class="mb-0">Create Page</h4>
        <a href="{{ route('admin.page-contents.index') }}" class="btn btn-secondary btn-sm">← Back</a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.page-contents.store') }}" method="POST">
        @csrf

        {{-- Page Settings --}}
        <div class="card mb-4">
            <div class="card-header fw-semibold">Page Settings</div>
            <div class="card-body row g-3">
                <div class="col-md-4">
                    <label class="form-label">Menu Item <span class="text-danger">*</span></label>
                    <select name="menu_id" class="form-select @error('menu_id') is-invalid @enderror" required>
                        <option value="">— Select Menu —</option>
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>
                                {{ $menu->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('menu_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label class="form-label">Page Title <span class="text-danger">*</span></label>
                    <input type="text" name="page_title"
                           class="form-control @error('page_title') is-invalid @enderror"
                           value="{{ old('page_title') }}" required>
                    @error('page_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-3">
                    <label class="form-label">Layout</label>
                    <select name="layout" class="form-select">
                        <option value="full-width" {{ old('layout') == 'full-width' ? 'selected' : '' }}>Full Width</option>
                        <option value="default"    {{ old('layout') == 'default'    ? 'selected' : '' }}>Default</option>
                        <option value="sidebar"    {{ old('layout') == 'sidebar'    ? 'selected' : '' }}>Sidebar</option>
                    </select>
                </div>

                <div class="col-md-1 d-flex align-items-end">
                    <div class="form-check mb-1">
                        <input type="checkbox" name="is_published" value="1" id="is_published"
                               class="form-check-input" {{ old('is_published') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_published">Publish</label>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEO Settings --}}
        <div class="card mb-4">
            <div class="card-header fw-semibold">SEO Settings</div>
            <div class="card-body row g-3">
                <div class="col-md-6">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Canonical URL</label>
                    <input type="text" name="canonical_url" class="form-control" value="{{ old('canonical_url') }}"
                           placeholder="https://example.com/page">
                </div>
                <div class="col-md-8">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description') }}</textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label">OG Image Path</label>
                    <input type="text" name="og_image" class="form-control" value="{{ old('og_image') }}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create Page & Add Sections →</button>
        <a href="{{ route('admin.page-contents.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
</x-app-layout>