@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Update User</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('users.update', $editData->id) }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip04" class="form-label">User Role</label>
                            <select name="role" class="form-select" id="validationTooltip04" required="">
                                <option selected="" disabled="">Select Role</option>
                                <option value="Admin"{{ ($editData->role == "Admin" ? "selected":"") }}>Admin</option>
                                <option value="Operator" {{ ($editData->role == "Operator" ? "selected":"") }} >Operator</option>
                            </select>
                        </div>

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip01" class="form-label">User name</label>
                            <input type="text" name="name" value="{{ $editData->name }}" placeholder="User name" class="form-control" id="validationTooltip01"  required="">
                        </div>

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip01" class="form-label">User Email</label>
                            <input type="email" name="email" value="{{ $editData->email }}" placeholder="User Email" class="form-control" id="validationTooltip01"  required="">
                        </div>

                        {{-- <div class="col-md-6 position-relative">
                            <label for="validationTooltip01" class="form-label">User Password</label>
                            <input type="password" name="password" placeholder="User Password" class="form-control" id="validationTooltip01"  required="">
                        </div> --}}

                        


                        <div class="col-12">
                            <input type="submit" value="Update" class="btn btn-primary px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection