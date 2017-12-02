@extends('master')

@section('content')
    @include('partials._navbar');
    @include('partials._message')
    <div class="container row">
        <a href="#" class="btn btn-info"  id="view-logistics"><span class="glyphicon glyphicon-search"></span> &nbsp;  View Logistics</a>
        <a href="#" class="btn btn-info" data-hymn_id="{{$hymn_id}}" data-hymn_verse_type="0" data-total_verse = {{count($hymn_verse)}} id="add-verse" data-hymn_type="1"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add Verse</a>
        <h2>Main Hymn {{$hymn_id}}</h2>
        <table class=" col-lg-12 table table-responsive">
            <thead>
            <th class="col-lg-1 col-sm-1 col-xs-1">Verse</th>
            <th class="col-lg-4 col-sm-4 col-xs-4">English</th>
            <th class="col-lg-4 col-sm-4 col-xs-4" >Yoruba</th>
            @if(\Illuminate\Support\Facades\Auth::check())
                <th class="col-lg-3 col-sm-3 col-xs-3">Action</th>
            @endif
            </thead>
            <tbody>
            @foreach($hymn_verse as $hv)
                <tr>
                    <td>{{$hv->verse_id}}</td>
                    <td>{{$hv->english}}</td>
                    <td>{{$hv->yoruba}}</td>
                    <td>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <p><a href="#edit" id="edit-verse" class="btn btn-info"
                                  data-id="{{$hv->id}}" data-verse_id="{{$hv->verse_id}}" data-english="{{$hv->english}}" data-yoruba="{{$hv->yoruba}}" data-hymn_id="{{$hv->hymn_id}}" data-hymn_verse_type="0">
                                    <span class="glyphicon glyphicon-edit"></span> &nbsp; Edit </a>
                            <a href="#" onclick="getVerseConfirmation({{$hv->id}},0)" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete </a>
                            </p>

                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr/>
    </div>
    @include('modals.edit_verse')
@endsection
