@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Student ID Card</h4>
                <hr class="mt-3 mb-3">
                <form action="{{ route('report.student.idcard.get') }}" method="GET" target="_blank">
                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Year</label>
                            <select name="year_id" id="year_id" class="form-select" required="">
                                <option selected="" disabled="">Select Year</option>
                                @foreach ($years as $year)
                                <option value="{{ $year->id }}">{{ $year->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Class</label>
                            <select name="class_id" id="class_id" class="form-select" required="">
                                <option selected="" disabled="">Select Class</option>
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <input type="submit" value="Search" class="btn btn-success px-5" style="margin-top:29px;">
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