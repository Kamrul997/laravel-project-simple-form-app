@extends('layouts.app')

@section('mytitle', 'Update Task')

@section('bodyContent')

<h2 class = "text-center">Update Task</h2>
<form class="mt-3" method="POST" action="{{route('updatePage')}}" enctype="multipart/form-data">
@csrf
<input hidden type="text" class="form-control" value="{{$task->id}}" name="id">
  <div class="form-group my-3">
    <label class = "mb-2">Title</label>
    <input type="text" class="form-control" value="{{$task->task_title}}" name="taskTitle" placeholder="Title">
    <div class="text-danger">
      @error('taskTitle')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Description</label>
    <textarea class="form-control" name="taskDescription" placeholder="Description" style="resize: none; height:150px">{{$task->task_description}}</textarea>
    <div class="text-danger">
      @error('taskDescription')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Start Time and Date</label>
    <input type="datetime-local" class="form-control" value="{{$task->task_startDate}}" name="taskStartDate">
    <div class="text-danger">
      @error('taskStartDate')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">End Time and Date</label>
    <input type="datetime-local" class="form-control" value="{{$task->task_deadline}}" name="taskDeadline">
    <div class="text-danger">
      @error('taskDeadline')
        {{$message}}
      @enderror
    </div>
  </div>

  <label class = "mb-2 mt-2">Select Mapping</label>
  <select  name="selectMaping" class="form-select">
    <option value="">select</option>
    <option value="1" {{$task->select_maping == 1 ? 'selected': ''}}>One</option>
    <option value="2" {{$task->select_maping == 2 ? 'selected': ''}}>Two</option>
    <option value="3" {{$task->select_maping == 3 ? 'selected': ''}}>Three</option>
  </select>
  <div class="text-danger">
      @error('selectMaping')
        {{$message}}
      @enderror
  </div>
  
  <label class = "mb-2 mt-2">Select Priority</label>
  <select name="selectPriority" class="form-select">
    <option value="">select</option>
    <option value="1" {{$task->select_priority == 1 ? 'selected': ''}}>One</option>
    <option value="2" {{$task->select_priority == 2 ? 'selected': ''}}>Two</option>
    <option value="3" {{$task->select_priority == 3 ? 'selected': ''}}>Three</option>
  </select>
  <div class="text-danger">
      @error('selectPriority')
        {{$message}}
      @enderror
  </div>
 
  <label class = "mb-2 mt-2">Assign User</label>
  <select name="selectUser" class="form-select">
    <option value="">select</option>
    <option value="1" {{$task->select_user == 1 ? 'selected': ''}}>One</option>
    <option value="2" {{$task->select_user == 2 ? 'selected': ''}}>Two</option>
    <option value="3" {{$task->select_user == 3 ? 'selected': ''}}>Three</option>
  </select>
  <div class="text-danger">
      @error('selectUser')
        {{$message}}
      @enderror
  </div>

  <div class="form-group my-3">
    <label class = "mb-2">Remarks</label>
    <input type="text" class="form-control" value="{{$task->task_remarks}}" name="taskRemarks" placeholder="Remarks">
    <div class="text-danger">
      @error('taskRemarks')
        {{$message}}
      @enderror
    </div>
  </div>
  
  <div class="form-group my-3">
    <label class = "mb-2">Links</label>
    <input type="text" class="form-control" value="{{$task->task_links}}" name="taskLinks" placeholder="Links">
    <div class="text-danger">
      @error('taskLinks')
        {{$message}}
      @enderror
    </div>
  </div>
  
  <label class = "">File</label>
  <div class="form-group my-3">
    <input type="file" class="form-control" value="{{$task->task_file}}" name="taskFile">
    <div class="text-danger">
      @error('taskFile')
        {{$message}}
      @enderror
    </div>
  </div>
  <p name= "oldTask">{{$task->task_file}}</p>
  <input hidden type="text" name= "oldTask" value="{{$task->task_file}}"></input>

  <input type="submit" class="btn btn-primary mt-4" value="Update Task">
</form>


@endsection