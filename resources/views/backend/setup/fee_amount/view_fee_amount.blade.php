@extends('admin.admin_master')

@section('css')
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Student Fee Amount List</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                    </div>
                  <div class="ms-auto">
                    <a href="{{ route('fee.amount.add') }}" class="btn btn-primary px-5 mt-2">Add Fee Amount</a>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#Sl</th>
                                <th>Fee Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key =>$amount)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $amount['fee_category']['name'] }}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('fee.amount.edit', $amount->fee_category_id) }}"><i class="bx bxs-edit"></i></a>
                                        <a href="{{ route('fee.amount.details', $amount->fee_category_id) }}" class="ms-3"><i class="lni lni-eye"></i></a>
                                        
                                    </div>
                                </td>
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