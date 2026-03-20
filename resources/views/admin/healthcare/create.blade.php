<x-app-layout>
    <div class="container-fluid px-4">

        <h4 class="my-3">Add healthcare Industry</h4>

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <form method="POST" action="{{ route('admin.healthcare.store') }}">
                    @csrf

                    <!-- BASIC -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Page Title</label>
                            <input type="text" name="page_title" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Heading</label>
                        <input type="text" name="heading" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Heading Subtitle</label>
                        <input type="text" name="heading_subtitle" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Lending Title</label>
                        <input type="text" name="lending_title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Lending Description</label>
                        <textarea name="lending_desc" class="form-control"></textarea>
                    </div>

                    <div class="form-check mb-4">
                        <input type="checkbox" name="is_active" value="1" checked class="form-check-input">
                        <label>Active</label>
                    </div>

                    <hr>

                    <!-- CARDS -->
                    <h5 class="mb-3">Cards</h5>
                    <div id="cards"></div>
                    <button type="button" class="btn btn-primary btn-sm mb-4" onclick="addCard()">+ Add Card</button>

                    <hr>

                    <!-- SERVICES -->
                    <h5 class="mb-3">Services</h5>
                    <div id="services"></div>
                    <button type="button" class="btn btn-primary btn-sm mb-4" onclick="addService()">+ Add Service</button>

                    <hr>

                    <!-- CHALLENGES -->
                    <h5 class="mb-3">Challenges</h5>
                    <div id="challenges"></div>
                    <button type="button" class="btn btn-primary btn-sm mb-4" onclick="addChallenge()">+ Add Challenge</button>

                    <hr>

                    <button class="btn btn-success">Save</button>
                    <a href="{{ route('admin.healthcare.index') }}" class="btn btn-secondary">Cancel</a>

                </form>

            </div>
        </div>
    </div>

    <script>
        function addCard() {
            document.getElementById('cards').insertAdjacentHTML('beforeend', `
<div class="border p-3 mb-3 rounded">
<input name="card_title[]" class="form-control mb-2" placeholder="Title">
<input name="card_subtitle[]" class="form-control mb-2" placeholder="Subtitle">
<textarea name="card_description[]" class="form-control mb-2" placeholder="Description"></textarea>
<button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">Remove</button>
</div>`);
        }

        function addService() {
            document.getElementById('services').insertAdjacentHTML('beforeend', `
<div class="border p-3 mb-3 rounded">
<input name="service_card_title[]" class="form-control mb-2" placeholder="Title">
<textarea name="service_card_desc[]" class="form-control mb-2" placeholder="Description"></textarea>
<button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">Remove</button>
</div>`);
        }

        function addChallenge() {
            document.getElementById('challenges').insertAdjacentHTML('beforeend', `
<div class="border p-3 mb-3 rounded">
<input name="challenge_card_title[]" class="form-control mb-2" placeholder="Title">
<input name="challenge_card_subtitle[]" class="form-control mb-2" placeholder="Subtitle">
<textarea name="challenge_card_desc[]" class="form-control mb-2" placeholder="Description"></textarea>
<button type="button" class="btn btn-danger btn-sm" onclick="this.parentElement.remove()">Remove</button>
</div>`);
        }
    </script>

</x-app-layout>