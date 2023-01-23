@extends('layouts/base')

@section('content')
    <x-content>
        <main class="grow">
            <div class="grid grid-cols-4">
                @foreach($products as $product)
                    <x-product
                        id="{{ $product->id }}"
                        city="{{ $product->city }}"
                        rating="{{ $product->rating }}"
                        name="{{ $product->name }}"
                        price="{{ $product->price }}"/>
                @endforeach
            </div>
        </main>
    </x-content>
@endsection
