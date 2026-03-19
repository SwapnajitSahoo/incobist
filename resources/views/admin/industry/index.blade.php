<x-app-layout>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h4 class="mb-0">Industries</h4>
            <a href="{{ route('admin.industry.create') }}" class="btn btn-primary btn-sm">
                + Add Industry
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-white text-uppercase"
                            style="font-size: 0.75rem; font-weight: 700;">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Page Title</th>
                                <th class="px-4 py-3">Slug</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($industries as $industry)
                                <tr>
                                    <td class="px-4">{{ $loop->iteration }}</td>

                                    <td class="px-4 fw-semibold">
                                        {{ $industry->page_title }}
                                    </td>

                                    <td class="px-4">{{ $industry->slug }}</td>

                                    <td class="px-4">
                                        @if($industry->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-warning">Inactive</span>
                                        @endif
                                    </td>

                                    <td class="px-4 text-end">
                                        <a href="{{ route('admin.industry.edit', $industry->id) }}"
                                            class="btn btn-sm btn-outline-primary">Edit</a>

                                        <form action="{{ route('admin.industry.delete', $industry->id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Delete this item?')">
                                            @csrf
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>