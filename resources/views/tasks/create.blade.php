@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action ="{{url('tasks')}}" method ="POST">
                    <div class="form-group">
                        <label> ttask name </label>
                        <input type="text" name="name" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label> pic </label>
                        <input type="text" name="pic" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label> email </label>
                        <input type="text" name="email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label> no phone </label>
                        <input type="text" name="phone_no" class="form-control"> 
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btm-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
