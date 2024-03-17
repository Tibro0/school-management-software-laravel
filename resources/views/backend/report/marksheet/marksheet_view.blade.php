@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage MarkSheet Generate</h4>
                <hr class="mt-3 mb-3">
                <form action="{{ route('report.marksheet.get') }}" method="GET" target="_blank">
                @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Year</label>
                            <select name="year_id" id="year_id" class="form-select" required="">
                                <option selected="" disabled="">Select Year</option>
                                @foreach ($years as $year)
                                <option value="{{ $year->id }}">{{ $year->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Class</label>
                            <select name="class_id" id="class_id" class="form-select" required="">
                                <option selected="" disabled="">Select Class</option>
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Exam Type</label>
                            <select name="exam_type_id" id="exam_type_id" class="form-select" required="">
                                <option selected="" disabled="">Select Exam</option>
                                @foreach ($exam_type as $exam)
                                <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label class="form-label">ID No</label>
                            <input type="text" name="id_no" placeholder="ID No" class="form-control" required>
                        </div>

                        <div class="col-md-1">
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