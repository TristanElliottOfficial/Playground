@extends('layouts.admin')
@section('content')
    <header class="flex justify-between items-center p-3 bg-white shadow-lg m-3">
        <div>
            <h1 class="text-3xl text-gray-800">Roles</h1>
        </div>
        <div>
            <a href="{{ url('role/create') }}" class="button">Add New Role</a>
        </div>
    </header>
    <section class="bg-white shadow-lg p-3 m-3">
        <div class="flex justify-between items-center border-b p-4">
            <div>
                <select class="js-example-basic-single px-4 py-2 appearance-none rounded-sm" name="state">
                    <option value="AL">Filter Roles By ..</option>
                    <option value="AL">Ability</option>
                    <option value="WY">Name</option>
                </select>
                <a href="" class="button">Apply</a>
            </div>
            <div>
                1 Role
            </div>
        </div>
        <table class="table-auto">
            <thead class="bg-blue-600">
            <tr>
                <th class="px-4 py-2 text-left text-blue-200">ID</th>
                <th class="px-4 py-2 text-left text-blue-200">Name</th>
                <th class="px-4 py-2 text-left text-blue-200">Permissions</th>
                <th class="px-4 py-2 text-left text-blue-200">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td class="border px-4 py-2">{{ $role["id"] }}</td>
                    <td class="border px-4 py-2">{{ $role["name"] }}</td>
                    <td class="border px-4 py-2">{{ $role["permissions"] }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ url('roles/show/') . $role["id"] }}" class="button">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

@endsection
