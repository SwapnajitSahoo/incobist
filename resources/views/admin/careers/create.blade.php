<x-app-layout>
    <div class="container-fluid px-4 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Add New Career Listing</h4>
            <a href="{{ route('admin.careers.index') }}" class="btn btn-outline-secondary btn-sm">Back to List</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="{{ route('admin.careers.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Job Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Laravel Developer" value="{{ old('title') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Category</label>
                            <input type="text" name="category" class="form-control" placeholder="e.g. IT / Software" value="{{ old('category') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="e.g. Kolkata" value="{{ old('location') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Job Type / Tag</label>
                            <input type="text" name="type" class="form-control" placeholder="e.g. Development" value="{{ old('type') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Positions Left</label>
                            <input type="number" name="positions" class="form-control" value="{{ old('positions', 1) }}" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Posted At</label>
                            <input type="date" name="posted_at" class="form-control" value="{{ old('posted_at', date('Y-m-d')) }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label fw-bold">Job Description</label>
                            <textarea name="description" class="form-control" rows="5" placeholder="Detailed job description">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary px-5 fw-bold">Save Job Listing</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
