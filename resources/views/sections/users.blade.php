@extends('layout.app')
@section('title', "Accounts")

@section('content')
    <div class="container">

        <h2>Add user:</h2>
        <form method="POST" action="/users/create">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-md-12 form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-12 form-label">E-mail</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="name" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-12 form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="md-12 col-form-label">Confirm Password</label>
                <input type="password" name="password-confirm" class="form-control" id="password-confirm" required>
            </div>
            
            <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i> Add</button>
        </form>


        <h2>Users:</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
  </div>
@endsection