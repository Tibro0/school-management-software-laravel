@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Student Marks Entry</h4>
                <hr class="mt-3 mb-3">
                <form action="{{ route('marks.entry.store') }}" method="POST">
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
                            <label class="form-label">Subject</label>
                            <select name="assign_subject_id" id="assign_subject_id" class="form-select" required="">
                                <option selected="">Select Subject</option>
                                
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label class="form-label">Exam Type</label>
                            <select name="exam_type_id" id="exam_type_id" class="form-select" required="">
                                <option selected="" disabled="">Select Exam</option>
                                @foreach ($exam_types as $exam)
                                <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-1">
                            <a id="search" name="search" class="btn btn-success" style="margin-top:29px;">Search</a>
                        </div>
                    </div>

                      <div class="d-none" id="marks-entry">
                        <table class="table mb-0 mt-4 table-striped align-middle " >
                            <thead>
                                <tr>
                                    <th scope="col">ID No</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Father Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Marks</th>
                                </tr>
                            </thead>
                            <tbody id="marks-entry-tr">
                                
                            </tbody>
                           
                        </table>

                        <input type="submit" value="Submit" class="btn btn-success px-5 mt-4">
                      </div>

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
      var assign_subject_id = $('#assign_subject_id').val();
      var exam_type_id = $('#exam_type_id').val();
       $.ajax({
        url: "{{ route('student.marks.getstudents')}}",
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id},
        success: function (data) {
          $('#marks-entry').removeClass('d-none');
          var html = '';
          $.each( data, function(key, v){
            html +=
            '<tr>'+
            '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"> <input type="hidden" name="id_no[]" value="'+v.student.id_no+'"> </td>'+
            '<td>'+v.student.name+'</td>'+
            '<td>'+v.student.fname+'</td>'+
            '<td>'+v.student.gender+'</td>'+
            '<td><input type="text" class="form-control form-control-sm" name="marks[]"></td>'+
            '</tr>';
          });
          html = $('#marks-entry-tr').html(html);
        }
      });
    });
  
  </script>
  
{{-- Get Student Subject --}}
  <script type="text/javascript">
    $(function(){
      $(document).on('change','#class_id',function(){
        var class_id = $('#class_id').val();
        $.ajax({
          url:"{{ route('marks.getsubject') }}",
          type:"GET",
          data:{class_id:class_id},
          success:function(data){
            var html = '<option value="">Select Subject</option>';
            $.each( data, function(key, v) {
              html += '<option value="'+v.id+'">'+v.school_subject.name+'</option>';
            });
            $('#assign_subject_id').html(html);
          }
        });
      });
    });
  </script>
@endsection