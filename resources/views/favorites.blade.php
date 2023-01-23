@extends('layouts.base')

@section('title', 'Избранное')

@section('content')
    <x-content @class(['mt-10'])>
        <h1 class="font-['Manrope'] font-normal text-[32px] leading-10 text-[#333333]">
            Сохраненные товары
        </h1>
        <p class="font-['Manrope'] font-normal text-[14px] leading-4 text-[#707070] pt-[8px]">
            Всего {{ count($products) }} товаров
        </p>
        <div class="flex flex-wrap flex-row mt-[35px] shrink-[0] gap-[20px] sm:flex-col sm:align-middle sm:justify-center">
            @foreach($products as $product)
                <x-product
                    id="{{ $product->id }}"
                    city="{{ $product->city }}"
                    rating="{{ $product->rating }}"
                    name="{{ $product->name }}"
                    price="{{ $product->price }}">
                    <svg class="absolute mt-[12px] ml-[12px] cursor-pointer z-10" name="{{ $product->id }}" id="removeFavorites" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.1 4.40121H12.6V2.56434C12.5789 1.86019 12.3302 1.195 11.9084 0.714589C11.4866 0.234179 10.9262 -0.0222498 10.35 0.00151618H7.65C7.07378 -0.0222498 6.51336 0.234179 6.09159 0.714589C5.66982 1.195 5.42111 1.86019 5.4 2.56434V4.40121H0.9C0.661305 4.40121 0.432387 4.5171 0.263604 4.72337C0.0948211 4.92965 0 5.20942 0 5.50114C0 5.79286 0.0948211 6.07263 0.263604 6.2789C0.432387 6.48518 0.661305 6.60106 0.9 6.60106H1.8V18.7002C1.8 19.5754 2.08446 20.4147 2.59081 21.0335C3.09716 21.6523 3.78392 22 4.5 22H13.5C14.2161 22 14.9028 21.6523 15.4092 21.0335C15.9155 20.4147 16.2 19.5754 16.2 18.7002V6.60106H17.1C17.3387 6.60106 17.5676 6.48518 17.7364 6.2789C17.9052 6.07263 18 5.79286 18 5.50114C18 5.20942 17.9052 4.92965 17.7364 4.72337C17.5676 4.5171 17.3387 4.40121 17.1 4.40121ZM7.2 2.56434C7.2 2.38835 7.389 2.20136 7.65 2.20136H10.35C10.611 2.20136 10.8 2.38835 10.8 2.56434V4.40121H7.2V2.56434Z" fill="#333333"/>
                    </svg>
                </x-product>
            @endforeach
        </div>
    </x-content>
@endsection
