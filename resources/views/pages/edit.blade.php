@extends('master')

@section('title', 'Edit task')
    
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Task</h1>
                </div>
                <div class="card-body">
                    
                    <form action="{{asset('/task/' . $task->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="tasktitle" class="form-control"  value="{{$task->title}}" >
                      </div>
                      <div class="form-group pt-3">
                        <textarea type="text" name="taskdescription" class="form-control " rows="3">{{$task->description}}</textarea>
                      </div>  
                      <div class="form-group text-center pt-3">                  
                      <button type="submit" class="btn btn-success" style="width: 40%">Update </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection