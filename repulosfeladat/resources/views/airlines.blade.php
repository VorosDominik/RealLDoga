@foreach ($airlines as $airlines)
<form action="/airlines{{$task->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$airlines->title}}">
    </div>
</form>
@endforeach