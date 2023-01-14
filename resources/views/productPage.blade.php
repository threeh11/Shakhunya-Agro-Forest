@extends('layouts.base')

@include('includes.modalBuy')

@section('content')
    <x-content @class(['mt-10'])>
        <x-breadcrumb :product=$product />
        <div class="flex flex-row w-full h-[592px]">
            <div class="w-[50%]">
                @foreach($listImages as $image)
                    <img class="w-[472px] h-[454px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}" main="true">
                @endforeach
            </div>
            <div class="w-[50%] flex flex-col">
                <h1 class="text-[#333333] font-['Manrope'] text-3xl  leading-10 font-normal pb-7">
                    {{ $product->name }}
                </h1>
                <p class="text-[#333333] font-['Manrope'] text-2xl font-bold leading-10 font-normal pb-8">
                    {{ $product->price }}
                </p>
                <button class="w-[30%] bg-[#FFED4E] p-3 text-[#333333] font-['Manrope'] text-base leading-5" id="buttonBuy">
                    Купить
                </button>
            </div>
        </div>
    </x-content>

@endsection

