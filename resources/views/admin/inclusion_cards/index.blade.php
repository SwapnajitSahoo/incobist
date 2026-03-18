<x-app-layout>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h4 class="mb-0">Inclusion Cards</h4>
            <a href="{{ route('admin.inclusion-cards.create') }}" class="btn btn-primary btn-sm">+ Add New Card</a>
        </div>

        @if(session('success'))
            <div id="flash-message" class="custom-alert d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" onclick="removeFlash()" class="btn-close-custom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        @endif

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-white text-uppercase"
                            style="font-size: 0.75rem; font-weight: 700; color: #4b5563; border-bottom: 2px solid #f3f4f6;">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Title</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cards as $card)
                                <tr>
                                    <td class="px-4">{{ $loop->iteration }}</td>
                                    <td class="px-4 fw-semibold text-dark">{!! $card->title !!}</td>
                                    <td class="px-4">
                                        @if($card->is_active)
                                            <span class="badge rounded-pill bg-success-light text-success px-3"
                                                style="font-size: 0.7rem; background-color: #dcfce7;">Active</span>
                                        @else
                                            <span class="badge rounded-pill bg-warning-light text-warning px-3"
                                                style="font-size: 0.7rem; background-color: #fef9c3;">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-4 text-end">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <a href="{{ route('admin.inclusion-cards.edit', $card->id) }}"
                                                class="btn btn-sm btn-outline-primary border-0 shadow-sm px-3 py-1"
                                                style="background: white; border-radius: 6px; font-weight: 500;">Edit</a>
                                            <form action="{{ route('admin.inclusion-cards.delete', $card->id) }}"
                                                method="POST" class="m-0 d-inline-flex"
                                                onsubmit="return confirm('Delete this card?')">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-sm btn-outline-danger border-0 shadow-sm px-3 py-1"
                                                    style="background: white; border-radius: 6px; font-weight: 500;">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-5">No cards found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
