<x-app-layout>
  <div class="container-fluid">
 
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Challenge</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.industry.index') }}">Industries</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.industry.challenges.index', $industry->id) }}">Challenges</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
    </div>
 
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <strong><i class="fe fe-alert-circle me-1"></i>Please fix the following errors:</strong>
            <ul class="mb-0 mt-1">
                @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
 
    {{-- Parent Industry Info --}}
    <div class="alert alert-light border mb-3">
        <strong>Industry:</strong> {{ $industry->page_title ?? '—' }} &nbsp;|&nbsp;
        <strong>Nav Menu:</strong> {{ $industry->navbarMenu->title ?? '—' }} &nbsp;|&nbsp;
        <strong>Type:</strong>
        <span class="badge
            @if($industry->type === 'serve') bg-primary
            @elseif($industry->type === 'focus') bg-warning text-dark
            @else bg-info text-dark @endif">
            {{ ucfirst($industry->type) }}
        </span>
    </div>
 
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fe fe-layers me-2 text-primary"></i>Edit Challenge: {{ $challenge->title ?? '' }}</h3>
        </div>
 
        <form action="{{ route('admin.industry.challenges.update', [$industry->id, $challenge->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Solution Name</label>
                        <input type="text" name="solution_name"
                               class="form-control @error('solution_name') is-invalid @enderror"
                               value="{{ old('solution_name', $challenge->solution_name) }}"
                               placeholder="Enter solution name">
                        @error('solution_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Title</label>
                        <input type="text" name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title', $challenge->title) }}" placeholder="Enter title">
                        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Subtitle</label>
                        <input type="text" name="subtitle"
                               class="form-control @error('subtitle') is-invalid @enderror"
                               value="{{ old('subtitle', $challenge->subtitle) }}" placeholder="Enter subtitle">
                        @error('subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Image</label>
                        @if($challenge->img)
                            <div class="mb-2">
                                <img id="previewChallengeImg"
                                     src="{{ asset('storage/'.$challenge->img) }}"
                                     width="120" height="75"
                                     style="object-fit:cover;border-radius:6px;border:1px solid #dee2e6;">
                                <small class="d-block text-muted mt-1">Upload new image to replace.</small>
                            </div>
                        @else
                            <div class="mb-1">
                                <img id="previewChallengeImg" src="#" alt="Preview"
                                     style="display:none;width:120px;height:75px;object-fit:cover;border-radius:6px;border:1px solid #dee2e6;">
                            </div>
                        @endif
                        <input type="file" name="img"
                               class="form-control @error('img') is-invalid @enderror"
                               accept="image/*"
                               onchange="previewImage(this,'previewChallengeImg')">
                        @error('img')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3 d-flex align-items-center">
                        <div class="form-check form-switch mt-2">
                            <input class="form-check-input" type="checkbox" name="is_active"
                                   id="is_active" {{ old('is_active', $challenge->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label fw-semibold" for="is_active">Active</label>
                        </div>
                    </div>
 
                    <div class="col-12 mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="desc" rows="4"
                                  class="form-control @error('desc') is-invalid @enderror"
                                  placeholder="Enter description">{{ old('desc', $challenge->desc) }}</textarea>
                        @error('desc')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                </div>
            </div>
 
            <div class="card-footer d-flex justify-content-end gap-2">
                <a href="{{ route('admin.industry.challenges.index', $industry->id) }}" class="btn btn-secondary">
                    <i class="fe fe-x me-1"></i> Cancel
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fe fe-save me-1"></i> Update Challenge
                </button>
            </div>
        </form>
    </div>
 
</div>
 
@push('scripts')
<script>
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
</x-app-layout>