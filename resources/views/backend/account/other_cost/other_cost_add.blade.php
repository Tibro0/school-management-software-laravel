@extends('admin.admin_master')

@section('admin')
<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Add Other Cost</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form action="{{ route('store.other.cost') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                            {{-- 1th Section --}}
                            <div class="col-md-4">
                                <label class="form-label">Amount</label>
                                <input type="text" name="amount" placeholder="Amount" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Image</label>
                                <input id="image" type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-1">
                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 65px; height: 65px; margin-top: 16px; border: 1px solid #ced4da" alt="">
                            </div>

                            {{-- 2nd Section --}}
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                            </div>

                        <div class="col-12">
                            <input type="submit" value="Submit" class="btn btn-primary">
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