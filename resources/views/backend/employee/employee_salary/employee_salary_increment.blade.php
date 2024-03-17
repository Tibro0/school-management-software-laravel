@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Employee Salary Increment</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('update.increment.store',$editData->id) }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-md-6">
                            <label class="form-label">Salary Amount</label>
                            <input type="text" name="increment_salary" value="{{ old('increment_salary') }}" placeholder="Salary Amount" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Effected Date</label>
                            <input type="date" name="effected_salary" value="{{ old('effected_salary') }}" class="form-control">
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