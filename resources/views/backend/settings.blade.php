@extends('layouts.backend.app')
@section("title", "Contributions")

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <h3 class="float-start">Settings</h3>
            <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Create
            </button>
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
                      <th>SL</th>
                      <th>Name</th>
                      <th>Value</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Contribution Rate(SQRFT)</td>
                      <td>
                        <input type="text" name="value" placeholder="" value="1200">
                      </td>      
                      <td>
                        <a href="#" class="btn btn-info btn-xs">Update</a>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Payment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
              <div class="form-group">
                <label for="name">Setting Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Receipt Number"
                />
              </div>
              <div class="form-group">
                <label for="name">Value</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Receipt Number"
                />
              </div>
              
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
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
