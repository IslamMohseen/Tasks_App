@extends('master')

@section('title', 'Task - ' . $tasks->id)
    
@section('content')
<div class="container">
    <h1 class="mt-5 text-center">{{$tasks->title}}</h1>
    <div class="row t-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Details</span>
                    <span style="float:right" class="badge bg-warning text-dark">
                        {{ boolval($tasks->completed) ? 'Completed' : 'Non Completed'}}
                    </span>
                </div>
                <div class="card-body">
                    {{ $tasks->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection