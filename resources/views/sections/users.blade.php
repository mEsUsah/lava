@extends('layout.app')
@section('title', "Accounts")

@section('content')
    <div class="container">
        <h1>Users</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
            </tr>
            </tbody>
        </table>
  </div>
@endsection