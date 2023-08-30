@extends('admin.adminLayout')

@section('head')
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
    color: rgb(231, 105, 168);
}
</style>
@endsection

@section('content')

<h2 style="text-align:center; text-transform: capitalize;">User List</h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Created At</th>
  </tr>
  @foreach ($userList as $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->contact }}</td>
    <td>{{ $user->address }}</td>
    <td>{{ $user->created_at }}</td>
  </tr>
  @endforeach
</table>

@endsection
