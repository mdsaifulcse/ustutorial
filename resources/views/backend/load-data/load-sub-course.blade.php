@if(count($subCourses)>0)


    <div class="form-group col-lg-6 col-md-6">
        <span class="control-label">Course Season</span>
        {{Form::select('season_id',$seasons,[],['class'=>'form-control','placeholder'=>'-Select Season-','required'=>true])}}

        @if ($errors->has('season_id'))
            <span class="help-block">
                <strong>{{ $errors->first('season_id') }}</strong>
            </span>
        @endif
    </div>


    <div class="form-group col-lg-6 col-md-6">
        <span class="control-label">Sub Courses</span>
        {{Form::select('sub_course_id',$subCourses,[],['id'=>'subCourseId','class'=>'form-control','placeholder'=>'-Select Sub Course-','required'=>true])}}

        @if ($errors->has('sub_course_id'))
            <span class="help-block">
                        <strong>{{ $errors->first('sub_course_id') }}</strong>
                    </span>
        @endif
    </div>

    @else
    {{Form::select('sub_course_id',[],[],['class'=>'form-control','placeholder'=>'-No Sub Course Data-','required'=>true])}}
@endif


    <script src="{{asset('public/client/js/jquery.min.js')}}"></script>
    <script>
        $('#subCourseId').on('change',function (e) { // branch wise Courser load --------------
            var branchId=$('#branchId').val()
            var courseId=$('#loadSubCourse').val()
            var subCourseId=$(this).val()

            //return console.log(subCourseId+'=='+branchId)
            //$('#payableAmount').val(4541)

            $('#loadBatchesData').empty().load('{{URL::to("/load-batches")}}/'+branchId +'/'+courseId+'/'+subCourseId)
        })
    </script>