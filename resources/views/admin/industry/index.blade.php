<x-app-layout>
   <div class="container-fluid">
 
    <div class="page-header">
        <div>
            <h1 class="page-title">Industries</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Industries</li>
            </ol>
        </div>
        <div class="ms-auto pageheader-btn">
            <a href="{{ route('admin.industry.create') }}" class="btn btn-primary text-white">
                <i class="fe fe-plus me-1"></i> Add Industry
            </a>
        </div>
    </div>
 
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fe fe-check-circle me-1"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Industry List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th width="50">#</th>
                                    <th>Nav Menu</th>
                                    <th>Type</th>
                                    <th>Page Title</th>
                                    <th>Heading</th>
                                    <th>Image</th>
                                    <th width="80">Cards</th>
                                    <th width="100">Challenges</th>
                                    <th width="80">Status</th>
                                    <th width="160">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($industries as $industry)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $industry->navbarMenu->title ?? '—' }}</td>
                                    <td>
                                        <span class="badge
                                            @if($industry->type === 'serve') bg-primary
                                            @elseif($industry->type === 'focus') bg-warning text-dark
                                            @else bg-info text-dark
                                            @endif">
                                            {{ ucfirst($industry->type) }}
                                        </span>
                                    </td>
                                    <td>{{ $industry->page_title ?? '—' }}</td>
                                    <td>{{ $industry->heading ?? '—' }}</td>
                                    <td>
                                        @if($industry->page_img)
                                            <img src="{{ asset('storage/'.$industry->page_img) }}"
                                                 width="60" height="40"
                                                 style="object-fit:cover;border-radius:4px;">
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.industry.cards.index', $industry->id) }}"
                                           class="badge bg-primary text-decoration-none">
                                            {{ $industry->cards_count }}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.industry.challenges.index', $industry->id) }}"
                                           class="badge bg-info text-dark text-decoration-none">
                                            {{ $industry->challenges_count }}
                                        </a>
                                    </td>
                                    <td>
                                        @if($industry->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.industry.edit', $industry->id) }}"
                                           class="btn btn-sm btn-warning" title="Edit">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.industry.cards.index', $industry->id) }}"
                                           class="btn btn-sm btn-primary" title="Cards">
                                            <i class="fe fe-grid"></i>
                                        </a>
                                        <a href="{{ route('admin.industry.challenges.index', $industry->id) }}"
                                           class="btn btn-sm btn-info" title="Challenges">
                                            <i class="fe fe-layers"></i>
                                        </a>
                                        <a href="{{ route('admin.industry.destroy', $industry->id) }}"
                                           class="btn btn-sm btn-danger" title="Delete"
                                           onclick="return confirm('Delete this industry and all its data?')">
                                            <i class="fe fe-trash-2"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center text-muted py-4">
                                        <i class="fe fe-inbox" style="font-size:2rem;"></i>
                                        <p class="mt-2 mb-0">No industries found.</p>
                                        <a href="{{ route('admin.industry.create') }}" class="btn btn-sm btn-primary mt-2">Add First Industry</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        {{ $industries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
</x-app-layout>