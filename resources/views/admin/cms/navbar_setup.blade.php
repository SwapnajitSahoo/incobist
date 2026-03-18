<x-app-layout>

    @section('page_title','NavBar')
    <!--Row-->
    <div class="container">
        <h2>Create Menu Item</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
        </div>
        @endif

        <form action="{{ route('admin.navbar-menu-store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
                        value="{{ old('slug') }}">
                    @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mb-3">
                <label>URL</label>
                <input type="text" name="url" class="form-control" value="{{ old('url') }}">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Parent Menu</label>
                    <select name="parent_id" class="form-select">
                        <option value="">— None (top level) —</option>
                        @foreach ($parents as $parent)
                        <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                            {{ $parent->title }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Menu Order</label>
                    <input type="number" name="menu_order" class="form-control" value="{{ old('menu_order', 0) }}" min="0">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Open Target</label>
                    <select name="target" class="form-select">
                        <option value="_self" {{ old('target') == '_self' ? 'selected' : '' }}>Same tab (_self)</option>
                        <option value="_blank" {{ old('target') == '_blank' ? 'selected' : '' }}>New tab (_blank)</option>
                    </select>
                </div>


            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                    value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>

            <button type="submit" class="btn btn-primary">Save Menu Item</button>
        </form>
    </div>
    <!--End row-->
</x-app-layout>