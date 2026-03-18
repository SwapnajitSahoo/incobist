<x-app-layout>
<div class="container-fluid px-4">
    <div class="my-4">
        <h4 class="mb-0">Add New FAQ</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.faqs.index') }}">FAQs</a></li>
                <li class="breadcrumb-item active">Add FAQ</li>
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
            <form action="{{ route('admin.faqs.store') }}" method="POST">
                @csrf
                <div class="row gx-4">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <label class="form-label fw-bold">Question <span class="text-danger">*</span></label>
                            <input type="text" name="question" class="form-control form-control-lg" placeholder="Enter question" value="{{ old('question') }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Answer <span class="text-danger">*</span></label>
                            <textarea name="answer" class="form-control" rows="8" placeholder="Enter answer" required>{{ old('answer') }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-light border-0 mb-4">
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">FAQ Type <span class="text-danger">*</span></label>
                                    <select name="faq_type" class="form-control" required>
                                        <option value="corporate" {{ old('faq_type') == 'corporate' ? 'selected' : '' }}>Corporate</option>
                                        <option value="shares" {{ old('faq_type') == 'shares' ? 'selected' : '' }}>Shares</option>
                                    </select>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="isActive" checked>
                                    <label class="form-check-label fw-bold" for="isActive">Published Status</label>
                                </div>

                                <hr>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Save FAQ</button>
                                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
