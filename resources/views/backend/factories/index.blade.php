@extends('layouts.backend.app')
@section("title", "Factories")

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <h3 class="float-start">Factories</h3>
            <a href="{{ route('factories.create') }}" class="btn btn-primary btn-sm text-light float-end">
              Create
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                  id="multi-filter-select"
                  class="display table table-striped table-hover"
                >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Brand</th>
                      <th>RPO</th>
                      <th>Factory ID</th>
                      <th>Address</th>
                      <th>Factory Contact</th>
                      <th>Union Contact</th>
                      <th>Status</th>
                      <th>Membership</th>
                      <th>Affiliation</th>
                      <th>Building Number</th>
                      <th>Stroies Each Building</th>
                      <th>Total Building Area</th>
                      <th>Cluster ID</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>ABC Factory</td>
                      <td>Tiger Nixon</td>
                      <td>admin@rsc-bd.org</td>
                      <td>+8801700001231</td>
                      <td>aas ascvas savcva</td>
                      <td>aas ascvas savcva</td>
                      <td>aas ascvas savcva</td>
                      <td>aas ascvas savcva</td>
                      <td>aas ascvas savcva</td>
                      <td>aas ascvas savcva</td>
                      <td>aas ascvas savcva</td>
                      <td>1232</td>
                      <td>1232</td>
                      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, repellat.</td>
                      <td>
                        <a href="#" class="btn btn-info btn-xs">View</a>
                        <a href="#" class="btn btn-primary btn-xs">Edit</a>
                        <a href="#" class="btn btn-danger btn-xs">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset("backend/assets/js/plugin/datatables/datatables.min.js") }}"></script>
    <script>
        $(document).ready(function () {
          $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
        $("#multi-filter-select").DataTable({
          pageLength: 10,
          /*
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
          */
        });
    });
    </script>
@endpush
