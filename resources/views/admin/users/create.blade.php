@extends('layouts.admin')
@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Username</label>
            <input type="text" id="name" name="name" placeholder="Enter a username">
        </div>
        <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter a first name">
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter a last name">
        </div>
        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter an email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter a password">
        </div>
        <div>
            <label for="password-confirm">Confirm Password</label>
            <input type="password" id="password-confirm" name="password-confirm" placeholder="Confirm the password">
        </div>
        <div>
            <label for="roles">Select a Role</label>
            <select id="roles" name="roles">
                @foreach($roles as $role)
                    <option value="{{ $role["id"] }}">{{ $role["name"] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="button">Create User</button>
        </div>
    </form>
@endsection
