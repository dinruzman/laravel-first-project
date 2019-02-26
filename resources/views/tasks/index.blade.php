@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                <a href ="{{url('tasks/create')}}" class="btn btn-success float-right" >Create new tasks </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Tasks</th>
                        <th>pic</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->name}}</td>
                        <td>{{$task->pic}}</td>
                        <td>{{$task->email}}</td>
                        <td>{{$task->phone_no}}</td>
                        <td>
                        <form action="{{url('tasks/'.$task->id)}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger float-right" >Delete</button>
                        </form>
                        </td>
                        <td>
                            <a href="{{url('tasks/'.$task->id.'/edit')}}" class="btn btn-warning float-right">Edit</a>
                        </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
