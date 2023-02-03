@extends('layouts.base')

@include('includes.modalBuy')

@section('content')
    <x-content @class(['mt-10'])>
        <p class="hidden" id="productId">{{ $product->id }}</p>
        <x-breadcrumb :product=$product />
        <div class="flex flex-row w-full h-[592px] lg:flex-col lg:mb-[250]">
            <div class="flex flex-row gap-2 shrink-0 lg:flex-col">
                @foreach($listImages as $image)
                    @if (1  === $loop->iteration)
                        <div class="flex flex-col gap-2 lg:flex-row lg:order-1">
                            <img class="rounded-lg w-[110px] h-[110px] " src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @elseif (2 === $loop->iteration)
                            <img class="rounded-lg w-[110px] h-[110px] " src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                        </div>
                    @elseif (3 === $loop->iteration)
                        <img class="w-[472px] h-[454px] sm:w-[236px] sm:h-[227px] rounded-lg" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @endif
                @endforeach
            </div>
            <div class="flex flex-row justify-between w-[87%]">
                <div class="flex flex-col pl-10 lg:pl-0 w-[100%]">
                    <h1 class="text-[#333333] font-['Manrope'] text-3xl  leading-10 font-normal pb-7">
                        {{ $product->name }}
                    </h1>
                    <p class="pb-8 text-2xl leading-10 ">
                        {{ $product->price }}
                    </p>
                    <button class="w-[43%] rounded-lg min-w-fit bg-[#FFED4E] p-3 text-[#333333] font-['Manrope'] text-base leading-5" id="buttonBuy">
                        Купить
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between">
            <x-h3menu id="descriptionMenu" @class(['border-[#FFED4E]'])>
                Описание
            </x-h3menu>
            <x-h3menu id="reviewsMenu">
                <nobr>
                    Отзывы
                    <sup class="text-[#707070] font-['Manrope'] font-normal text-sm">
                        {{ count($reviews) }}
                    </sup>
                </nobr>
            </x-h3menu>
            <x-h3menu id="questionMenu">
                <nobr>
                    Вопросы
                </nobr>
            </x-h3menu>
            <x-h3menu id="contactsMenu">
                Контакты
            </x-h3menu>
        </div>
        @include('includes.reviews')
        @include('includes.descriptions')
        @include('includes.questions')
        @include('includes.contacts')

    </x-content>

@endsection

