@extends('admin.admin_master')

@section('css')
{{-- Datatable CSS --}}
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Student Fee</h4>
                <hr class="mt-3 mb-3">
                
                
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
                            <label class="form-label">Fee Category</label>
                            <select name="fee_category_id" id="fee_category_id" class="form-select" required="">
                                <option selected="" disabled="">Select Fee Category</option>
                                @foreach ($fee_categories as $fee)
                                <option value="{{ $fee->id }}">{{ $fee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>

                        <div class="col-md-1">
                            <a id="search" name="search" class="btn btn-success" style="margin-top:29px;">Search</a>
                        </div>
                    </div>

                     
                    <div class="col-md-12">
                        <div id="DocumentResults">
                            <script id="document-template" type="text/x-handlebars-template">
                                <form action="{{ route('account.fee.store') }}" method="POST">
                                @csrf
                                    <table class="table mb-0 mt-4 table-striped align-middle" id="example2">
                                        <thead>
                                            <tr>
                                        @{{{thsource}}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @{{#each this}}
                                            <tr>
                                                @{{{tdsource}}}	
                                            </tr>
                                            @{{/each}}
                                        </tbody>
                                    </table>
                                <input type="submit" value="Submit" class="btn btn-primary mt-4">
                            </form>
                        </script>
                        </div>
                    </div>
                      

                
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
{{-- Handlebars JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $(document).on('click','#search',function(){
      var year_id = $('#year_id').val();
      var class_id = $('#class_id').val();
      var fee_category_id = $('#fee_category_id').val();
      var date = $('#date').val();
       $.ajax({
        url: "{{ route('account.fee.getstudent')}}",
        type: "get",
        data: {'year_id':year_id,'class_id':class_id,'fee_category_id':fee_category_id,'date':date},
        beforeSend: function() {       
        },
        success: function (data) {
          var source = $("#document-template").html();
          var template = Handlebars.compile(source);
          var html = template(data);
          $('#DocumentResults').html(html);
          $('[data-toggle="tooltip"]').tooltip();
        }
      });
    });
  
  </script>
{{-- Datatable JS --}}
<script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
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