<x-app-layout>
    <div class="container-fluid px-4 mt-4">
        <!-- Header -->
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
            <div id="flash-message" class="alert alert-success d-flex justify-content-between align-items-center">
                <span>{{ session('success') }}</span>
                <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
            </div>
        @endif

        <!-- Simplified Table -->
        <div class="card border-0 shadow-sm" style="border-radius: 12px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="bg-white text-uppercase"
                            style="font-size: 0.75rem; font-weight: 700; color: #4b5563; border-bottom: 2px solid #f3f4f6;">
                            <tr>
                                <th class="px-4 py-3">Applicant</th>
                                <th class="px-4 py-3">Job Title</th>
                                <th class="px-4 py-3">Applied Date</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($applications as $application)
                                            <tr>
                                                <td class="px-4 py-3">
                                                    <div class="fw-bold text-dark">{{ $application->name }}</div>
                                                    <div class="text-muted small">{{ $application->email }}</div>
                                                </td>
                                                <td class="px-4 py-3">
                                                    <span
                                                        class="text-primary fw-semibold">{{ $application->career->title ?? 'Deleted Job' }}</span>
                                                </td>
                                                <td class="px-4 py-3 text-muted small">
                                                    {{ $application->created_at->format('d M, Y') }}
                                                </td>
                                                <td class="px-4 py-3">
                                                    <span class="badge status-badge {{ $application->status }}">
                                                        {{ ucfirst($application->status) }}
                                                    </span>
                                                </td>
                                                <td class="px-4 py-3 text-end">
                                                    <button class="btn btn-sm btn-primary shadow-sm px-3" data-toggle="modal"
                                                        data-target="#detailModal{{ $application->id }}" style="border-radius: 8px;">
                                                        <i class="fa fa-eye me-1"></i> Manage
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Application Detail Modal -->
                                            <div class="modal fade" id="detailModal{{ $application->id }}" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                                                        <div class="modal-header bg-light border-0 py-3"
                                                            style="border-radius: 15px 15px 0 0;">
                                                            <h5 class="modal-title fw-bold">Application Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body p-4">
                                                            <!-- Info Section -->
                                                            <div class="mb-4">
                                                                <label class="text-muted small text-uppercase fw-bold mb-2">Applicant
                                                                    Info</label>
                                                                <div class="p-3 bg-light rounded-3">
                                                                    <h6 class="fw-bold mb-1">{{ $application->name }}</h6>
                                                                    <p class="mb-1 small text-muted"><i
                                                                            class="fa fa-envelope-o me-2"></i>{{ $application->email }}
                                                                    </p>
                                                                    <p class="mb-0 small text-muted"><i
                                                                            class="fa fa-phone me-2"></i>{{ $application->phone ?? 'N/A' }}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4">
                                                                <label class="text-muted small text-uppercase fw-bold mb-2">Applied
                                                                    For</label>
                                                                <div class="fw-bold text-primary">
                                                                    {{ $application->career->title ?? 'N/A' }}</div>
                                                                <div class="text-muted small">Date:
                                                                    {{ $application->created_at->format('d M Y, h:i A') }}</div>
                                                            </div>

                                                            @if($application->message)
                                                                <div class="mb-4">
                                                                    <label
                                                                        class="text-muted small text-uppercase fw-bold mb-2">Message</label>
                                                                    <div class="p-3 border rounded-3 small text-muted bg-white"
                                                                        style="line-height: 1.6;">
                                                                        {{ $application->message }}
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            <div class="mb-4">
                                                                <label
                                                                    class="text-muted small text-uppercase fw-bold mb-2">Resume</label>
                                                                <a href="{{ asset($application->resume) }}" target="_blank"
                                                                    class="btn btn-outline-info w-100 py-2 d-flex align-items-center justify-content-center gap-2"
                                                                    style="border-radius: 10px;">
                                                                    <i class="fa fa-download"></i> Download / View Resume
                                                                </a>
                                                            </div>

                                                            <hr class="my-4">

                                                            <!-- Status Update Section -->
                                                            <form
                                                                action="{{ route('admin.job-applications.update-status', $application->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="form-group mb-0">
                                                                    <label class="text-muted small text-uppercase fw-bold mb-2">Update
                                                                        Application Status</label>
                                                                    <div class="d-flex gap-2 mb-3">
                                                                        <select name="status" class="form-select border shadow-sm px-3"
                                                                            style="border-radius: 10px;">
                                                                            <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                            <option value="reviewed" {{ $application->status == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                                                                            <option value="accepted" {{ $application->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                                                                            <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!-- Action Buttons in One Line -->
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between gap-2 mt-4">
                                                                    <div class="d-flex gap-2">
                                                                        <button type="submit" class="btn btn-success px-4 mr-1"
                                                                            style="border-radius: 10px;">Update Status</button>
                                                                        <button type="button" class="btn btn-light px-4"
                                                                            data-dismiss="modal"
                                                                            style="border-radius: 10px;">Close</button>
                                                                    </div>
                                                            </form>

                                                            <form
                                                                action="{{ route('admin.job-applications.delete', $application->id) }}"
                                                                method="POST" onsubmit="return confirm('Delete permanently?')">
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-danger px-3 border-0"
                                                                    style="border-radius: 10px;">
                                                                    <i class="fa fa-trash me-1"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">No applications found.</td>
                    </tr>
                @endforelse
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <style>
        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
        }

        .status-badge.pending {
            background: #fef9c3;
            color: #854d0e;
        }

        .status-badge.reviewed {
            background: #e0f2fe;
            color: #075985;
        }

        .status-badge.accepted {
            background: #dcfce7;
            color: #166534;
        }

        .status-badge.rejected {
            background: #fee2e2;
            color: #991b1b;
        }

        .modal-content {
            animation: slideUp 0.3s ease-out;
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</x-app-layout>