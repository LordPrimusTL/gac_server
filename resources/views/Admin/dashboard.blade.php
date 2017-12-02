@extends('AdminMaster')

@section('content')
    @include('partials._adminNavbar');

    @include('partials._message')
    {{csrf_field()}}
    <a href="#" id="add_user" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add User</a>
    <div class="row">
        <table class="table table-striped table-hover " id="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i =1?>
            @foreach($users as $user)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{date('F d, Y H:i:s', strtotime($user->created_at))}}</td>
                    <td>
                        <button class="edit-modal btn btn-primary">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </button>
                        <button class="delete-modal btn btn-danger" data-id="{{$user->id}}">
                            <span class="glyphicon glyphicon-trash"></span> Delete
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('modals.add_user')
@endsection
