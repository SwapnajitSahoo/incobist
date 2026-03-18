<x-app-layout>
<div class="container-fluid px-4">

    <div class="d-flex justify-content-between align-items-center my-3">
        <h4 class="mb-0">
            Edit: <span class="text-primary">{{ $pageContent->page_title }}</span>
            <span class="badge bg-secondary ms-2">{{ $pageContent->menu->title ?? '' }}</span>
        </h4>
        <a href="{{ route('admin.page-contents.index') }}" class="btn btn-secondary btn-sm">← Back</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
        </div>
    @endif

    {{-- ============================
         PAGE SETTINGS FORM
    ============================= --}}
    <form action="{{ route('admin.page-contents.update', $pageContent->id) }}" method="POST">
        @csrf
        <div class="card mb-4">
            <div class="card-header fw-semibold d-flex justify-content-between">
                <span>Page Settings</span>
                <button type="submit" class="btn btn-sm btn-primary">Save Settings</button>
            </div>
            <div class="card-body row g-3">
                <div class="col-md-5">
                    <label class="form-label">Page Title <span class="text-danger">*</span></label>
                    <input type="text" name="page_title" class="form-control"
                           value="{{ old('page_title', $pageContent->page_title) }}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Layout</label>
                    <select name="layout" class="form-select">
                        @foreach(['full-width','default','sidebar'] as $l)
                            <option value="{{ $l }}" {{ $pageContent->layout === $l ? 'selected' : '' }}>
                                {{ ucfirst($l) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <div class="form-check mb-1">
                        <input type="checkbox" name="is_published" value="1" id="is_published"
                               class="form-check-input" {{ $pageContent->is_published ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_published">Published</label>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEO --}}
        <div class="card mb-4">
            <div class="card-header fw-semibold">SEO Settings</div>
            <div class="card-body row g-3">
                <div class="col-md-6">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control"
                           value="{{ old('meta_title', $pageContent->seoMeta?->meta_title) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Canonical URL</label>
                    <input type="text" name="canonical_url" class="form-control"
                           value="{{ old('canonical_url', $pageContent->seoMeta?->canonical_url) }}">
                </div>
                <div class="col-md-8">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $pageContent->seoMeta?->meta_description) }}</textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label">OG Image Path</label>
                    <input type="text" name="og_image" class="form-control"
                           value="{{ old('og_image', $pageContent->seoMeta?->og_image) }}">
                </div>
            </div>
        </div>
    </form>

    {{-- ============================
         EXISTING SECTIONS LIST
    ============================= --}}
    <div class="card mb-4">
        <div class="card-header fw-semibold">
            Page Sections
            <small class="text-muted ms-2">(drag rows to reorder)</small>
        </div>
        <div class="card-body p-0">
            <ul id="sections-list" class="list-group list-group-flush">
                @forelse($pageContent->sections as $section)
                <li class="list-group-item" data-id="{{ $section->id }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fa fa-grip-vertical me-2 text-muted" style="cursor:grab"></i>
                            <strong>{{ ucfirst(str_replace('_', ' ', $section->type)) }}</strong>
                            <span class="badge ms-2 {{ $section->is_active ? 'bg-success' : 'bg-secondary' }}">
                                {{ $section->is_active ? 'Active' : 'Inactive' }}
                            </span>
                            <small class="text-muted ms-2">Order: {{ $section->sort_order }}</small>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-primary"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#section-edit-{{ $section->id }}">
                                Edit
                            </button>
                            <form action="{{ route('admin.page-sections.delete', $section->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this section?')">
                                @csrf
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>

                    {{-- Inline Edit Form --}}
                    <div class="collapse mt-3" id="section-edit-{{ $section->id }}">
                        <div class="border rounded p-3 bg-light">
                            <form action="{{ route('admin.page-sections.update', $section->id) }}" method="POST">
                                @csrf
                                @include('admin.page_sections.fields.' . $section->type, [
                                    'data'   => $section->content,
                                    'prefix' => ''
                                ])
                                <div class="form-check mt-2 mb-3">
                                    <input type="checkbox" name="is_active" value="1"
                                           class="form-check-input"
                                           id="active_{{ $section->id }}"
                                           {{ $section->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active_{{ $section->id }}">Active</label>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">Update Section</button>
                            </form>
                        </div>
                    </div>
                </li>
                @empty
                <li class="list-group-item text-center text-muted py-4">
                    No sections yet. Add one below.
                </li>
                @endforelse
            </ul>
        </div>
    </div>

    {{-- ============================
         ADD NEW SECTION FORM
    ============================= --}}
    <div class="card mb-5">
        <div class="card-header fw-semibold">Add New Section</div>
        <div class="card-body">
            <form action="{{ route('admin.page-sections.store', $pageContent->id) }}"
                  method="POST" id="add-section-form">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Section Type <span class="text-danger">*</span></label>
                    <select name="type" id="section-type-select" class="form-select"
                            onchange="loadSectionFields(this.value)" required>
                        <option value="">— Select Section Type —</option>
                        <option value="hero">Hero Banner</option>
                        <option value="text_block">Text Block</option>
                        <option value="challenge_solution">Challenge & Solution</option>
                        <option value="card_grid">Card Grid</option>
                        <option value="testimonial">Testimonial</option>
                        <option value="cta_banner">CTA Banner</option>
                        <option value="faq">FAQ</option>
                        <option value="custom_html">Custom HTML</option>
                    </select>
                </div>

                <div id="section-fields-wrapper"></div>

                <div id="section-submit-wrap" style="display:none">
                    <div class="form-check mb-3">
                        <input type="checkbox" name="is_active" value="1"
                               class="form-check-input" id="new_is_active" checked>
                        <label class="form-check-label" for="new_is_active">Active</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Section</button>
                </div>
            </form>
        </div>
    </div>

</div>

{{-- SortableJS --}}
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
Sortable.create(document.getElementById('sections-list'), {
    handle: '.fa-grip-vertical',
    animation: 150,
    onEnd: function () {
        const order = [...document.querySelectorAll('#sections-list [data-id]')]
                        .map(el => el.dataset.id);
        fetch('{{ route('admin.page-sections.reorder')}}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ order })
        });
    }
});

function loadSectionFields(type) {
    const wrapper = document.getElementById('section-fields-wrapper');
    const submitWrap = document.getElementById('section-submit-wrap');
    wrapper.innerHTML = '';
    submitWrap.style.display = 'none';
    if (!type) return;
    wrapper.innerHTML = sectionTemplates[type] || '';
    submitWrap.style.display = 'block';
}

// ── Section field templates ──────────────────────────────────────────────────
const sectionTemplates = {

hero: `
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Heading <span class="text-danger">*</span></label>
    <input type="text" name="content[heading]" class="form-control" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Subheading</label>
    <input type="text" name="content[subheading]" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Background Image Path</label>
    <input type="text" name="content[bg_image]" class="form-control" placeholder="images/hero.jpg">
  </div>
  <div class="col-md-3">
    <label class="form-label">Overlay Color</label>
    <input type="text" name="content[overlay_color]" class="form-control" placeholder="rgba(0,0,0,0.55)">
  </div>
  <div class="col-md-3">
    <label class="form-label">Badge Text</label>
    <input type="text" name="content[badge_text]" class="form-control">
  </div>
</div>`,

text_block: `
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Heading <span class="text-danger">*</span></label>
    <input type="text" name="content[heading]" class="form-control" required>
  </div>
  <div class="col-md-3">
    <label class="form-label">Alignment</label>
    <select name="content[alignment]" class="form-select">
      <option value="left">Left</option>
      <option value="center">Center</option>
      <option value="right">Right</option>
    </select>
  </div>
  <div class="col-12">
    <label class="form-label">Subheading</label>
    <input type="text" name="content[subheading]" class="form-control">
  </div>
  <div class="col-12">
    <label class="form-label">Body (HTML allowed)</label>
    <textarea name="content[body]" class="form-control" rows="5"></textarea>
  </div>
</div>`,

challenge_solution: `
<div class="row g-3">
  <div class="col-12">
    <label class="form-label">Section Heading <span class="text-danger">*</span></label>
    <input type="text" name="content[section_heading]" class="form-control" required>
  </div>
  <div class="col-12">
    <label class="form-label fw-semibold">Challenges</label>
    <div id="challenges-wrapper">
      <div class="row mb-2 challenge-row">
        <div class="col-2">
          <input type="text" name="content[challenges][0][num]" class="form-control" placeholder="01">
        </div>
        <div class="col-9">
          <input type="text" name="content[challenges][0][text]" class="form-control" placeholder="Challenge text">
        </div>
        <div class="col-1">
          <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeRow(this)">✕</button>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary mt-1"
            onclick="addChallenge()">+ Add Challenge</button>
  </div>
  <div class="col-md-6">
    <label class="form-label fw-semibold">Solution Title</label>
    <input type="text" name="content[solution][title]" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Solution Image Path</label>
    <input type="text" name="content[solution][image]" class="form-control">
  </div>
  <div class="col-12">
    <label class="form-label">Solution Description</label>
    <textarea name="content[solution][description]" class="form-control" rows="3"></textarea>
  </div>
</div>`,

card_grid: `
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Heading <span class="text-danger">*</span></label>
    <input type="text" name="content[heading]" class="form-control" required>
  </div>
  <div class="col-md-3">
    <label class="form-label">Style</label>
    <select name="content[style]" class="form-select">
      <option value="focus">In Focus</option>
      <option value="services">Services</option>
    </select>
  </div>
  <div class="col-12">
    <label class="form-label">Subheading</label>
    <input type="text" name="content[subheading]" class="form-control">
  </div>
  <div class="col-12">
    <label class="form-label fw-semibold">Cards</label>
    <div id="cards-wrapper">
      <div class="border rounded p-3 mb-2 card-row">
        <div class="row g-2">
          <div class="col-md-6">
            <input type="text" name="content[cards][0][title]" class="form-control" placeholder="Card Title">
          </div>
          <div class="col-md-6">
            <input type="text" name="content[cards][0][image]" class="form-control" placeholder="Image path">
          </div>
          <div class="col-md-8">
            <input type="text" name="content[cards][0][description]" class="form-control" placeholder="Description">
          </div>
          <div class="col-md-3">
            <input type="text" name="content[cards][0][link]" class="form-control" placeholder="Link URL">
          </div>
          <div class="col-md-1">
            <button type="button" class="btn btn-sm btn-outline-danger w-100" onclick="removeRow(this)">✕</button>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary mt-1"
            onclick="addCard()">+ Add Card</button>
  </div>
</div>`,

testimonial: `
<div class="row g-3">
  <div class="col-12">
    <label class="form-label">Quote <span class="text-danger">*</span></label>
    <textarea name="content[quote]" class="form-control" rows="4" required></textarea>
  </div>
  <div class="col-md-4">
    <label class="form-label">Author</label>
    <input type="text" name="content[author]" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Company</label>
    <input type="text" name="content[company]" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Background Color</label>
    <input type="text" name="content[bg_color]" class="form-control" placeholder="#0a0a1a">
  </div>
</div>`,

cta_banner: `
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Title <span class="text-danger">*</span></label>
    <input type="text" name="content[title]" class="form-control" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Subtitle</label>
    <input type="text" name="content[subtitle]" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Button Text</label>
    <input type="text" name="content[button_text]" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Button URL</label>
    <input type="text" name="content[button_url]" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Background Color</label>
    <input type="text" name="content[bg_color]" class="form-control" placeholder="#1a1a2e">
  </div>
</div>`,

faq: `
<div class="row g-3">
  <div class="col-12">
    <label class="form-label">Section Heading</label>
    <input type="text" name="content[heading]" class="form-control">
  </div>
  <div class="col-12">
    <label class="form-label fw-semibold">FAQ Items</label>
    <div id="faq-wrapper">
      <div class="border rounded p-3 mb-2 faq-row">
        <div class="mb-2 d-flex justify-content-between">
          <label class="form-label mb-0">Item 1</label>
          <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeRow(this)">✕</button>
        </div>
        <input type="text" name="content[items][0][q]" class="form-control mb-2" placeholder="Question">
        <textarea name="content[items][0][a]" class="form-control" rows="2" placeholder="Answer"></textarea>
      </div>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary mt-1"
            onclick="addFaq()">+ Add FAQ Item</button>
  </div>
</div>`,

custom_html: `
<div class="row g-3">
  <div class="col-12">
    <label class="form-label">HTML Content</label>
    <textarea name="content[html]" class="form-control" rows="10"
              style="font-family:monospace;font-size:13px"></textarea>
  </div>
</div>`,

};

// ── Dynamic row adders ───────────────────────────────────────────────────────
let challengeIdx = 1;
function addChallenge() {
    const i = challengeIdx++;
    const html = `
    <div class="row mb-2 challenge-row">
      <div class="col-2">
        <input type="text" name="content[challenges][${i}][num]" class="form-control" placeholder="0${i+1}">
      </div>
      <div class="col-9">
        <input type="text" name="content[challenges][${i}][text]" class="form-control" placeholder="Challenge text">
      </div>
      <div class="col-1">
        <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeRow(this)">✕</button>
      </div>
    </div>`;
    document.getElementById('challenges-wrapper').insertAdjacentHTML('beforeend', html);
}

let cardIdx = 1;
function addCard() {
    const i = cardIdx++;
    const html = `
    <div class="border rounded p-3 mb-2 card-row">
      <div class="row g-2">
        <div class="col-md-6">
          <input type="text" name="content[cards][${i}][title]" class="form-control" placeholder="Card Title">
        </div>
        <div class="col-md-6">
          <input type="text" name="content[cards][${i}][image]" class="form-control" placeholder="Image path">
        </div>
        <div class="col-md-8">
          <input type="text" name="content[cards][${i}][description]" class="form-control" placeholder="Description">
        </div>
        <div class="col-md-3">
          <input type="text" name="content[cards][${i}][link]" class="form-control" placeholder="Link URL">
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-sm btn-outline-danger w-100" onclick="removeRow(this)">✕</button>
        </div>
      </div>
    </div>`;
    document.getElementById('cards-wrapper').insertAdjacentHTML('beforeend', html);
}

let faqIdx = 1;
function addFaq() {
    const i = faqIdx++;
    const html = `
    <div class="border rounded p-3 mb-2 faq-row">
      <div class="mb-2 d-flex justify-content-between">
        <label class="form-label mb-0">Item ${i+1}</label>
        <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeRow(this)">✕</button>
      </div>
      <input type="text" name="content[items][${i}][q]" class="form-control mb-2" placeholder="Question">
      <textarea name="content[items][${i}][a]" class="form-control" rows="2" placeholder="Answer"></textarea>
    </div>`;
    document.getElementById('faq-wrapper').insertAdjacentHTML('beforeend', html);
}

function removeRow(btn) {
    btn.closest('.row, .border').remove();
}
</script>
</x-app-layout>