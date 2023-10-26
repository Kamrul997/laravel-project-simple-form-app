@extends('layouts.app')

@section('mytitle', 'Create New Task')

@section('bodyContent')

<h2 class = "text-center">Create New Task</h2>
<form class="mt-3 w-70 shadow p-5" method="POST" action="{{route('createNewTaskPage')}}" >
@csrf
  <div class="form-group my-3">
    <label class = "mb-2">Title</label>
    <input type="text" class="form-control" name="taskTitle" placeholder="Title">
    <div class="text-danger">
      @error('taskTitle')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Description</label>
    <textarea class="form-control" name="taskDescription" placeholder="Description" style="resize: none; height:150px"></textarea>
    <div class="text-danger">
      @error('taskDescription')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Start Time and Date</label>
    <input type="datetime-local" class="form-control" name="taskStartDate">
    <div class="text-danger">
      @error('taskStartDate')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">End Time and Date</label>
    <input type="datetime-local" class="form-control" name="taskDeadline">
    <div class="text-danger">
      @error('taskDeadline')
        {{$message}}
      @enderror
    </div>
  </div>

  <label class = "mb-2 mt-2">Select Mapping</label>
  <select class="form-select">
    <option >select</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  
  <label class = "mb-2 mt-2">Select Priority</label>
  <select class="form-select">
    <option >select</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
 
  <label class = "mb-2 mt-2">Assign User</label>
  <select class="form-select">
    <option >select</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <div class="form-group my-3">
    <label class = "mb-2">Remarks</label>
    <input type="text" class="form-control" name="taskRemarks" placeholder="Remarks">
    <div class="text-danger">
      @error('taskRemarks')
        {{$message}}
      @enderror
    </div>
  </div>
  
  <div class="form-group my-3">
    <label class = "mb-2">Links</label>
    <input type="text" class="form-control" name="taskLinks" placeholder="Links">
    <div class="text-danger">
      @error('taskLinks')
        {{$message}}
      @enderror
    </div>
  </div>
  
  <label class = "">File</label>
  <div class="input-group my-3">
    <input type="file" class="form-control" name="taskFile">
    <div class="text-danger">
      @error('taskFile')
        {{$message}}
      @enderror
    </div>
  </div>

  <input type="submit" class="btn btn-primary mt-4" value="Create Task">
</form>


@endsection