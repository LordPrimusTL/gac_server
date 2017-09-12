@extends('master')

@section('content')
    @include('partials._navbar')
    @include('partials._message')
    <div class="container row">
        <a href="#" class="btn btn-info" id="view-logistics"><span class="glyphicon glyphicon-search"></span> &nbsp;  View Logistics</a>
        <a href="#" class="btn btn-info" id="add-hymn" data-hymn_type="1"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add Hymn</a>
        <h2>Appendix Hymn</h2>
        <table class="table table-responsive">
            <thead>
            <th>Hymn</th>
            <th>English</th>
            <th>Yoruba</th>
            <th>Actions</th>
            </thead>
            <tbody>
            @foreach($app_hymn as $mh)
                <tr>
                    <td>{{$mh->id}}</td>
                    <td>{{$mh->english}}</td>
                    <td>{{$mh->yoruba}}</td>
                    <td>
                        <a href="appendix/{{$mh->id}}" class="btn btn-primary l"><span class="glyphicon glyphicon-search"></span> &nbsp; View </a>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="#" id="edit-hymn" class="btn btn-info"
                               data-id="{{$mh->id}}" data-english="{{$mh->english}}" data-yoruba="{{$mh->yoruba}}" data-hymn_type="1">
                                <span class="glyphicon glyphicon-edit"></span> &nbsp; Edit </a>
                            <a href="#" onclick="getConfirmation({{$mh->id}}, 1)" class="btn btn-danger delete-hymn" data-id="{{$mh->id}}"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete </a>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('modals.edit_hymn')
    @include('modals.logistics')

@endsection
