@extends('layouts.admin')
@section('content')
    <table class="table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Username</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->id }}</td>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">
                    @foreach($user->roles->pluck('name') as $role_name)
                        {{ $role_name }}
                    @endforeach
                </td>
                <td class="border px-4 py-2">
                    <a href="{{ url('/users/show/') . $user->id }}">View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
