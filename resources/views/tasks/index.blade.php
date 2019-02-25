@extends ('layouts.app')
@section('content')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>


</head>
<body>
<table style="width:50%">
<tr>
    <th>Tasks</th>
    <th>pic</th>
    <th>Email</th>
    <th>Phone No</th>
</tr>
@foreach ($tasks as $task)
<tr>
    <td>{{$task -> name}}</td>
    <td>{{$task -> pic}}</td>
    <td>{{$task -> email}}</td>
    <td>{{$task -> phone_no}}</td>
</tr>
@endforeach
</table>
@endsection
