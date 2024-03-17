@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Edit Employee</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('update.employee.registration',$editData->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf

                            {{-- 1st Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Employee Name</label>
                                <input type="text" name="name" value="{{ $editData->name }}" placeholder="Student Name" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Father's Name</label>
                                <input type="text" name="fname" value="{{ $editData->fname }}" placeholder="Father's Name" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Mother's Name</label>
                                <input type="text" name="mname" value="{{ $editData->mname }}" placeholder="Mother's Name" class="form-control" required>
                            </div>

                            {{-- 2nd Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" name="mobile" value="{{ $editData->mobile }}" placeholder="Mobile Number" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="{{ $editData->address }}" placeholder="Address" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select" required="">
                                    <option selected="" disabled="">Select Gender</option>
                                    <option value="Male"{{ ($editData->gender == 'Male')?'selected':'' }}>Male</option>
                                    <option value="Female"{{ ($editData->gender == 'Female')?'selected':'' }}>Female</option>
                                </select>
                            </div>

                            {{-- 3rd Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Religion</label>
                                <select name="religion" class="form-select" required="">
                                    <option selected="" disabled="">Select Religion</option>
                                    <option value="Islam"{{ ($editData->religion == 'Islam')?'selected':'' }}>Islam</option>
                                    <option value="Hindu"{{ ($editData->religion == 'Hindu')?'selected':'' }}>Hindu</option>
                                    <option value="Christan"{{ ($editData->religion == 'Christan')?'selected':'' }}>Christan</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Date Of Birth</label>
                                <input type="date" name="dob" value="{{ $editData->dob }}" placeholder="Date Of Birth" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Designation</label>
                                <select name="designation_id" class="form-select" required="">
                                    <option selected="" disabled="">Select Designation</option>
                                    @foreach ($designation as $desi)
                                    <option value="{{ $desi->id }}"{{ ($editData->designation_id == $desi->id)?'selected':'' }}>{{ $desi->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if (is_null($editData))
                            {{-- 4th Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Salary</label>
                                <input type="text" name="salary" value="{{ $editData->salary }}" placeholder="Salary" class="form-control" required>
                            </div>
                            @endif

                            @if (is_null($editData))
                            <div class="col-md-4">
                                <label class="form-label">Joining Date</label>
                                <input type="date" name="join_date" value="{{ $editData->join_date }}" placeholder="Joining Date" class="form-control" required>
                            </div>
                            @endif

                            <div class="col-md-3">
                                <label class="form-label">Profile Image</label>
                                <input id="image" type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-1">
                                <img id="showImage" src="{{ (!empty($editData->image))? url('upload/employee_images/' . $editData->image): url('upload/no_image.jpg') }}" style="width: 65px; height: 65px; margin-top: 16px; border: 1px solid #ced4da" alt="">
                            </div>


                        <div class="col-12">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>
@endsection