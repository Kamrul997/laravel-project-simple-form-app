@extends('layouts.app')

@section('mytitle', 'Task Details')

@section('bodyContent')

<h1 class="text-center mb-4">Task Details</h1>

<div class="card">
  <div class="card-body">
    <table class="mt-3 table table">
        <tbody>
            
            <tr>
                <td class="col-2">Title</td>
                <td class="col-1">:</td>
                <td class="col-9">{{$task->title}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>
                <td>
                {{$task->description}}
                </td>
            </tr>
            <tr>
                <td>Start Date</td>
                <td>:</td>
                <td>{{$task->start_date}}</td>
            </tr>
            <tr>
                <td>Deadline</td>
                <td>:</td>
                <td>{{$task->deadline}}</td>
            </tr>
            
        </tbody>
    </table>
    <a href="{{route('homePage')}}" class="btn btn-primary">Go To Home</a>
  </div>
</div>

@endsection