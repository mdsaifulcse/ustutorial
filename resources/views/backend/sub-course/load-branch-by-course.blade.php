@if(count($branches)>0)
    <?php $i=1?>
    @foreach($branches as $branch)
        <label>
             <input type="checkbox" name="branch_id[]" value="{{$branch->id}}" >{{$branch->name}} &nbsp; &nbsp;
        </label>
    @endforeach

@endif
