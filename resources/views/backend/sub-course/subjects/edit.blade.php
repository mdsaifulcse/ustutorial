<div class="modal fade" id="subCourseModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(array('route' => ['sub-course.update','edit-sub-course'],'class'=>'form-horizontal','method'=>'PUT')) !!}
            <div class="modal-header">
                <h4 class="modal-title">Edit Sub Course</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3"> Sub Course</label>
                    <div class="col-md-8 col-sm-8">
                        <input type="text" class="form-control" name="sub_course" id="sub_course" placeholder="Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3"> Courser Fee</label>
                    <div class="col-md-8 col-sm-8">
                        <input type="number" step="any" class="form-control" name="amount" id="amount" placeholder="Fee amount">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3" title="Payment Milestone 1 ">Payment MS 1</label>
                    <div class="col-md-8 col-sm-8">
                        <input type="number" step="any" class="form-control" name="first_payment" id="firstPayment" value="{{old('first_payment')}}" placeholder="Minimum amount for first payment">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3"> Status</label>
                    <div class="col-md-8 col-sm-8">
                        {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['id'=>'status','class'=>'form-control','required'=>true])}}
                        <input type="hidden" name="id" id="editId">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
            </div>
            {!! Form::close(); !!}
        </div>
    </div>
</div>