<x-app-layout>
    <div class="container-fluid px-4">
        <div class="my-3">
            <h4 class="mb-0">Edit Inclusion Card</h4>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.inclusion-cards.update', $card->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title (supports &lt;br&gt; for breaks)</label>
                        <input type="text" name="title" class="form-control" value="{{ $card->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content (Paragraph 1)</label>
                        <textarea name="content" class="form-control" rows="3" required>{{ $card->content }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content (Paragraph 2)</label>
                        <textarea name="second_content" class="form-control" rows="3">{{ $card->second_content }}</textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_active" class="form-check-input" id="isActive" {{ $card->is_active ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="isActive">Is Active</label>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Card</button>
                        <a href="{{ route('admin.inclusion-cards.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
