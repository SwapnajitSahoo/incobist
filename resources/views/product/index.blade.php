<x-app-layout>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h4 class="mb-0">Products</h4>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">+ Add New Product</a>
        </div>

        @if(session('success'))
            <div id="flash-message" class="custom-alert d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center gap-2">
                    <!-- Success Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>

                    <span>{{ session('success') }}</span>
                </div>

                <!-- Close Button -->
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

                // Auto remove after 4 seconds
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

            /* Smooth animation */
            .custom-alert.hide {
                opacity: 0;
                transform: translateY(-10px);
            }

            .btn-close-custom {
                background: transparent;
                border: none;
                color: #065f46;
                opacity: 0.5;
                transition: all 0.3s ease;
                padding: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 6px;
                cursor: pointer;
            }

            .btn-close-custom:hover {
                opacity: 1;
                background-color: rgba(16, 185, 129, 0.1);
                transform: rotate(90deg);
                color: #059669;
            }
        </style>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-white text-uppercase"
                            style="font-size: 0.75rem; font-weight: 700; color: #4b5563; border-bottom: 2px solid #f3f4f6;">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Image</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Heading</th>
                                <th class="px-4 py-3">Slug</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td class="px-4">{{ $loop->iteration }}</td>
                                    <td class="px-4">
                                        @if($product->image)
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                                class="rounded shadow-sm" style="width: 45px; height: 45px; object-fit: cover;">
                                        @else
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                style="width: 45px; height: 45px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                    <polyline points="21 15 16 10 5 21"></polyline>
                                                </svg>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-4 fw-semibold text-dark">{{ $product->name }}</td>
                                    <td class="px-4 text-muted" style="font-size: 0.85rem;">{{ Str::limit($product->heading, 30) }}</td>
                                    <td class="px-4"><span
                                            class="badge bg-light text-dark font-weight-normal">{{ $product->slug }}</span>
                                    </td>
                                    <td class="px-4">
                                        @if($product->is_active)
                                            <span class="badge rounded-pill bg-success-light text-success px-3"
                                                style="font-size: 0.7rem; background-color: #dcfce7;">Active</span>
                                        @else
                                            <span class="badge rounded-pill bg-warning-light text-warning px-3"
                                                style="font-size: 0.7rem; background-color: #fef9c3;">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-4 text-end">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                                class="btn btn-sm btn-outline-primary border-0 shadow-sm px-3 py-1"
                                                style="background: white; border-radius: 6px; font-weight: 500;">Edit</a>
                                            <form action="{{ route('admin.products.delete', $product->id) }}"
                                                method="POST" class="m-0 d-inline-flex"
                                                onsubmit="return confirm('Delete this product?')">
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
                                    <td colspan="7" class="text-center text-muted py-5">
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="text-muted opacity-50">
                                                <path
                                                    d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                                </path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <line x1="10" y1="9" x2="8" y2="9"></line>
                                            </svg>
                                        </div>
                                        No products found. Start by adding one.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
