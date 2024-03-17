@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Add Attendance</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('store.employee.attendance') }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-md-6">
                            <label class="form-label">Attendance Date</label>
                            <input type="date" name="date" value="{{ old('date') }}" placeholder="Designation Name" class="form-control">
                        </div>

                        
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="border align-middle">Sl</th>
                                        <th class="border align-middle">Employee List</th>
                                        <th class="text-center border" style="width: 30%">Attendance Status
                                            <div class="row mt-2">
                                                <div class="col-sm-3 border offset-sm-1">Present</div>
                                                <div class="col-sm-3 border">Leave</div>
                                                <div class="col-sm-3 border">Absent</div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $key=> $employee)
                                    <tr id="div{{ $employee->id }}">
                                        <input type="hidden" name="employee_id[]" value="{{ $employee->id }}">
                                        <th class="border">{{ $key+1 }}</th>
                                        <td class="border">{{ $employee->name }}</td>
                                        <td class="border">
                                            <div class="row mt-2">
                                                <div class="col-sm-3 border offset-sm-1">
                                                    <div class="form-check mt-1">
                                                        <input name="attend_status{{ $key }}" value="Present" id="present{{ $key }}" class="form-check-input" type="radio" checked>
                                                        <label for="present{{ $key }}" class="form-check-label">Present</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 border">
                                                    <div class="form-check mt-1">
                                                        <input name="attend_status{{ $key }}" value="Leave" id="leave{{ $key }}" class="form-check-input" type="radio">
                                                        <label for="leave{{ $key }}" class="form-check-label">Leave</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 border">
                                                    <div class="form-check mt-1">
                                                        <input name="attend_status{{ $key }}" value="Absent" id="absent{{ $key }}" class="form-check-input" type="radio">
                                                        <label for="absent{{ $key }}" class="form-check-label">Absent</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
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