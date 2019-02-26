@extends ('layouts.app')
@section('content')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>


    <div class="container">
    <table style="width:50%"  class="table table-bordered">
    <tr>
        <th>Tasks</th>
        <th>pic</th>
        <th>Email</th>
        <th>Phone No</th>
        <th></th>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{$task -> name}}</td>
        <td>{{$task -> pic}}</td>
        <td>{{$task -> email}}</td>
        <td>{{$task -> phone_no}}</td>
        <td>
        <form action="{{action('TasksController@destroy',$task['id'])}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-success float-right" >Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
    </div>
@endsection
