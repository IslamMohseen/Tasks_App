@extends('master')

@section('title', 'Create a new task')
    
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Create a new task</h1>
                </div>
                <div class="card-body">
                    
                    <form action="{{asset('create')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="tasktitle" class="form-control"  placeholder="Enter Task Title" value="{{old('tasktitle')}}" required>
                      </div>
                      <div class="form-group pt-3">
                        <textarea type="text" name="taskdescription" class="form-control " placeholder="Enter Task Description" value="{{old('taskdescription')}}" required rows="3"></textarea>
                      </div>  
                      <div class="form-group text-center pt-3">                  
                      <button type="submit" class="btn btn-success" style="width: 40%">Create </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection