<x-app-layout>
    <div class="container-fluid px-4">

        <div class="d-flex justify-content-between align-items-center my-3">
            <h4 class="mb-0">Banking Industry</h4>
            <a href="{{ route('admin.banking.create') }}" class="btn btn-primary btn-sm">
                + Add Industry
            </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light text-uppercase" style="font-size:12px;">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="fw-semibold">{{ $row->page_title }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>
                                    @if($row->is_active)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-warning">Inactive</span>
                                    @endif
                                </td>

                                <td class="text-end">
                                    <a href="{{ route('admin.banking.edit',$row->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                                    <form action="{{ route('admin.banking.delete',$row->id) }}" method="POST" class="d-inline">
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