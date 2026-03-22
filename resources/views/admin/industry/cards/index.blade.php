<x-app-layout>
    <div class="container-fluid">
 
    <div class="page-header">
        <div>
            <h1 class="page-title">Industry Cards</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.industry.index') }}">Industries</a></li>
                <li class="breadcrumb-item active">Cards</li>
            </ol>
        </div>
        <div class="ms-auto pageheader-btn d-flex gap-2">
            <a href="{{ route('admin.industry.cards.create', $industry->id) }}" class="btn btn-primary text-white">
                <i class="fe fe-plus me-1"></i> Add Card
            </a>
            <a href="{{ route('admin.industry.challenges.index', $industry->id) }}" class="btn btn-info text-white">
                <i class="fe fe-layers me-1"></i> Challenges
            </a>
            <a href="{{ route('admin.industry.edit', $industry->id) }}" class="btn btn-secondary text-white">
                <i class="fe fe-arrow-left me-1"></i> Back to Industry
            </a>
        </div>
    </div>
 
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fe fe-check-circle me-1"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
 
    {{-- Parent Industry Info --}}
    <div class="alert alert-light border mb-3 d-flex align-items-center gap-3">
        @if($industry->page_img)
            <img src="{{ asset('storage/'.$industry->page_img) }}" width="50" height="35"
                 style="object-fit:cover;border-radius:4px;flex-shrink:0;">
        @endif
        <div>
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
    </div>
 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Cards List</h3>
                    <span class="badge bg-primary">{{ $cards->total() }} Total</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th width="50">#</th>
                                    <th width="80">Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Type</th>
                                    <th>Card Link</th>
                                    <th width="80">Status</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($cards as $card)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($card->img)
                                            <img src="{{ asset('storage/'.$card->img) }}"
                                                 width="60" height="40"
                                                 style="object-fit:cover;border-radius:4px;">
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>{{ $card->title ?? '—' }}</td>
                                    <td>{{ $card->subtitle ?? '—' }}</td>
                                    <td>
                                        @if($card->type)
                                            <span class="badge
                                                @if($card->type === 'serve') bg-primary
                                                @elseif($card->type === 'focus') bg-warning text-dark
                                                @else bg-info text-dark @endif">
                                                {{ ucfirst($card->type) }}
                                            </span>
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($card->card_link)
                                            <a href="{{ $card->card_link }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                                                <i class="fe fe-external-link"></i>
                                            </a>
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($card->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.industry.cards.edit', [$industry->id, $card->id]) }}"
                                           class="btn btn-sm btn-warning" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.industry.cards.destroy', [$industry->id, $card->id]) }}"
                                           class="btn btn-sm btn-danger" title="Delete"
                                           onclick="return confirm('Delete this card?')">
                                            <i class="fe fe-trash-2"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-4">
                                        <i class="fe fe-inbox" style="font-size:2rem;"></i>
                                        <p class="mt-2 mb-0">No cards found for this industry.</p>
                                        <a href="{{ route('admin.industry.cards.create', $industry->id) }}"
                                           class="btn btn-sm btn-primary mt-2">Add First Card</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        {{ $cards->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
</x-app-layout>