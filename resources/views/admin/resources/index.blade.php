<x-app-layout>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h4 class="mb-0">Resources</h4>
            <a href="{{ route('admin.resources.create') }}" class="btn btn-primary btn-sm">+ Add New Resource</a>
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
            .custom-alert.hide { opacity: 0; transform: translateY(-10px); }
            .btn-close-custom {
                background: transparent; border: none; color: #065f46; opacity: 0.5;
                transition: all 0.3s ease; padding: 5px; display: flex; align-items: center;
                justify-content: center; border-radius: 6px; cursor: pointer;
            }
            .btn-close-custom:hover {
                opacity: 1; background-color: rgba(16, 185, 129, 0.1); transform: rotate(90deg); color: #059669;
            }
        </style>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-white text-uppercase"
                            style="font-size: 0.75rem; font-weight: 700; color: #4b5563; border-bottom: 2px solid #f3f4f6;">
                            <tr>
                                <th class="px-4 py-3">Order</th>
                                <th class="px-4 py-3">Category</th>
                                <th class="px-4 py-3">Title</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($resources as $resource)
                                <tr>
                                    <td class="px-4 text-muted">{{ $resource->order_index }}</td>
                                    <td class="px-4 text-primary fw-semibold">{{ $resource->category }}</td>
                                    <td class="px-4 fw-bold text-dark">{{ $resource->title }}</td>
                                    <td class="px-4">
                                        @if($resource->status)
                                            <span class="badge rounded-pill bg-success-light text-success px-3"
                                                style="font-size: 0.7rem; background-color: #dcfce7;">Active</span>
                                        @else
                                            <span class="badge rounded-pill bg-warning-light text-warning px-3"
                                                style="font-size: 0.7rem; background-color: #fef9c3;">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-4 text-end">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <a href="{{ route('admin.resources.edit', $resource->id) }}"
                                                class="btn btn-sm btn-outline-primary border-0 shadow-sm px-3 py-1"
                                                style="background: white; border-radius: 6px; font-weight: 500;">Edit</a>
                                            <form action="{{ route('admin.resources.delete', $resource->id) }}"
                                                method="POST" class="m-0 d-inline-flex"
                                                onsubmit="return confirm('Delete this resource?')">
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
                                    <td colspan="5" class="text-center text-muted py-5">No resources found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
