@extends('layouts.backend.app')
@section("title", "Brands")

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <h3 class="float-start">Brands</h3>
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
                      <th>Name</th>
                      <th>Contact Person</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>About</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>ABC Brand</td>
                      <td>Tiger Nixon</td>
                      <td>admin@rsc-bd.org</td>
                      <td>+8801700001231</td>
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

<!-- Modal -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Brand</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Brand Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Name"
                />
              </div>
              
              <div class="form-group">
                <label for="comment">About</label>
                <textarea class="form-control" id="comment" rows="5">
                </textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Contact Person</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Name"
                />
              </div>
              <div class="form-group">
                <label for="email2">Email Address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email2"
                  placeholder="Enter Email"
                />
              
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input
                  type="phone"
                  class="form-control"
                  id="phone"
                  placeholder="Enter Phone"
                />
              </div>
            </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
