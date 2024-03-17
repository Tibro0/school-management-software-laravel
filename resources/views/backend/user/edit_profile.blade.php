@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Manage Profile</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('profile.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip01" class="form-label">User name</label>
                            <input type="text" name="name" value="{{ $editData->name }}" placeholder="User name" class="form-control" id="validationTooltip01"  required="">
                        </div>

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip01" class="form-label">User Email</label>
                            <input type="email" name="email" value="{{ $editData->email }}" placeholder="User Email" class="form-control" id="validationTooltip01"  required="">
                        </div>


                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip01" class="form-label">User Mobile</label>
                            <input type="text" name="mobile" value="{{ $editData->mobile }}" placeholder="User Mobile" class="form-control" id="validationTooltip01"  required="">
                        </div>

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip01" class="form-label">User Address</label>
                            <input type="text" name="address" value="{{ $editData->address }}" placeholder="User Address" class="form-control" id="validationTooltip01"  required="">
                        </div>

                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip04" class="form-label">User Gender</label>
                            <select name="gender" class="form-select" id="validationTooltip04" required="">
                                <option selected="" disabled="">Select Gender</option>
                                <option value="Male"{{ ($editData->gender == "Male" ? "selected":"") }}>Male</option>
                                <option value="Female" {{ ($editData->gender == "Female" ? "selected":"") }} >Female</option>
                            </select>
                        </div>

                        <div class="col-md-6 position-relative">
                        <div class="row">
                            <div class="col-sm-10">
                                    <label for="validationTooltip01" class="form-label">Profile Image</label>
                                        <input id="image" type="file" name="image" class="form-control">
                                    <div class="invalid-feedback">Example invalid form file feedback</div>
                                </div>
                            
                                <div class="col-sm-2">
                                    <img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/' . $user->image): url('upload/no_image.jpg') }}" style="width: 65px; height: 65px; margin-top: 16px; border: 1px solid #ced4da" alt="">
                                </div>
        
                            </div>
                        </div>
                        


                        <div class="col-12">
                            <input type="submit" value="Update" class="btn btn-primary px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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