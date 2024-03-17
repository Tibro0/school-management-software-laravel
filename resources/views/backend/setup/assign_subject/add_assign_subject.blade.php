@extends('admin.admin_master')


@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Edit Assign Subject</h3>
        </div>

        
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    
                    <form action="{{ route('store.assign.subject') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="add_item row">
                        
                        <div class="col-md-12 mb-3 mt-3">
                            <label for="validationTooltip04" class="form-label">Class Name</label>
                            <select name="class_id" class="form-select" id="validationTooltip04" required="">
                                <option selected="" disabled="">Select Class</option>
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        
                        
                            <div class="col-md-4">
                                <label for="validationTooltip04" class="form-label">Student Subject</label>
                                <select name="subject_id[]" class="form-select" id="validationTooltip04" required="">
                                    <option selected="" disabled="">Select Subject</option>
                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Full Mark</label>
                                <input type="text" name="full_mark[]" value="{{ old('full_mark') }}" placeholder="Full Mark" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Pass Mark</label>
                                <input type="text" name="pass_mark[]" value="{{ old('pass_mark') }}" placeholder="Pass Mark" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <label class="form-label">Subjective Mark</label>
                                <input type="text" name="subjective_mark[]" value="{{ old('subjective_mark') }}" placeholder="Subjective Mark" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <div class="d-flex order-actions" style="margin-top: 28px">
                                    <span class="btn btn-success addeventmore"><i class="fadeIn animated bx bx-plus"></i></span>
                                </div>
                            </div>
                        
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

<div style="visibility:hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add" style="margin-top: 16px;">

        <div class="row">
            <div class="col-md-4">
                <label for="validationTooltip04" class="form-label">Student Subject</label>
                <select name="subject_id[]" class="form-select" id="validationTooltip04" required="">
                    <option selected="" disabled="">Select Subject</option>
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <label class="form-label">Full Mark</label>
                <input type="text" name="full_mark[]" value="{{ old('full_mark') }}" placeholder="Full Mark" class="form-control">
            </div>

            <div class="col-md-2">
                <label class="form-label">Pass Mark</label>
                <input type="text" name="pass_mark[]" value="{{ old('pass_mark') }}" placeholder="Pass Mark" class="form-control">
            </div>

            <div class="col-md-2">
                <label class="form-label">Subjective Mark</label>
                <input type="text" name="subjective_mark[]" value="{{ old('subjective_mark') }}" placeholder="Subjective Mark" class="form-control">
            </div>

                <div class="col-md-2">
                    <div class="d-flex order-actions" style="margin-top: 28px">
                        <span class="btn btn-success addeventmore"><i class="fadeIn animated bx bx-plus"></i></span>
                        <span class="btn btn-danger ms-3 removeeventmore"><i class="fadeIn animated bx bx-minus"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        var counter = 0;
        $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add = $('#whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click",'.removeeventmore',function(event){
            $(this).closest(".delete_whole_extra_item_add").remove();
            counter -= 1
        });

    });
</script>
@endsection