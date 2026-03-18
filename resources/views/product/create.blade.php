<x-app-layout>
    <div class="container-fluid px-4">
        <div class="my-4">
            <h4 class="mb-0">Add New Product</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </nav>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gx-4">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <label class="form-label fw-bold">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter product name" value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Heading</label>
                                <input type="text" name="heading" class="form-control form-control-lg" placeholder="Enter product heading" value="{{ old('heading') }}">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Content</label>
                                <textarea name="content" id="product-content" class="form-control" rows="15">{{ old('content') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-light border-0 mb-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Featured Image</label>
                                        <div class="image-preview-wrapper mb-2">
                                            <div id="image-preview-container" class="border rounded d-flex align-items-center justify-content-center bg-white" style="height: 200px; overflow: hidden;">
                                                 <span class="text-muted" id="preview-text">Preview</span>
                                                 <img id="image-preview" src="#" style="max-width: 100%; display: none;">
                                            </div>
                                        </div>
                                        <input type="file" name="image" id="product-image-input" class="form-control" accept="image/*">
                                        <small class="text-muted">Max: 2MB. Recommended Size: 1200x800px</small>
                                    </div>

                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="is_active" id="isActive" checked>
                                        <label class="form-check-label fw-bold" for="isActive">Published Status</label>
                                    </div>

                                    <hr>

                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary btn-lg">Save Product</button>
                                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('product-image-input').onchange = function (evt) {
            const [file] = this.files;
            if (file) {
                const preview = document.getElementById('image-preview');
                const previewText = document.getElementById('preview-text');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
                previewText.style.display = 'none';
            }
        }
    </script>
</x-app-layout>
