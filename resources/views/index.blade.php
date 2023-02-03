@extends('layouts/base')

@section('content')
<main class="grow">
    <div class="flex flex-col relative mx-[18%] lg:flex-col lg:flex-wrap lg:justify-center lg:mx-0 lg:items-center" >
        <div class="flex justify-between lg:flex-wrap lg:justify-center">
            <div class="flex flex-col my-[40px] max-w-[400px] sm:mx-[18%]">
                <p class="text-xl text-[#7A1616] font-extrabold">ПРОИЗВОДСТВО И ПОСТАВКА ПИЛОМАТЕРИАЛОВ ПО ВСЕЙ РОССИИ И НА ЭКСПОРТ</p>
            </div>
        </div>
        <div class="border-y">
            <div class=" my-[30px]">
                @include('includes.descriptions')
            </div>
        </div>

        <div class="flex flex-col min-w-[286px] mt-[50px] lg:items-center lg:mt-[20px]">
            <div class="flex flex-wrap flex-row shrink-[0] gap-[20px] lg:justify-center sm:flex-col sm:items-center">
                <p class="hidden" id="productsCount">{{ count($products) }}</p>
                @foreach($products as $product)
                        <x-product
                            id="{{ $product->id }}"
                            city="{{ $product->city }}"
                            rating="{{ $product->rating }}"
                            name="{{ $product->name }}"
                            price="{{ $product->price }}">
                        </x-product>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
