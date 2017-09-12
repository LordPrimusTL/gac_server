@extends('master')

@section('content')
    @include('partials._navbar')
    @include('partials._message')
    <div class="container row">
        <a href="#" class="btn btn-info" id="view-logistics"><span class="glyphicon glyphicon-search"></span> &nbsp;  View Logistics</a>
        <a href="#" class="btn btn-info" id="add-hymn" data-hymn_type="0"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add Hymn</a>
        <h2>Main Hymn</h2>
        <table class=" col-lg-12 table table-responsive ">
            <thead>
            <th class="col-lg-1 col-sm-1 col-xs-1">Hymn</th>
            <th class="col-lg-2 col-sm-1 col-xs-1">English</th>
            <th class="col-lg-2 col-sm-1 col-xs-1">Yoruba</th>
            <th class="col-lg-1 col-sm-1 col-xs-1">No. of Verses</th>
            <th class="col-lg-1 col-sm-1 col-xs-1">Verse Count</th>
            <th class="col-lg-1 col-sm-1 col-xs-1">Completed</th>
            <th class="col-lg-4 col-sm-4 col-xs-4">Actions</th>
            </thead>
            <tbody>
            @foreach($main_hymn as $mh)
                <tr>
                    <td>{{$mh->hymn_id}}</td>
                    <td>{{$mh->english}}</td>
                    <td>{{$mh->yoruba}}</td>
                    <td>{{$mh->n_verses}}</td>
                    <td>{{$mh->verse_count}}</td>
                    @if($mh->completed)
                        <td>True</td>
                    @else
                        <td>False</td>
                    @endif
                    <td>
                        <a href="main/{{$mh->id}}" class="btn btn-primary l"><span class="glyphicon glyphicon-search"></span> &nbsp; View </a>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="#" id="edit-hymn" class="btn btn-info"
                               data-id="{{$mh->id}}" data-english="{{$mh->english}}" data-nverse="{{$mh->n_verses}}" data-yoruba="{{$mh->yoruba}}" data-hymn_type="0">
                                <span class="glyphicon glyphicon-edit"></span> &nbsp; Edit </a>
                            <a href="#" onclick="getConfirmation({{$mh->id}}, 0)" class="btn btn-danger delete-hymn"  data-id="{{$mh->id}}"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete </a>
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
