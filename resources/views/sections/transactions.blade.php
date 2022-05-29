@extends('layout.app')
@section('title', "Transactions")

@section('content')
    <div class="container">
        <h2>Add Transacton:</h2>
        <form action="/transactions" method="post">
            @csrf

            <div class="row mb-3">
                <label for="user_name" class="form-label">Account (owner)</label>
                <select name="account_id" class="form-select @error('account_id') is-invalid @enderror" id="accountId" aria-label="Default select example">
                    <option selected>Select Account</option>
                    @foreach ($accounts as $account)
                        <option value="{{ $account->id }}">{{ $account->user_name }}</option>  
                    @endforeach
                </select>
                @error('account_id')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="direction" id="debit" value="debit" checked>
                    <label class="form-check-label" for="debit">
                      Add
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="direction" id="credit" value="credit">
                    <label class="form-check-label" for="credit">
                      Remove
                    </label>
                  </div>
            </div>

            <div class="row mb-3">
                <label for="ammount" class="form-label">Ammount:</label>
                <input type="number" name="ammount" class="form-control @error('ammount') is-invalid @enderror" id="ammount" value="{{ old('ammount') }}">
                @error('ammount')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <label for="accountName" class="form-label">Comment: <span class="form-text">What / Why</span></label>
                <input type="text" name="comment" class="form-control @error('comment') is-invalid @enderror" id="accountName">
                @error('comment')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i> Add</button>
        </form>

        
        <h2>Transactions</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Account</th>
                    <th scope="col">Debit</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction )
                    <tr>
                        <th scope="row">{{ $transaction->id }}</th>
                        <td>{{ $transaction->account_name }}</td>
                        <td>{{ $transaction->debit > 0 ?? $transaction->debit }}</td>
                        <td>{{ $transaction->credit > 0 ?? $transaction->credit }}</td>
                        <td>{{ $transaction->comment }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
@endsection