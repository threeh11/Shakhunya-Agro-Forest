@extends('layouts.base')

@section('title', 'Избранное')

@section('content')
    <x-content @class(['mt-10'])>
        <h1 class="font-['Manrope'] font-normal text-[32px] leading-10 text-[#333333]">
            Сохраненные товары
        </h1>
        <p class="font-['Manrope'] font-normal text-[14px] leading-4 text-[#707070] pt-[8px]">
            Всего товаров
        </p>
        <div class="grid w-full pt-[35px]">
            <x-product/>
        </div>
    </x-content>
@endsection
