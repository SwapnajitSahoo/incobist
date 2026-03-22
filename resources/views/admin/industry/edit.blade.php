<x-app-layout>
<div class="container-fluid">
 
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Industry</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.industry.index') }}">Industries</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="ms-auto pageheader-btn d-flex gap-2">
            <a href="{{ route('admin.industry.cards.index', $industry->id) }}" class="btn btn-primary text-white">
                <i class="fe fe-grid me-1"></i> Manage Cards
            </a>
            <a href="{{ route('admin.industry.challenges.index', $industry->id) }}" class="btn btn-info text-white">
                <i class="fe fe-layers me-1"></i> Manage Challenges
            </a>
        </div>
    </div>
 
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <strong><i class="fe fe-alert-circle me-1"></i>Please fix the following errors:</strong>
            <ul class="mb-0 mt-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
 
    {{-- Quick Stats --}}
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card border-0 bg-light">
                <div class="card-body py-2 d-flex align-items-center gap-3">
                    <i class="fe fe-grid text-primary" style="font-size:1.5rem;"></i>
                    <div>
                        <div class="fw-bold">{{ $industry->cards()->count() }}</div>
                        <small class="text-muted">Cards</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 bg-light">
                <div class="card-body py-2 d-flex align-items-center gap-3">
                    <i class="fe fe-layers text-info" style="font-size:1.5rem;"></i>
                    <div>
                        <div class="fw-bold">{{ $industry->challenges()->count() }}</div>
                        <small class="text-muted">Challenges</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 bg-light">
                <div class="card-body py-2 d-flex align-items-center gap-3">
                    <i class="fe fe-calendar text-warning" style="font-size:1.5rem;"></i>
                    <div>
                        <div class="fw-bold">{{ $industry->created_at->format('d M Y') }}</div>
                        <small class="text-muted">Created</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <form action="{{ route('admin.industry.update', $industry->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
 
        {{-- ── Basic Info ──────────────────────────────────────────── --}}
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title"><i class="fe fe-info me-2 text-primary"></i>Basic Information</h3>
            </div>
            <div class="card-body">
                <div class="row">
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Nav Menu <span class="text-danger">*</span></label>
                        <select name="nav_menu_id" class="form-control @error('nav_menu_id') is-invalid @enderror" required>
                            <option value="">— Select Nav Menu —</option>
                            @foreach($navbarMenus as $menu)
                                <option value="{{ $menu->id }}"
                                    {{ old('nav_menu_id', $industry->nav_menu_id) == $menu->id ? 'selected' : '' }}>
                                    {{ $menu->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('nav_menu_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <!-- <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Type <span class="text-danger">*</span></label>
                        <select name="type" class="form-control @error('type') is-invalid @enderror" required>
                            <option value="">— Select Type —</option>
                            @foreach($types as $type)
                                <option value="{{ $type }}"
                                    {{ old('type', $industry->type) == $type ? 'selected' : '' }}>
                                    {{ ucfirst($type) }}
                                </option>
                            @endforeach
                        </select>
                        @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div> -->
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Page Title</label>
                        <input type="text" name="page_title"
                               class="form-control @error('page_title') is-invalid @enderror"
                               value="{{ old('page_title', $industry->page_title) }}" placeholder="Enter page title">
                        @error('page_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Page Image</label>
                        @if($industry->page_img)
                            <div class="mb-2">
                                <img id="previewPageImg"
                                     src="{{ asset('storage/'.$industry->page_img) }}"
                                     width="120" height="75"
                                     style="object-fit:cover;border-radius:6px;border:1px solid #dee2e6;">
                                <small class="d-block text-muted mt-1">Upload new image to replace.</small>
                            </div>
                        @else
                            <div class="mb-2">
                                <img id="previewPageImg" src="#" alt="Preview"
                                     style="display:none;width:120px;height:75px;object-fit:cover;border-radius:6px;border:1px solid #dee2e6;">
                            </div>
                        @endif
                        <input type="file" name="page_img"
                               class="form-control @error('page_img') is-invalid @enderror"
                               accept="image/*"
                               onchange="previewImage(this,'previewPageImg')">
                        @error('page_img')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Heading</label>
                        <input type="text" name="heading"
                               class="form-control @error('heading') is-invalid @enderror"
                               value="{{ old('heading', $industry->heading) }}" placeholder="Enter heading">
                        @error('heading')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Heading Subtitle</label>
                        <input type="text" name="heading_subtitle"
                               class="form-control @error('heading_subtitle') is-invalid @enderror"
                               value="{{ old('heading_subtitle', $industry->heading_subtitle) }}" placeholder="Enter heading subtitle">
                        @error('heading_subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Landing Title</label>
                        <input type="text" name="lending_title"
                               class="form-control @error('lending_title') is-invalid @enderror"
                               value="{{ old('lending_title', $industry->lending_title) }}" placeholder="Enter landing title">
                        @error('lending_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Tel No</label>
                        <input type="text" name="tel_no"
                               class="form-control @error('tel_no') is-invalid @enderror"
                               value="{{ old('tel_no', $industry->tel_no) }}" placeholder="Enter telephone number">
                        @error('tel_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-12 mb-3">
                        <label class="form-label fw-semibold">Landing Description</label>
                        <textarea name="lending_desc" rows="4"
                                  class="form-control @error('lending_desc') is-invalid @enderror"
                                  placeholder="Enter landing description">{{ old('lending_desc', $industry->lending_desc) }}</textarea>
                        @error('lending_desc')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3 d-flex align-items-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="is_active"
                                   id="is_active" {{ old('is_active', $industry->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label fw-semibold" for="is_active">Active</label>
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
 
        {{-- ── Social Links ─────────────────────────────────────────── --}}
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title"><i class="fe fe-share-2 me-2 text-primary"></i>Social & Contact Links</h3>
            </div>
            <div class="card-body">
                <div class="row">
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fab fa-linkedin text-primary me-1"></i> LinkedIn
                        </label>
                        <input type="url" name="linkedin_link"
                               class="form-control @error('linkedin_link') is-invalid @enderror"
                               value="{{ old('linkedin_link', $industry->linkedin_link) }}" placeholder="https://linkedin.com/...">
                        @error('linkedin_link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fab fa-twitter text-info me-1"></i> Twitter
                        </label>
                        <input type="url" name="twitter_link"
                               class="form-control @error('twitter_link') is-invalid @enderror"
                               value="{{ old('twitter_link', $industry->twitter_link) }}" placeholder="https://twitter.com/...">
                        @error('twitter_link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fab fa-instagram text-danger me-1"></i> Instagram
                        </label>
                        <input type="url" name="instagram_link"
                               class="form-control @error('instagram_link') is-invalid @enderror"
                               value="{{ old('instagram_link', $industry->instagram_link) }}" placeholder="https://instagram.com/...">
                        @error('instagram_link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fab fa-facebook text-primary me-1"></i> Facebook
                        </label>
                        <input type="url" name="fb_link"
                               class="form-control @error('fb_link') is-invalid @enderror"
                               value="{{ old('fb_link', $industry->fb_link) }}" placeholder="https://facebook.com/...">
                        @error('fb_link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            <i class="fab fa-whatsapp text-success me-1"></i> WhatsApp
                        </label>
                        <input type="url" name="wp_link"
                               class="form-control @error('wp_link') is-invalid @enderror"
                               value="{{ old('wp_link', $industry->wp_link) }}" placeholder="https://wa.me/...">
                        @error('wp_link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
 
                </div>
            </div>
        </div>
 
        {{-- ── Form Actions ─────────────────────────────────────────── --}}
        <div class="d-flex justify-content-end gap-2 mb-4">
            <a href="{{ route('admin.industry.index') }}" class="btn btn-secondary">
                <i class="fe fe-x me-1"></i> Cancel
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fe fe-save me-1"></i> Update Industry
            </button>
        </div>
 
    </form>
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