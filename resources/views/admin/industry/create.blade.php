<x-app-layout>
<div class="container-fluid px-4">

<h4 class="my-3">Add Industry</h4>

<div class="card shadow-sm border-0">
<div class="card-body">

<form method="POST" action="{{ route('admin.industry.store') }}">
@csrf

<!-- BASIC -->
<div class="mb-3">
    <label>Page Title</label>
    <input type="text" name="page_title" class="form-control">
</div>

<div class="mb-3">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control">
</div>

<div class="mb-3 form-check">
    <input type="checkbox" name="is_active" value="1" checked class="form-check-input">
    <label>Active</label>
</div>

<hr>

<!-- CARDS -->
<h5>Cards</h5>
<div id="card-wrapper"></div>

<button type="button" id="add-card" class="btn btn-sm btn-primary mb-3">
    + Add Card
</button>

<hr>

<!-- SERVICES -->
<h5>Services</h5>
<div id="service-wrapper"></div>

<button type="button" id="add-service" class="btn btn-sm btn-primary mb-3">
    + Add Service
</button>

<hr>

<button class="btn btn-success">Save</button>
<a href="{{ route('admin.industry.index') }}" class="btn btn-secondary">Cancel</a>

</form>
</div>
</div>
</div>

<script>
// CARD
document.getElementById('add-card').onclick = function () {
    let html = `
    <div class="card p-3 mb-2 border">
        <input name="card_title[]" class="form-control mb-2" placeholder="Title">
        <input name="card_subtitle[]" class="form-control mb-2" placeholder="Subtitle">
        <textarea name="card_description[]" class="form-control mb-2" placeholder="Description"></textarea>
        <button type="button" class="btn btn-danger remove">Remove</button>
    </div>`;
    document.getElementById('card-wrapper').insertAdjacentHTML('beforeend', html);
};

// SERVICE
document.getElementById('add-service').onclick = function () {
    let html = `
    <div class="card p-3 mb-2 border">
        <input name="service_card_title[]" class="form-control mb-2" placeholder="Title">
        <textarea name="service_card_desc[]" class="form-control mb-2" placeholder="Description"></textarea>
        <button type="button" class="btn btn-danger remove">Remove</button>
    </div>`;
    document.getElementById('service-wrapper').insertAdjacentHTML('beforeend', html);
};

// REMOVE
document.addEventListener('click', function(e){
    if(e.target.classList.contains('remove')){
        e.target.closest('.card').remove();
    }
});
</script>

</x-app-layout>