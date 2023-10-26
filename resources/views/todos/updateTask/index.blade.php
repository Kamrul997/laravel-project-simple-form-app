@extends('layouts.app')

@section('mytitle', 'Update Task')

@section('bodyContent')

<h2 class = "text-center">Update Task</h2>
<form class="mt-3" method="POST" action="{{route('updatePage')}}" >
@csrf
    <input type="text" name="id" hidden value="{{$task->id}}">
  <div class="form-group my-2">
    <label class = "mb-2">Title:</label>
    <input type="text" class="form-control" name="taskTitle" placeholder="Title" value="{{$task->title}}">
    <div class="text-danger">
      @error('task')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Description:</label>
    <textarea class="form-control" row="10" name="taskDescription" placeholder="Description">{{$task->description}}</textarea>
    <div class="text-danger">
      @error('task')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Start Date:</label>
    <input type="date" class="form-control" name="taskStartDate" value="{{$task->start_date}}">
    <div class="text-danger">
      @error('task')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Deadline:</label>
    <input type="date" class="form-control" name="taskDeadline" value="{{$task->deadline}}">
    <div class="text-danger">
      @error('task')
        {{$message}}
      @enderror
    </div>
  </div>
 
  <input type="submit" class="btn btn-primary mt-2" value="Update Task">
</form>


@endsection