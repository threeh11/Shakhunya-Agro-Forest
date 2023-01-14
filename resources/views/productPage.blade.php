@extends('layouts.base')

@include('includes.modalBuy')

@section('content')
    <x-content @class(['mt-10'])>
        <x-breadcrumb :product=$product />
        <div class="flex flex-row w-full h-[592px]">
            <div class="flex flex-row gap-2">
                @foreach($listImages as $image)
                    @if (1  === $loop->iteration)
                        <div class="flex flex-col gap-2">
                            <img class="w-[110px] h-[110px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @elseif (2 === $loop->iteration)
                            <img class="w-[110px] h-[110px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                        </div>
                    @elseif (3 === $loop->iteration)
                        <img class="w-[472px] h-[454px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @endif
                @endforeach
            </div>
            <div class="pl-10 flex flex-col">
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
        <div class="flex flex-row justify-between">
            <x-h3menu id="descriptionMenu" @class(['border-[#FFED4E]'])>
                Описание
            </x-h3menu>
            <x-h3menu id="reviewsMenu">
                Отзывы
            </x-h3menu>
            <x-h3menu id="questionMenu">
                Вопросы
            </x-h3menu>
            <x-h3menu id="contactsMenu">
                Контакты
            </x-h3menu>
        </div>
        <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="descriptionBlock">
            {{ $product->description }}
        </div>
        <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="reviewsBlock">
            {{ $product->description }}
        </div>
        <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="questionBlock">
            {{ $product->description }}
        </div>
        <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="contactsBlock">
            {{ $product->description }}
        </div>
    </x-content>

@endsection

