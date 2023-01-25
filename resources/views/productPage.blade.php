@extends('layouts.base')

@include('includes.modalBuy')
@include('includes.modalPhoto')

@section('content')
    <x-content @class(['mt-10'])>
        <x-breadcrumb :product=$product />
        <p class="hidden" id="productId">{{ $product->id }}</p>
        <div class="flex flex-row w-full h-[592px] lg:flex-col lg:mb-[200px]">
            <div class="flex flex-row gap-2 shrink-0 lg:justify-center">
                @foreach($listImages as $image)
                    @if (1  === $loop->iteration)
                        <div class="flex flex-col gap-2">
                            <img class="w-[110px] h-[110px] lg:hidden" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @elseif (2 === $loop->iteration)
                            <img class="w-[110px] h-[110px] lg:hidden" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                        </div>
                    @elseif (3 === $loop->iteration)
                        <img class="w-[472px] h-[454px] sm:w-[236px] sm:h-[227px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @endif
                @endforeach
            </div>
            <div class="flex flex-col pl-10 lg:pl-0">
                <h1 class="text-[#333333] font-['Manrope'] text-3xl  leading-10 font-normal pb-7">
                    {{ $product->name }}
                </h1>
                <p class=" text-2xl leading-10 pb-8">
                    {{ $product->price }}
                </p>
                <button class="w-[43%] bg-[#FFED4E] p-3 text-[#333333] font-['Manrope'] text-base leading-5 hover:p-3.5 hover:w-[45%] hover:drop-shadow-lg duration-300" id="buttonBuy">
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

{{--        @include('includes.reviews')--}}
        @include('includes.descriptions')
        <form>
            <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="questionBlock">
                <div class="flex flex-col">
                    <p class="my-1 font-['Manrope'] text-base font-bold leading-5 text-black">
                        <! -- Имя-->
                        Константин
                    </p>
                    <p class="mt-1 font-['Manrope'] font-normal leading-4 text-xs text-gray">
                        <! -- Дата-->
                        09.01.2023
                    </p>
                    <p class="my-6 font-['Manrope'] font-normal leading-4 text-base text-black">
                        <! -- Текст вопроса-->
                        Добрый день, интересует прайс на всю продукцию. Условия оптовых поставок.
                    </p>
                </div>
                <div class="flex flex-col mt-6 border-t-2 border-t-grayUltraLight">
                    <p class="my-6 font-['Manrope'] text-2xl font-normal leading-8 text-black">
                        Задать вопрос
                    </p>
                    <div class="flex flex-row">
                        <input class="invalid:border-red mr-2.5 px-3 w-[90%] h-11 border rounded border-solid border-[#CCCCCC]" required placeholder="Имя" title="Введите имя на русском языке, не используя цифр" type="text" pattern="^[А-Яа-яЁё\s]+$">
                        <input class="invalid:border-red mx-2.5 px-3 w-[90%] h-11 border rounded border-solid border-[#CCCCCC]" required placeholder="Телефон" title="Введите номер телефона в формате 82345678899" pattern="[7-9]{1}[0-9]{10}" type="tel">
                        <input class="invalid:border-red ml-2.5 px-3 w-[90%] h-11 border rounded border-solid border-[#CCCCCC]" required placeholder="Электронная почта" title="Введите адрес в формате example@site.com" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                    <textarea class="p-3 my-6 h-40 border rounded border-solid border-[#CCCCCC]"></textarea>
                    <button class="my-2.5 w-[33%] min-w-fit h-11 float-left text-center rounded bg-accent">
                        <p class="mx-2.5 my-2.5 px-2 w-[90%] text-black font-[Manrope] text-base font-normal cursor-pointer">
                            Отправить
                        </p>
                    </button>
                </div>
            </div>
        </form>
        @include('includes.contacts')
    </x-content>

@endsection

