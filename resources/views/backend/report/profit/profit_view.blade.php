@extends('admin.admin_master')

@section('css')
 
@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Monthly/Yearly Profit</h4>
                <hr class="mt-3 mb-3">
                    <div class="row">

                        <div class="col-md-4">
                            <label class="form-label">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control">
                        </div>


                        <div class="col-md-4">
                            <a id="search" name="search" class="btn btn-success px-5" style="margin-top:29px;">Search</a>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="DocumentResults">
                            <script id="document-template" type="text/x-handlebars-template">
                            <table class="table mb-0 mt-4 table-striped align-middle">
                                <thead>
                                    <tr>
                                   @{{{thsource}}}
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                     <tr>
                                         @{{{tdsource}}}	
                                     </tr>
                                     
                                 </tbody>
                            </table>
                        </script>
                        </div>
                    </div>

                
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $(document).on('click','#search',function(){
      var start_date = $('#start_date').val();
      var end_date = $('#end_date').val();
       $.ajax({
        url: "{{ route('report.profit.datewais.get')}}",
        type: "get",
        data: {'start_date':start_date,'end_date':end_date},
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
@endsection