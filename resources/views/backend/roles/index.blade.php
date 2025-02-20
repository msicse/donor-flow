@extends('layouts.backend.app')
@section("title", "Users")

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <h3 class="float-start">Roles</h3>
            <a href="{{ route('roles.create') }}" class="btn btn-primary text-light float-end">Create</a>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped" id="roleTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@push('js')

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#roleTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('roles.index') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                {
                    data: 'id',
                    title: 'Actions',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <div class="btn-group">
                                
                                <a href="/roles/edit/${data}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="${data}" onclick="deleteUser(${data})" >
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        `;
                    }
                }
                
            ],
        });
    });


    function deleteUser(id) {
        if (confirm('Are you sure?')) {
            fetch(`/roles/delete/${id}`, {
                method: 'DELETE',
                headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    toastr.success(data.message);
                    setTimeout(() => location.href = "/roles", 2000); // Redirect after 2 sec
                } else {
                    toastr.error(data.message);
                }
            })
            .catch(() => toastr.error('Something went wrong!'));
        }
    }

    </script>
    
@endpush
