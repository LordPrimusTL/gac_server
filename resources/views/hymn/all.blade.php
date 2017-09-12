@extends('master')

@section('content')
    @include('partials._navbar');
    <div class="container row">
        <h5>Main Hymn</h5>
        <table class="table table-responsive">
            <thead>
            <th>Hymn</th>
            <th>English</th>
            <th>Yoruba</th>
            <th>Actions</th>
            </thead>
            <tbody>
            @foreach($main_hymn as $mh)
                <tr>
                    <td>{{$mh->id}}</td>
                    <td>{{$mh->english}}</td>
                    <td>{{$mh->yoruba}}</td>
                    <td>
                        <a href="main/{{$mh->id}}" class="btn btn-primary l"><span class="glyphicon glyphicon-search"></span> &nbsp; View </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr/>

        <h2>Appendix</h2>
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
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('modals.add_hymn')
    @include('modals.edit_hymn')
    @include('modals.logistics')
@endsection
