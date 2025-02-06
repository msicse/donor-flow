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
            <a href="#" class="btn btn-primary text-light float-end">Create</a>
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
                { data: 'email' }
            ]
        });
    });
    </script>
    
@endpush
