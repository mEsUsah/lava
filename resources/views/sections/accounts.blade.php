@extends('layout.app')
@section('title', "Accounts")

@section('content')
    <div class="container">
        
        <h2>Add account:</h2>
        <form action="/accounts" method="post">
            @csrf
            <div class="row mb-3">
                <label for="accountName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="accountName">
                <div id="accountNameHelp" class="form-text">Name of account</div>
            </div>

            <div class="row mb-3">
                <label for="accountId" class="form-label" id="accountId">User</label>
                <select name="user_id" class="form-select" aria-label="Default select example">
                    <option selected>Select user</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>  
                    @endforeach
                </select>
                <div id="accountIdHelp" class="form-text">ID of user who owns the account</div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i> Add</button>
        </form>

        
        <h2>Accounts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">User</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account )
                    <tr>
                        <th scope="row">{{ $account->id }}</th>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->user_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
@endsection