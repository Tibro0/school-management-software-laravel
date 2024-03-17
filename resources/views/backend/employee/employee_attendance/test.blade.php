<div class="table-responsive">
    <table class="table mb-0">
        <thead class="table-light">
            <tr>
                <th>#Sl</th>
                <th>Name</th>
                <th>ID No</th>
                <th>Date</th>
                <th>Attend Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allData as $key =>$value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value['user']['name'] }}</td>
                <td>{{ $value['user']['id_no'] }}</td>
                <td>{{ date('d-m-Y',strtotime($value->date)) }}</td>
                <td>{{ $value->attend_status }}</td>
                <td>
                    <div class="d-flex order-actions">
                        <a title="Edit" href="{{ route('employee.leave.edit', $value->id) }}"><i class="bx bxs-edit"></i></a>
                        <a title="Delete" href="{{ route('employee.leave.delete', $value->id) }}" class="ms-3" id="delete"><i class="bx bxs-trash"></i></a>
                        
                    </div>
                </td>
            </tr>


            @endforeach
            
        </tbody>
    </table>
</div>