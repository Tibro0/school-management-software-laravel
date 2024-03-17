@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Edit Subject</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('update.school.subject', $editData->id) }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-md-12 position-relative">
                            <label class="form-label">Subject Name</label>
                            <input type="text" name="name" value="{{ $editData->name }}" placeholder="Subject Name" class="form-control" autocomplete="current-password">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>




                        <div class="col-12">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection