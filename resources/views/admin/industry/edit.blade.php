<x-app-layout>
<div class="container-fluid px-4">

<h4 class="my-3">Edit Industry</h4>

<div class="card shadow-sm border-0">
<div class="card-body">

<form method="POST" action="{{ route('admin.industry.update',$industry->id) }}">
@csrf

<input type="text" name="page_title" class="form-control mb-2" value="{{ $industry->page_title }}">
<input type="text" name="slug" class="form-control mb-2" value="{{ $industry->slug }}">

<div class="form-check mb-3">
    <input type="checkbox" name="is_active" value="1" {{ $industry->is_active ? 'checked' : '' }}>
    <label>Active</label>
</div>

<hr>

<h5>Cards</h5>
<div id="card-wrapper">
@foreach($industry->cards as $card)
<div class="card p-3 mb-2">
    <input name="card_title[]" value="{{ $card->card_title }}" class="form-control mb-2">
    <input name="card_subtitle[]" value="{{ $card->card_subtitle }}" class="form-control mb-2">
    <textarea name="card_description[]" class="form-control mb-2">{{ $card->card_description }}</textarea>
    <button type="button" class="btn btn-danger remove">Remove</button>
</div>
@endforeach
</div>

<button type="button" id="add-card" class="btn btn-primary btn-sm mb-3">+ Add Card</button>

<hr>

<h5>Services</h5>
<div id="service-wrapper">
@foreach($industry->services as $service)
<div class="card p-3 mb-2">
    <input name="service_card_title[]" value="{{ $service->service_card_title }}" class="form-control mb-2">
    <textarea name="service_card_desc[]" class="form-control mb-2">{{ $service->service_card_desc }}</textarea>
    <button type="button" class="btn btn-danger remove">Remove</button>
</div>
@endforeach
</div>

<button type="button" id="add-service" class="btn btn-primary btn-sm mb-3">+ Add Service</button>

<hr>

<button class="btn btn-success">Update</button>
<a href="{{ route('admin.industry.index') }}" class="btn btn-secondary">Cancel</a>

</form>
</div>
</div>
</div>

<script>
// same JS as create
</script>

</x-app-layout>