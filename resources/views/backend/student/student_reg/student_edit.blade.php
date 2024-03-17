@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Edit Student</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('update.student.registration',$editData->student_id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $editData->id }}">
                            {{-- 1st Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Student Name</label>
                                <input type="text" name="name" value="{{ $editData['student']['name'] }}" placeholder="Student Name" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Father's Name</label>
                                <input type="text" name="fname" value="{{ $editData['student']['fname'] }}" placeholder="Father's Name" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Mother's Name</label>
                                <input type="text" name="mname" value="{{ $editData['student']['mname'] }}" placeholder="Mother's Name" class="form-control" required>
                            </div>

                            {{-- 2nd Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" name="mobile" value="{{ $editData['student']['mobile'] }}" placeholder="Mobile Number" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="{{ $editData['student']['address'] }}" placeholder="Address" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select" required="">
                                    <option selected="" disabled="">Select Gender</option>
                                    <option value="Male"{{ ($editData['student']['gender'] == 'Male')? 'selected':''}}>Male</option>
                                    <option value="Female"{{ ($editData['student']['gender'] == 'Female')? 'selected':''}}>Female</option>
                                </select>
                            </div>

                            {{-- 3rd Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Religion</label>
                                <select name="religion" class="form-select" required="">
                                    <option selected="" disabled="">Select Religion</option>
                                    <option value="Islam"{{ ($editData['student']['religion'] == 'Islam')? 'selected':''}}>Islam</option>
                                    <option value="Hindu"{{ ($editData['student']['religion'] == 'Hindu')? 'selected':''}}>Hindu</option>
                                    <option value="Christan"{{ ($editData['student']['religion'] == 'Christan')? 'selected':''}}>Christan</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Date Of Birth</label>
                                <input type="date" name="dob" value="{{ $editData['student']['dob'] }}" placeholder="Date Of Birth" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Discount</label>
                                <input type="text" name="discount" value="{{ $editData['discount']['discount'] }}" placeholder="Discount" class="form-control" required>
                            </div>

                            {{-- 4th Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Year</label>
                                <select name="year_id" class="form-select" required="">
                                    <option selected="" disabled="">Select Year</option>
                                    @foreach ($years as $year)
                                    <option value="{{ $year->id }}"{{ ($editData->year_id == $year->id)? 'selected':''}}>{{ $year->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Class</label>
                                <select name="class_id" class="form-select" required="">
                                    <option selected="" disabled="">Select Class</option>
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}"{{ ($editData->class_id == $class->id)? 'selected':''}}>{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Group</label>
                                <select name="group_id" class="form-select" required="">
                                    <option selected="" disabled="">Select Group</option>
                                    @foreach ($groups as $group)
                                    <option value="{{ $group->id }}"{{ ($editData->group_id == $group->id)? 'selected':''}}>{{ $group->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- 5th Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Shift</label>
                                <select name="shift_id" class="form-select" required="">
                                    <option selected="" disabled="">Select Shift</option>
                                    @foreach ($shifts as $shift)
                                    <option value="{{ $shift->id }}"{{ ($editData->shift_id == $shift->id)? 'selected':''}}>{{ $shift->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Profile Image</label>
                                <input id="image" type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <img id="showImage" src="{{ (!empty($editData['student']['image']))? url('upload/student_images/' . $editData['student']['image']): url('upload/no_image.jpg') }}" style="width: 65px; height: 65px; margin-top: 16px; border: 1px solid #ced4da" alt="">
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