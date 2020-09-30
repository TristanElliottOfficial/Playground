@extends('layouts.admin')
@section('content')
    <div>
        Username: {{ $user['name'] }}
        First Name: {{ $user["first_name"] }}
        Last Name: {{ $user["last_name"] }}
        Role:   {{ $user["roles"] }}
    </div>
@endsection
