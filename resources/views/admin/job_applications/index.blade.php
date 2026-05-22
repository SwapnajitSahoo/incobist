<x-app-layout>
    <div class="container-fluid px-4 mt-4">
        <!-- Page Header -->
        <div class="page-header d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="page-title mb-0">Job Applications</h4>
                <ol class="breadcrumb bg-transparent p-0 mt-1" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Job Applications</li>
                </ol>
            </div>
        </div>

        @if(session('success'))
            <div id="flash-message" class="alert alert-success d-flex justify-content-between align-items-center mb-4">
                <span><i class="fa fa-check-circle me-2"></i>{{ session('success') }}</span>
                <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
            </div>
        @endif

        <!-- Filters -->
        <div class="card border-0 shadow-sm mb-4" style="border-radius: 12px;">
            <div class="card-body p-4">
                <form action="{{ route('admin.job-applications.index') }}" method="GET" class="row g-3 align-items-end">
                    <div class="col-md-5">
                        <label class="form-label small fw-bold text-muted text-uppercase mb-2">Search Applicant</label>
                        <div class="input-group border rounded-3 overflow-hidden">
                            <span class="input-group-text bg-white border-0"><i class="fa fa-search text-muted"></i></span>
                            <input type="text" name="search" class="form-control border-0 ps-0" 
                                placeholder="Name, email or phone..." value="{{ request('search') }}" style="box-shadow: none;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small fw-bold text-muted text-uppercase mb-2">Filter by Job</label>
                        <select name="career_id" class="form-select border rounded-3" style="box-shadow: none; height: 45px;">
                            <option value="">All Jobs</option>
                            @foreach($careers as $career)
                                <option value="{{ $career->id }}" {{ request('career_id') == $career->id ? 'selected' : '' }}>
                                    {{ $career->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 d-flex gap-2">
                        <button type="submit" class="btn btn-primary btn-block px-4 mr-2" style="border-radius: 8px; height: 45px; font-weight: 600; transition: all 0.3s ease;">
                            <i class="fa fa-filter me-2"></i>Filter
                        </button>
                        <a href="{{ route('admin.job-applications.index') }}" class="btn btn-outline-light px-3 border" style="border-radius: 8px; height: 45px; display: flex; align-items: center; justify-content: center; min-width: 45px; transition: all 0.3s ease;" title="Reset Filters">
                            <i class="fa fa-undo text-muted"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Table Card -->
        <div class="card border-0 shadow-sm" style="border-radius: 12px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-light text-uppercase"
                            style="font-size: 0.72rem; font-weight: 700; color: #4b5563; border-bottom: 1px solid #e5e7eb;">
                            <tr>
                                <th class="px-4 py-3">Resume</th>
                                <th class="px-3 py-3">Job Title</th>
                                <th class="px-3 py-3">Name</th>
                                <th class="px-3 py-3">Email</th>
                                <th class="px-3 py-3">Mobile</th>
                                <th class="px-3 py-3">Date</th>
                                <th class="px-3 py-3">Status</th>
                                <th class="px-4 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($applications as $application)
                                <tr>
                                    <td class="px-4 py-3">
                                        <a href="{{ asset($application->resume) }}" target="_blank"
                                            class="btn btn-sm btn-outline-danger px-3 py-1"
                                            style="border-radius: 6px; font-size: 0.72rem; white-space: nowrap; font-weight: 600;">
                                            <i class="fa fa-file-pdf-o me-1"></i> PDF
                                        </a>
                                    </td>
                                    <td class="px-3 py-3">
                                        <span class="text-dark fw-semibold" style="font-size: 0.82rem;">{{ $application->career->title ?? 'Deleted Job' }}</span>
                                    </td>
                                    <td class="px-3 py-3">
                                        <span class="fw-bold text-dark" style="font-size: 0.82rem;">{{ $application->first_name }} {{ $application->last_name }}</span>
                                    </td>
                                    <td class="px-3 py-3 text-muted" style="font-size: 0.82rem;">
                                        {{ $application->email }}
                                    </td>
                                    <td class="px-3 py-3 text-muted" style="font-size: 0.82rem;">
                                        {{ $application->phone ?? 'N/A' }}
                                    </td>
                                    <td class="px-3 py-3 text-muted" style="font-size: 0.82rem;">
                                        <div class="fw-semibold">{{ $application->created_at->format('d M Y') }}</div>
                                        <div style="font-size: 0.72rem; opacity: 0.7;">{{ $application->created_at->format('h:i A') }}</div>
                                    </td>
                                    <td class="px-3 py-3">
                                        <span class="badge status-badge {{ $application->status }}">
                                            {{ ucfirst($application->status) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <button class="btn btn-sm btn-primary shadow-sm px-2" data-toggle="modal"
                                            data-target="#detailModal{{ $application->id }}" style="border-radius: 6px; font-size: 0.75rem; width: 32px; height: 32px;">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Application Detail Modal -->
                                <div class="modal fade" id="detailModal{{ $application->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                                            <div class="modal-header border-0 py-3 px-4">
                                                <h5 class="modal-title fw-bold">Application Details</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4 pt-0">
                                                <!-- Info Section -->
                                                <div class="mb-4">
                                                    <label class="text-muted small text-uppercase fw-bold mb-2">Applicant Info</label>
                                                    <div class="p-3 bg-light rounded-3">
                                                        <h6 class="fw-bold mb-1">{{ $application->first_name }} {{ $application->last_name }}</h6>
                                                        <p class="mb-1 small text-muted"><i class="fa fa-envelope-o me-2"></i>{{ $application->email }}</p>
                                                        <p class="mb-0 small text-muted"><i class="fa fa-phone me-2"></i>{{ $application->phone ?? 'N/A' }}</p>
                                                    </div>
                                                </div>

                                                <!-- Extra Fields Section -->
                                                <div class="mb-4">
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <label class="text-muted small text-uppercase fw-bold mb-1">Education</label>
                                                            <div class="small fw-semibold text-dark">{{ $application->education ?? 'N/A' }}</div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="text-muted small text-uppercase fw-bold mb-1">Experience</label>
                                                            <div class="small fw-semibold text-dark">{{ $application->experience ?? 'N/A' }}</div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="text-muted small text-uppercase fw-bold mb-1">State</label>
                                                            <div class="small text-dark">{{ $application->state ?? 'N/A' }}</div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="text-muted small text-uppercase fw-bold mb-1">District</label>
                                                            <div class="small text-dark">{{ $application->district ?? 'N/A' }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="text-muted small text-uppercase fw-bold mb-2">Applied For</label>
                                                    <div class="fw-bold text-primary" style="font-size: 1rem;">
                                                        {{ $application->career->title ?? 'N/A' }}</div>
                                                    <div class="text-muted small mt-1"><i class="fa fa-clock-o me-1"></i>Applied on: {{ $application->created_at->format('d M Y, h:i A') }}</div>
                                                </div>

                                                @if($application->message)
                                                    <div class="mb-4">
                                                        <label class="text-muted small text-uppercase fw-bold mb-2">Message</label>
                                                        <div class="p-3 border rounded-3 small text-muted bg-white" style="line-height: 1.6;">
                                                            {{ $application->message }}
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="mb-4">
                                                    <label class="text-muted small text-uppercase fw-bold mb-2">Resume Document</label>
                                                    <a href="{{ asset($application->resume) }}" target="_blank"
                                                        class="btn btn-outline-info w-100 py-2 d-flex align-items-center justify-content-center gap-2"
                                                        style="border-radius: 10px; font-weight: 600;">
                                                        <i class="fa fa-download"></i> View Full Resume
                                                    </a>
                                                </div>

                                                <hr class="my-4" style="opacity: 0.1;">

                                                <!-- Status Update Section -->
                                                <form action="{{ route('admin.job-applications.update-status', $application->id) }}" method="POST">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <label class="text-muted small text-uppercase fw-bold mb-2">Update Application Status</label>
                                                        <select name="status" class="form-select border shadow-sm px-3" style="border-radius: 10px; height: 45px;">
                                                            <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                            <option value="reviewed" {{ $application->status == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                                                            <option value="accepted" {{ $application->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                                                            <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                        </select>
                                                    </div>

                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <button type="submit" class="btn btn-success px-4" style="border-radius: 10px; height: 45px; font-weight: 600;">
                                                            Save Changes
                                                        </button>
                                                </form>

                                                <form action="{{ route('admin.job-applications.delete', $application->id) }}" method="POST" onsubmit="return confirm('Delete permanently?')">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link text-danger p-0 border-0 text-decoration-none small fw-bold">
                                                        <i class="fa fa-trash me-1"></i> Delete Application
                                                    </button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-5 text-muted">
                                        <i class="fa fa-folder-open-o fs-1 mb-3 d-block opacity-20"></i>
                                        No applications found for the selected criteria.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-4 pb-5 px-2">
            {{ $applications->appends(request()->query())->links() }}
        </div>
    </div>

    <style>
        .status-badge {
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge.pending {
            background: #fffbeb;
            color: #b45309;
            border: 1px solid #fde68a;
        }

        .status-badge.reviewed {
            background: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
        }

        .status-badge.accepted {
            background: #f0fdf4;
            color: #15803d;
            border: 1px solid #bbf7d0;
        }

        .status-badge.rejected {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .table th {
            letter-spacing: 0.5px;
        }

        .table td {
            height: 70px;
        }

        .modal-header .btn-close {
            box-shadow: none;
        }

        .form-select:focus, .form-control:focus {
            border-color: #2563eb !important;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1) !important;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }
    </style>
</x-app-layout>