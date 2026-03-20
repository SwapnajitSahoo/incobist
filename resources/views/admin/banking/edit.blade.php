<x-app-layout>
<div class="container-fluid px-4">

<h4 class="my-3">Edit banking Industry</h4>

<div class="card shadow-sm border-0">
<div class="card-body">

<form method="POST" action="{{ route('admin.banking.update',$industry->id) }}">
@csrf

<input type="text" name="page_title" value="{{ $industry->page_title }}" class="form-control mb-2">
<input type="text" name="slug" value="{{ $industry->slug }}" class="form-control mb-2">

<div class="form-check mb-3">
<input type="checkbox" name="is_active" value="1" {{ $industry->is_active ? 'checked' : '' }}>
<label>Active</label>
</div>

<hr>

<h5>Cards</h5>
<div id="cards">
@foreach($industry->cards as $card)
<div class="border p-3 mb-2">
<input name="card_title[]" value="{{ $card->card_title }}" class="form-control mb-2">
<textarea name="card_description[]" class="form-control mb-2">{{ $card->card_description }}</textarea>
<button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">Remove</button>
</div>
@endforeach
</div>

<button type="button" onclick="addCard()" class="btn btn-primary btn-sm mb-3">+ Add Card</button>

<hr>

<h5>Services</h5>
<div id="services">
@foreach($industry->services as $service)
<div class="border p-3 mb-2">
<input name="service_card_title[]" value="{{ $service->service_card_title }}" class="form-control mb-2">
<textarea name="service_card_desc[]" class="form-control mb-2">{{ $service->service_card_desc }}</textarea>
<button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">Remove</button>
</div>
@endforeach
</div>

<button type="button" onclick="addService()" class="btn btn-primary btn-sm mb-3">+ Add Service</button>

<hr>

<h5>Challenges</h5>
<div id="challenges">
@foreach($industry->challenges as $c)
<div class="border p-3 mb-2">
<input name="challenge_card_title[]" value="{{ $c->challenge_card_title }}" class="form-control mb-2">
<textarea name="challenge_card_desc[]" class="form-control mb-2">{{ $c->challenge_card_desc }}</textarea>
<button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">Remove</button>
</div>
@endforeach
</div>

<button type="button" onclick="addChallenge()" class="btn btn-primary btn-sm mb-3">+ Add Challenge</button>

<hr>

<button class="btn btn-success">Update</button>
<a href="{{ route('admin.banking.index') }}" class="btn btn-secondary">Cancel</a>

</form>

</div>
</div>
</div>

<script>
// SAME JS FROM CREATE
</script>

</x-app-layout>