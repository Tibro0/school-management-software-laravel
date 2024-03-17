@extends('admin.admin_master')

@section('css')
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3"><span class="fw-bold">Assign Subject :</span> {{ $detailsData['0']['student_class']['name'] }}</h3>
        </div>

        <div class="card">
            <div class="card-body">
                {{-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <h3 class="border border-0 pe-3">Fee Category : {{ $detailsData['0']['fee_category']['name'] }}</h3>
                </div> --}}
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                    </div>
                  <div class="ms-auto">
                    <a href="{{ route('assign.subject.add') }}" class="btn btn-primary px-5 mt-2">Add Assign Subject</a>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#Sl</th>
                                <th>Subject</th>
                                <th>Full Mark</th>
                                <th>Pass Mark</th>
                                <th>Subjective Mark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detailsData as $key =>$detail)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $detail['school_subject']['name'] }}</td>
                                <td>{{ $detail->full_mark }}</td>
                                <td>{{ $detail->pass_mark }}</td>
                                <td>{{ $detail->subjective_mark }}</td>
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