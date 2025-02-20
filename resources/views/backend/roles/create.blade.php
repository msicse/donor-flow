@extends('layouts.backend.app')
@section("title", "Roles | Create")

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <h3 class="float-start">Roles</h3>
            <a href="{{ route('roles.index')}}" class="btn btn-primary btn-md text-light float-end">Back</a>
          </div>
        </div>
        <div class="card-body">
            <form action="{{ $role ? route('roles.update', $role->id) : route('roles.store') }}" method="POST">
                @csrf
                @if ($role)
                @method('PUT') 
                @endif
                <div class="row">
                    <div class="col-md-3">
                        <h5>Role Name</h5>
                        <div class="form-group">
                            <input
                              type="text"
                              name="name"
                              class="form-control"
                              placeholder="Enter Role Name"
                              value="{{ old('name', $role->name ?? '') }}"
                            />
                        </div>
                        <button type="submit" class="btn btn-primary btn-md"> {{ $role ? 'Update' : 'Create' }}</button>
                    </div>
                    <div class="col-md-9">
                        <h5>Permissions</h5>
                        <div class="row">
                            @foreach ($permission as $value)
                                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 form-check margin-bt-0">
                                    <input type="checkbox" class="form-check-input" 
                                    name="permissions[{{ $value->id }}]" value="1"
                                    id="permission_{{ $value->id }}"
                                    {{ old("permissions.{$value->id}", in_array($value->id, $rolePermissions ?? []) ? '1' : '') ? 'checked' : '' }}>
                                <label class="form-check-label" for="permission_{{ $value->id }}">
                                    {{ $value->name }}
                                </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection
