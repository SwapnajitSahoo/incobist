<x-app-layout>
    <div class="container-fluid px-4 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Add New Resource</h4>
            <a href="{{ route('admin.resources.index') }}" class="btn btn-outline-secondary btn-sm">Back to List</a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="{{ route('admin.resources.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Category (e.g. PERSPECTIVE)</label>
                            <input type="text" name="category" class="form-control" placeholder="PERSPECTIVE" value="{{ old('category') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold">Description (Optional, shown on card front)</label>
                            <textarea name="description" class="form-control" rows="2" placeholder="Short description">{{ old('description') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Hover Category (e.g. CASE STUDY)</label>
                            <input type="text" name="hover_category" class="form-control" placeholder="CASE STUDY" value="{{ old('hover_category', 'CASE STUDY') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Order Index</label>
                            <input type="number" name="order_index" class="form-control" value="{{ old('order_index', 0) }}">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold">Hover Full Description (Full text shown on hover)</label>
                            <textarea name="hover_description" class="form-control" rows="5" placeholder="Detailed content" required>{{ old('hover_description') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Resource Image (Background)</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary px-5 fw-bold">Save Resource</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
