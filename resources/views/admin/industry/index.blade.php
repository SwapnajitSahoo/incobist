<x-app-layout>
    <div class="container-fluid px-4">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center my-4">
            <div>
                <h4 class="mb-0 fw-bold">Industries</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="font-size: 0.85rem;">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"
                                class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item active">Industries</li>
                    </ol>
                </nav>
            </div>
            <a href="{{ route('admin.industry.create') }}" class="btn btn-primary shadow-sm px-4 py-2"
                style="border-radius: 8px; font-weight: 500;">
                <i class="fe fe-plus me-1"></i> Add Industry
            </a>
        </div>

        <!-- Flash Message -->
        @if(session('success'))
            <div id="flash-message" class="custom-alert d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" onclick="removeFlash()"
                    class="btn-close-custom bg-transparent border-0 p-0 text-dark opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <script>
                function removeFlash() {
                    const flash = document.getElementById('flash-message');
                    if (flash) {
                        flash.classList.add('hide');
                        setTimeout(() => flash.remove(), 400);
                    }
                }
                setTimeout(removeFlash, 4000);
            </script>
        @endif

        <style>
            .custom-alert {
                background: linear-gradient(135deg, #ecfdf5, #d1fae5);
                color: #065f46;
                padding: 12px 16px;
                border-radius: 10px;
                border-left: 4px solid #10b981;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
                font-weight: 500;
                transition: all 0.4s ease;
            }

            .custom-alert.hide {
                opacity: 0;
                transform: translateY(-10px);
            }

            .btn-close-custom:hover {
                opacity: 1 !important;
            }

            .industry-card-img {
                width: 55px;
                height: 40px;
                object-fit: cover;
                border-radius: 6px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            }

            .table-action-btn {
                background: white;
                border-radius: 6px;
                font-weight: 500;
                font-size: 0.8rem;
                padding: 4px 12px;
                border: 1px solid #f3f4f6;
                transition: all 0.2s;
            }

            .table-action-btn:hover {
                background: #f9fafb;
                transform: translateY(-1px);
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            }
        </style>

        <!-- Industry List Table -->
        <div class="card border-0 shadow-sm mb-5" style="border-radius: 12px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-white text-uppercase"
                            style="font-size: 0.75rem; font-weight: 700; color: #4b5563; border-bottom: 2px solid #f3f4f6;">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Nav Menu</th>
                                <th class="px-4 py-3">Heading</th>
                                <th class="px-4 py-3 text-center">Visual</th>
                                <th class="px-4 py-3 text-center">Items</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($industries as $industry)
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td class="px-4 text-muted">{{ $loop->iteration }}</td>
                                    <td class="px-4 fw-bold text-dark">{{ $industry->navbarMenu->title ?? '—' }}</td>

                                    <td class="px-4 text-muted"
                                        style="font-size: 0.85rem; max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        {{ $industry->heading ?? '—' }}
                                    </td>
                                    <td class="px-4 text-center">
                                        @if($industry->page_img)
                                            <img src="{{ asset('storage/' . $industry->page_img) }}" class="industry-card-img">
                                        @else
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center mx-auto"
                                                style="width: 55px; height: 40px; border: 1px dashed #ced4da;">
                                                <i class="fe fe-image text-muted opacity-50"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-4 text-center">
                                        <div class="d-flex flex-column gap-1">
                                            <a href="{{ route('admin.industry.cards.index', $industry->id) }}"
                                                class="text-decoration-none" style="font-size: 0.75rem;">
                                                <span class="text-primary fw-semibold">Cards:</span>
                                                {{ $industry->cards_count }}
                                            </a>
                                            <a href="{{ route('admin.industry.challenges.index', $industry->id) }}"
                                                class="text-decoration-none" style="font-size: 0.75rem;">
                                                <span class="text-info fw-semibold">Challenges:</span>
                                                {{ $industry->challenges_count }}
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-4">
                                        @if($industry->is_active)
                                            <span class="badge rounded-pill px-3 py-1"
                                                style="font-size: 0.7rem; background-color: #dcfce7; color: #166534;">Active</span>
                                        @else
                                            <span class="badge rounded-pill px-3 py-1"
                                                style="font-size: 0.7rem; background-color: #fee2e2; color: #991b1b;">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-4">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.industry.edit', $industry->id) }}"
                                                class="table-action-btn btn-outline-warning text-warning text-decoration-none">Edit</a>
                                            <a href="{{ route('admin.industry.cards.index', $industry->id) }}"
                                                class="table-action-btn btn-outline-primary text-primary text-decoration-none">Cards</a>
                                            <a href="{{ route('admin.industry.challenges.index', $industry->id) }}"
                                                class="table-action-btn btn-outline-info text-info text-decoration-none">Layer</a>
                                            <a href="{{ route('admin.industry.destroy', $industry->id) }}"
                                                class="table-action-btn btn-outline-danger text-danger text-decoration-none"
                                                onclick="return confirm('Delete this industry?')">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-5">
                                        <div class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="text-muted opacity-50">
                                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                        </div>
                                        <p class="mb-0">No industries found. Start by adding one.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        @if($industries->hasPages())
            <div class="d-flex justify-content-center mb-5">
                {{ $industries->links() }}
            </div>
        @endif
    </div>
</x-app-layout>