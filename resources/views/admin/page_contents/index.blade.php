<x-app-layout>
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center my-3">
        <h4 class="mb-0">Page Contents</h4>
        <a href="{{ route('admin.page-contents.create') }}" class="btn btn-primary btn-sm">+ Add New Page</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-bordered table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Page Title</th>
                        <th>Menu</th>
                        <th>Layout</th>
                        <th>Sections</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $page->page_title }}</td>
                        <td>{{ $page->menu->title ?? '—' }}</td>
                        <td><span class="badge bg-secondary">{{ $page->layout }}</span></td>
                        <td>{{ $page->sections_count ?? $page->sections->count() }}</td>
                        <td>
                            @if($page->is_published)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-warning text-dark">Draft</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.page-contents.edit', $page->id) }}"
                               class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.page-contents.delete', $page->id) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Delete this page and all its sections?')">
                                @csrf
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">No pages found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>