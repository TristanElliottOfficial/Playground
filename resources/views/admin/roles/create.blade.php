@extends('layouts.admin')
@section('content')
    <form action="{{ route('roles.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter a role name">
        </div>
        <div>
            @foreach($permissions as $permission)
                <div>
                    <input type="checkbox" id="permission" name="permission" value="{{ $permission->$permission }}">
                    <label for="permission">Permission</label>
                </div>
            @endforeach
        </div>
        <div>
            <button type="submit" class="button">Create Role</button>
        </div>
    </form>
@endsection
