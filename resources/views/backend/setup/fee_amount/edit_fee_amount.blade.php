@extends('admin.admin_master')


@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">Edit Fee Amount</h3>
        </div>

        
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    
                    <form action="{{ route('update.fee.amount',$editData[0]->fee_category_id) }}" method="POST" class="row g-3">
                        @csrf
                        <div class="add_item row">
                        
                        <div class="col-md-12 mb-3 mt-3">
                            <label for="validationTooltip04" class="form-label">Fee Category</label>
                            <select name="fee_category_id" class="form-select" id="validationTooltip04" required="">
                                <option selected="" disabled="">Select Fee Category</option>
                                @foreach ($fee_categories as $category)
                                <option value="{{ $category->id }}"{{ ($editData['0']->fee_category_id == $category->id)? "selected":"" }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        
                            @foreach ($editData as $edit)
                            <div class="delete_whole_extra_item_add row" id="delete_whole_extra_item_add" style="margin-top: 16px;">
                            <div class="col-md-5">
                                <label for="validationTooltip04" class="form-label">Student Class</label>
                                <select name="class_id[]" class="form-select" id="validationTooltip04" required="">
                                    <option selected="" disabled="">Select Fee Category</option>
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}"{{ ($edit->class_id == $class->id)? "selected":"" }}>{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Amount</label>
                                <input type="text" name="amount[]" value="{{ $edit->amount }}" placeholder="Amount" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <div class="d-flex order-actions" style="margin-top: 28px">
                                    <span class="btn btn-success addeventmore"><i class="fadeIn animated bx bx-plus"></i></span>
                                    <span class="btn btn-danger ms-3 removeeventmore"><i class="fadeIn animated bx bx-minus"></i></span>
                                </div>
                            </div>
                            </div>

                            @endforeach
                        
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

<div style="visibility:hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add" style="margin-top: 16px;">

        <div class="row">
                <div class="col-md-5 position-relative">
                    <label for="validationTooltip04" class="form-label">Student Class</label>
                    <select name="class_id[]" class="form-select" id="validationTooltip04" required="">
                        <option selected="" disabled="">Select Fee Category</option>
                        @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-5 position-relative">
                    <label class="form-label">Amount</label>
                    <input type="text" name="amount[]" value="{{ old('name') }}" placeholder="Amount" class="form-control">
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