@extends('layouts.base_layout')
@section('content')
<html>
<head>
    <style>
        .fa-plus , .fa-pencil-alt{
            margin-right: 10px;
        }
    </style>
</head>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-plus"></i>New Note</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
        <form method="post" action="{{route('Notes.store')}}">
        @csrf
            <div class="form-group">
                <i class="fas fa-pencil-alt prefix"></i>
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group shadow-textarea">
                <i class="fas fa-pencil-alt prefix"></i>
                <label for="content">Content</label>
                <textarea class="form-control z-depth-1" name="content" rows="3" placeholder="Write your Note..."></textarea>
            </div>
            <div class="form-action">
                <input type="submit" name="store" value="Store" class="btn btn-primary">
                <input type="reset" name="cancel" value="Cancel" class="btn btn-default">
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</html>
@endsection