@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Employee Attendance Report</h4>
                <hr class="mt-3 mb-3">
                <form action="{{ route('report.attendance.get') }}" method="GET" target="_blank">
                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Employee Name</label>
                            <select name="employee_id" id="employee_id" class="form-select" required="">
                                <option selected="" disabled="">Select Employee</option>
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <input type="submit" value="Search" class="btn btn-success" style="margin-top:29px;">
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')

  

@endsection