<x-app-layout>

    @section('page_title','NavBar')

    <div class="container">
        <h2>Create Menu Item</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.navbar-menu-store') }}" method="POST">
            @csrf

            <div class="row">
                {{-- TITLE --}}
                <div class="col-md-6 mb-3">
                    <label>Title *</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- SLUG --}}
                <div class="col-md-6 mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" id="slug"
                        class="form-control @error('slug') is-invalid @enderror"
                        value="{{ old('slug') }}" readonly>
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- URL --}}
            <div class="mb-3">
                <label>URL</label>
                <input type="text" name="url" id="url"
                    class="form-control"
                    value="{{ old('url') }}" readonly>
            </div>

            <div class="row">
                {{-- PARENT --}}
                <div class="col-md-6 mb-3">
                    <label>Parent Menu</label>
                    <select name="parent_id" class="form-select">
                        <option value="">— None (top level) —</option>
                        @foreach ($parents as $parent)
                            <option value="{{ $parent->id }}"
                                {{ old('parent_id') == $parent->id ? 'selected' : '' }}>
                                {{ $parent->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- ORDER --}}
                <div class="col-md-6 mb-3">
                    <label>Menu Order</label>
                    <input type="number" name="menu_order"
                        class="form-control"
                        value="{{ old('menu_order', 0) }}" min="0">
                </div>
            </div>

            <div class="row">
                {{-- TARGET --}}
                <div class="col-md-6 mb-3">
                    <label>Open Target</label>
                    <select name="target" class="form-select">
                        <option value="_self" {{ old('target') == '_self' ? 'selected' : '' }}>
                            Same tab (_self)
                        </option>
                        <option value="_blank" {{ old('target') == '_blank' ? 'selected' : '' }}>
                            New tab (_blank)
                        </option>
                    </select>
                </div>
            </div>

            {{-- ACTIVE --}}
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox"
                    name="is_active" id="is_active"
                    value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">
                    Active
                </label>
            </div>

            <button type="submit" class="btn btn-primary">
                Save Menu Item
            </button>
        </form>
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