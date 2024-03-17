@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Employee Leave</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('store.employee.leave') }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip04" class="form-label">Employee Name</label>
                            <select name="employee_id" class="form-select" required="">
                                <option selected="" disabled="">Select Employee Name</option>
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Start Date</label>
                            <input type="date" name="start_date" value="{{ old('increment_salary') }}" placeholder="Salary Amount" class="form-control">
                        </div>

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip04" class="form-label">Leave Purpose</label>
                            <select name="leave_purpose_id" id="leave_purpose_id" class="form-select" required="">
                                <option selected="" disabled="">Select Employee Name</option>
                                @foreach ($leave_purpose as $leave)
                                <option value="{{ $leave->id }}">{{ $leave->name }}</option>
                                @endforeach
                                <option value="0">New Purpose</option>
                            </select>
                            <input type="text" name="name" id="add_another" placeholder="Write Purpose" class="form-control mt-4" style="display: none">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">End Date</label>
                            <input type="date" name="end_date" value="{{ old('end_date') }}" class="form-control">
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
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#leave_purpose_id',function(){
            var leave_purpose_id = $(this).val();
            if (leave_purpose_id == '0') {
                $('#add_another').show();
            }else{
                $('#add_another').hide();
            }
        });
    });
</script>
@endsection