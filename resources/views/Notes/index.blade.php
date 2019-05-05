@extends('layouts.base_layout')
<html>
<head>
    <style>
        .fa-plus , .fa-sticky-note{
            margin-right: 10px;
        }
    </style>
</head>
<body>
@section('content')
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-sticky-note"></i>All Notes</h3>
            </div>
            <div class="panel-body">
                <a class="btn btn-primary" href="{{route('Notes.create')}}" role="button"><i class="fa fa-plus"></i>Add Note</a><br><br>
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Submitted at-Date</th>
                        <th>Submitted at-Hour</th>
                    </tr>
                    @forelse($notes as $note)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$note->title}}</td>
                            <td>{{$note->content}}</td>
                            <td>{{\Carbon\Carbon::parse($note->created_at)->format('y-m-d D')}}</td>
                            <td>{{\Carbon\Carbon::parse($note->created_at)->format('h:m')}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">There is no notes</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
