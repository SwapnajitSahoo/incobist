<x-app-layout>
<div class="container-fluid px-4">
    <div class="my-4">
        <h4 class="mb-0">Edit Insight Blog</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.insight-blogs.index') }}">Blogs</a></li>
                <li class="breadcrumb-item active">Edit Blog</li>
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
            <form action="{{ route('admin.insight-blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gx-4">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <label class="form-label fw-bold">Blog Title <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-lg" value="{{ old('name', $blog->name) }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Content</label>
                            <textarea name="content" id="blog-content" class="form-control" rows="15">{{ old('content', $blog->content) }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-light border-0 mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Featured Image</label>
                                    <div class="image-preview-wrapper mb-2">
                                        <div id="image-preview-container" class="border rounded d-flex align-items-center justify-content-center bg-white" style="height: 200px; overflow: hidden;">
                                             @if($blog->image)
                                                 <img id="image-preview" src="{{ asset($blog->image) }}" style="max-width: 100%;">
                                                 <span class="text-muted" id="preview-text" style="display: none;">Preview</span>
                                             @else
                                                 <span class="text-muted" id="preview-text">Preview</span>
                                                 <img id="image-preview" src="#" style="max-width: 100%; display: none;">
                                             @endif
                                        </div>
                                    </div>
                                    <input type="file" name="image" id="blog-image-input" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended: 1200x800px. Leave empty to keep old image.</small>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="isActive" {{ $blog->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label fw-bold" for="isActive">Published Status</label>
                                </div>

                                <hr>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Update Blog Post</button>
                                    <a href="{{ route('admin.insight-blogs.index') }}" class="btn btn-outline-secondary">Cancel</a>
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
    document.getElementById('blog-image-input').onchange = function (evt) {
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
