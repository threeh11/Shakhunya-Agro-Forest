@extends('layouts.base')

@include('includes.modalBuy')
@include('includes.modalPhoto')

@section('content')
    <x-content @class(['mt-10'])>
        <p class="hidden" id="productId">{{ $product->id }}</p>
        <x-breadcrumb :product=$product />
        <div class="flex flex-row w-full h-[592px]">
            <div class="flex flex-row gap-2 shrink-0">
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

            <div class="flex flex-row justify-between">
                <div class="flex flex-col pl-10 w-[87%]">
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
                <svg class="mt-3" id="addFavoritesProduct" width="17" height="22" viewBox="0 0 17 22" fill="black" xmlns="http://www.w3.org/2000/svg">
                    <path class="@if(Helper::isFavorites($product->id)) fill-[#FFED4E] stroke-[#FFED4E] @endif hover:fill-[#FFED4E] hover:stroke-[#FFED4E] cursor-pointer" d="M0.863482 21.1579L0.861952 21.1571C0.752537 21.0956 0.66143 21.0061 0.597955 20.8978C0.53454 20.7896 0.500981 20.6666 0.500701 20.5412V2.81542H0.500828L0.500574 2.80415C0.487203 2.21104 0.7081 1.63656 1.11539 1.2052C1.52079 0.775847 2.07834 0.522724 2.66818 0.5H14.2499C14.8397 0.522724 15.3973 0.775847 15.8027 1.2052C16.21 1.63656 16.4309 2.21104 16.4175 2.80415L16.4174 2.80415V2.81542V20.54C16.4164 20.6632 16.3833 20.7839 16.3214 20.8904C16.2593 20.9973 16.1703 21.086 16.0632 21.1478L16.3132 21.5808L16.0632 21.1478C15.9555 21.21 15.8334 21.2427 15.709 21.2427C15.5847 21.2427 15.4625 21.21 15.3549 21.1478L15.3512 21.1457L8.49995 17.267L8.24622 17.1233L7.99625 17.2734L1.55583 21.1401L1.55581 21.14L1.54951 21.1439C1.4451 21.2087 1.32566 21.2453 1.20295 21.2499C1.08389 21.2483 0.967133 21.2167 0.863482 21.1579Z" fill="white" stroke="#333333" id="svgFavorites"/>
                </svg>
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


        @include('includes.reviews')
        @include('includes.descriptions')
        @include('includes.questions')
        @include('includes.contacts')

    </x-content>

@endsection

