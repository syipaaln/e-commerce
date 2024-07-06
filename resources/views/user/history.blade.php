@extends('layouts.user')

@section('content')
    <div class="container">
        <h1>History Pembelian</h1>

    @if($histories->isEmpty())
        <p>Tidak ada history pembelian.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Checkout ID</th>
                    <th>Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histories as $history)
                    <tr>
                        <td>{{ $history->id }}</td>
                        <td>{{ $history->product_id }}</td>
                        <td>{{ $history->checkout_id }}</td>
                        <td>{{ $history->price }}</td>
                        <td>{{ $history->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </div>
@endsection
