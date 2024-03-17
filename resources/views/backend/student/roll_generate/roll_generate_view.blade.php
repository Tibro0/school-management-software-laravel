@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Student Roll Generator</h4>
                <hr class="mt-3 mb-3">
                <form action="{{ route('roll.generate.store') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Year</label>
                            <select name="year_id" id="year_id" class="form-select" required="">
                                <option selected="" disabled="">Select Year</option>
                                @foreach ($years as $year)
                                <option value="{{ $year->id }}"{{ (@$year_id == $year->id)?"selected":""}}>{{ $year->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Class</label>
                            <select name="class_id" id="class_id" class="form-select" required="">
                                <option selected="" disabled="">Select Class</option>
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}"{{ (@$class_id == $class->id)?"selected":""}}>{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <a id="search" name="search" class="btn btn-success px-5" style="margin-top:29px;">Search</a>
                        </div>
                    </div>

                    
                        <table class="table mb-0 mt-4 table-striped align-middle d-none" id="roll-generate">
                            <thead>
                                <tr>
                                    <th scope="col">ID No</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Father Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Roll</th>
                                </tr>
                            </thead>
                            <tbody id="roll-generate-tr">
                                
                            </tbody>
                        </table>
                    <input type="submit" value="Roll Generator" class="btn btn-primary px-5 mt-4">

                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).on('click','#search',function(){
      var year_id = $('#year_id').val();
      var class_id = $('#class_id').val();
       $.ajax({
        url: "{{ route('student.registration.getstudents')}}",
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id},
        success: function (data) {
          $('#roll-generate').removeClass('d-none');
          var html = '';
          $.each( data, function(key, v){
            html +=
            '<tr>'+
            '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"></td>'+
            '<td>'+v.student.name+'</td>'+
            '<td>'+v.student.fname+'</td>'+
            '<td>'+v.student.gender+'</td>'+
            '<td><input type="text" class="form-control form-control-sm" name="roll[]" value="'+v.roll+'"></td>'+
            '</tr>';
          });
          html = $('#roll-generate-tr').html(html);
        }
      });
    });
  
  </script>
@endsection