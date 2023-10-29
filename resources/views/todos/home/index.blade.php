@extends('layouts.app')

@section('mytitle', 'FormApp')

@section('bodyContent')

<div class="d-flex justify-content-between mt-3">
    <h2>All tasks</h2>
    <a href="{{route('createPage')}}" class="btn btn-outline-primary">Add New</a>
</div>
<table class="mt-3 table table-bordered">
  <thead>
    <tr>
      <th class="col-1">#</th>
      <th class="col">Title</th>
      <th class="col">Description</th>
      <th class="col">StartDate</th>
      <th class="col">Deadline</th>
      <th class="col">Maping</th>
      <th class="col">Priority</th>
      <th class="col">User</th>
      <th class="col">Remarks</th>
      <th class="col">Links</th>
      <th class="col">File</th>
      <th class="col-2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
      <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->task_title}}</td>
        <td>{{$task->task_description}}</td>
        <td>{{$task->task_startDate}}</td>
        <td>{{$task->task_deadline}}</td>
        <td>{{$task->select_maping}}</td>
        <td>{{$task->select_priority}}</td>
        <td>{{$task->select_user}}</td>
        <td>{{$task->task_remarks}}</td>
        <td>{{$task->task_links}}</td>
        <td><img src="{{asset('files/' . $task->task_file)}}" alt="{{$task->task_file}}" style="height:40px; width:40px; border-radius:50%;"></td>
        <td>
          <div class="d-flex justify-content-between">
            <!-- <a href="{{route('detailsPage',$task->id)}}" type="submit" class="btn btn-primary btn-small">Details</a> -->
            <a href="{{route('editPage',$task->id)}}" type="submit" class="btn btn-success btn-small">Edit</a>
            <a href="{{route('deletePage',$task->id)}}" type="submit" class="btn btn-danger btn-small">Delete</a>
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<div class="row">
  {{$tasks->Links()}}
</div>



@endsection