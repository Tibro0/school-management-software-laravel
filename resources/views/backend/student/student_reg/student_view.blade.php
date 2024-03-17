@extends('admin.admin_master')

@section('css')
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Student List</h3>
        </div>

        <div class="card bg-primary">
            <div class="card-body text-white">
                <h5 class="card-title text-white">Student Search</h5>
                <hr>
                <form action="{{ route('student.year.class.wise') }}" method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Year</label>
                            <select name="year_id" class="form-select" required="">
                                <option selected="" disabled="">Select Year</option>
                                @foreach ($years as $year)
                                <option value="{{ $year->id }}"{{ (@$year_id == $year->id)?"selected":""}}>{{ $year->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Class</label>
                            <select name="class_id" class="form-select" required="">
                                <option selected="" disabled="">Select Class</option>
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}"{{ (@$class_id == $class->id)?"selected":""}}>{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <input type="submit" name="search" value="Search" class="btn btn-success px-5" style="margin-top: 29px;">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                    </div>
                  <div class="ms-auto">
                    <a href="{{ route('student.registration.add') }}" class="btn btn-primary px-5 mt-2">Add Student</a>
                </div>
                </div>
                @if (!isset($search))
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#Sl</th>
                                <th>Name</th>
                                <th>ID No</th>
                                <th>Roll</th>
                                <th>Year</th>
                                <th>Class</th>
                                <th>Image</th>
                                @if (Auth::user()->role=="Admin")
                                <th>Code</th>
                                @endif
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key =>$value)
                            <tr class="align-middle">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value['student']['name'] }}</td>
                                <td>{{ $value['student']['id_no'] }}</td>
                                <td>{{ $value->roll }}</td>
                                <td>{{ $value['student_year']['name'] }}</td>
                                <td>{{ $value['student_class']['name'] }}</td>
                                <td>
                                    <img id="showImage" src="{{ (!empty($value['student']['image']))? url('upload/student_images/' . $value['student']['image']): url('upload/no_image.jpg') }}" style="width: 60px; height: 60px; border: 1px solid #ced4da" alt="">
                                </td>
                                <td>{{ $value->year_id }}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('student.registration.edit',$value->student_id) }}"><i class="bx bxs-edit"></i></a>
                                        <a href="{{ route('student.registration.promotion',$value->student_id) }}" class="ms-3"><i class="lni lni-user"></i></a>
                                        <a target="_blank" href="{{ route('student.registration.details',$value->student_id) }}" class="ms-3"><i class="lni lni-download"></i></a>
                                        
                                    </div>
                                </td>
                            </tr>


                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                @else
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#Sl</th>
                                <th>Name</th>
                                <th>ID No</th>
                                <th>Roll</th>
                                <th>Year</th>
                                <th>Class</th>
                                <th>Image</th>
                                @if (Auth::user()->role=="Admin")
                                <th>Code</th>
                                @endif
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key =>$value)
                            <tr class="align-middle">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value['student']['name'] }}</td>
                                <td>{{ $value['student']['id_no'] }}</td>
                                <td>{{ $value->roll }}</td>
                                <td>{{ $value['student_year']['name'] }}</td>
                                <td>{{ $value['student_class']['name'] }}</td>
                                <td>
                                    <img id="showImage" src="{{ (!empty($value['student']['image']))? url('upload/student_images/' . $value['student']['image']): url('upload/no_image.jpg') }}" style="width: 60px; height: 60px; border: 1px solid #ced4da" alt="">
                                </td>
                                <td>{{ $value->year_id }}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('student.registration.edit',$value->student_id) }}"><i class="bx bxs-edit"></i></a>
                                        <a href="{{ route('student.registration.promotion',$value->student_id) }}" class="ms-3"><i class="lni lni-user"></i></a>
                                        <a target="_blank" href="{{ route('student.registration.details',$value->student_id) }}" class="ms-3"><i class="lni lni-download"></i></a>
                                        
                                    </div>
                                </td>
                            </tr>


                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
@endsection