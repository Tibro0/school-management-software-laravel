@extends('admin.admin_master')

@section('css')
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Employee Salary Details</h3>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <h5 class="border-0 breadcrumb-title"><b>Employee Name:</b> {{ $details->name }}</h5>
					<div class="ms-auto">
						<h5 class="border-0 "><b>Employee Id No:</b> {{ $details->id_no }}</h5>
					</div>
				</div>
                
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#Sl</th>
                                <th>previous_salary</th>
                                <th>increment_salary</th>
                                <th>present_salary</th>
                                <th>effected_salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($salary_log as $key =>$log)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $log->previous_salary }}</td>
                                <td>{{ $log->increment_salary }}</td>
                                <td>{{ $log->present_salary }}</td>
                                <td>{{ date('d-m-Y',strtotime($log->effected_salary)) }}</td>
                            </tr>


                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
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