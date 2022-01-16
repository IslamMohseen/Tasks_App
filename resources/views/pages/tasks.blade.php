@extends('master')

@section('title', 'All Tasks')
    
@section('content')
<div class="container">
    <div class="row pt-3 justify-content-center">
        <div class="card" style="width: 50%">
            <div class="card-header text-center">
                <h1>All Tasks</h1>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success')}}
                </div>
            @endif
            <div class="card-body">
                <ul class="list-group">
                    @forelse ($tasks as $task)
                        <li class="list-group-item text-muted">
                            {{$task->title}}
                        <span style="float:right">
                            <a style="color:rgb(127, 202, 29);padding-left:6px;" href="{{ asset('task/' . $task->id)}}"><i class="fas fa-eye"></i></a>
                            <a style="color:rgb(19, 201, 176);padding-left:6px;" href="{{asset('/task/' . $task->id . '/edit')}}"><i class="far fa-edit"></i></a>
                            @if (!$task->completed)                                
                            <a style="color:rgb(169, 49, 206);padding-left:6px;" href="{{asset('/task/' . $task->id . '/complete')}}"><i class="far fa-check-square"></i></a>
                            @endif
                            <a style="color:rgb(243, 11, 11);padding-left:6px;" href="{{asset('/task/' . $task->id . '/delete')}}"><i class="far fa-trash-alt"></i></a>
                        </span>
                        </li> 
                        @empty
                            <p class="text-center">No Taks </p>                  
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
