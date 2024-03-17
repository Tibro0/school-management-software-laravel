@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Add Grade Marks</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('store.marks.grade') }}" method="POST" class="row g-3">
                        @csrf

                            {{-- 1st Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Grade Name</label>
                                <input type="text" name="grade_name" placeholder="Grade Name" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Grade Point</label>
                                <input type="text" name="grade_point" placeholder="Grade Point" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Start Marks</label>
                                <input type="text" name="start_marks" placeholder="Start Marks" class="form-control" required>
                            </div>

                            {{-- 2nd Section --}}
                            <div class="col-md-4">
                                <label class="form-label">End Marks</label>
                                <input type="text" name="end_marks" placeholder="End Marks" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Start Point</label>
                                <input type="text" name="start_point" placeholder="Start Point" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">End Point</label>
                                <input type="text" name="end_point" placeholder="End Point" class="form-control" required>
                            </div>

                            {{-- 3rd Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Remarks</label>
                                <input type="text" name="remarks" placeholder="Remarks" class="form-control" required>
                            </div>        

                        <div class="col-12">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@section('js')

@endsection