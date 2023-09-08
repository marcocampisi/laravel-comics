@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1>Lista dei fumetti</h1>
        <div class="row">
            @foreach (config('comics') as $fumetto)
                <div class="col-md-6 mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $fumetto['thumb'] }}" class="img-fluid comic-thumb" alt="{{ $fumetto['title'] }}">
                        </div>
                        <div class="col-md-8">
                            <h2>{{ $fumetto['title'] }}</h2>
                            <p>{{ $fumetto['description'] }}</p>
                            <p><strong>Prezzo:</strong> ${{ $fumetto['price'] }}</p>
                            <p><strong>Data:</strong> {{ $fumetto['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
