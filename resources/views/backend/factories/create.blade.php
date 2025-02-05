@extends('layouts.backend.app')
@section("title", "Brands")

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <h3 class="float-start">Add New Factory </h3>
            <a href="{{ route('factories.index') }}" class="btn btn-primary btn-sm text-light float-end">
              Back
            </a>
          </div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6 col-lg-4 offset-lg-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"
                                >Brand</label
                            >
                            <select
                                class="form-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>Brand 1</option>
                                <option>Brand 2</option>
                                <option>Brand 3</option>
                                <option>Brand 4</option>
                                <option>Brand 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Factory Name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Factory ID</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Factory Contact</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Union Contact</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Status</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Membership</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Membership ID</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"
                                >RPO</label
                            >
                            <select
                                class="form-select"
                                id="exampleFormControlSelect1"
                            >
                                <option>RPO 1</option>
                                <option>RPO 2</option>
                                <option>RPO 3</option>
                                <option>RPO 4</option>
                                <option>RPO 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Building Number</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Stories Each Building</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Affiliation</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Total Building Area</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="name">Cluster ID</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              placeholder=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="comment">Address</label>
                            <textarea class="form-control" id="comment" rows="5">
                            </textarea>
                          </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection

@push('js')

@endpush
