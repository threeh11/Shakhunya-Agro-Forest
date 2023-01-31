@extends('layouts/base')

@section('content')
<main class="grow">
    <div class="flex flex-row relative mx-[18%] lg:flex-col lg:flex-wrap lg:justify-center lg:mx-0 lg:items-center" >
        <div class="min-w-[286px] flex flex-col top-[20px] mt-[30px] mr-[21px] sm:justify-center lg:mt-0 lg:mr-0">
            <div>
                <div class="not-italic text-[14px] text-gray"><a href="#" class="not-italic text-[14px] text-gray">Каталог</a>/ Пиломатериалы</div>
                <p class="not-italic text-[32px]">Пиломатериалы</p>
                <p class="not-italic text-[14px] text-gray">Отображено 8 из 8 товаров</p>
            </div>
            <div>
                <form>
                    <div class="flex flex-row mt-[35px] font-bold items-center select-none">Тип
                            <svg class="ml-[10px] block" id="typeIconNotOpenDownMenu" width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L6 5.5L1 10" stroke="#707070" stroke-width="2"/>
                            </svg>
                            <svg class="ml-[10px] hidden" id="typeIconOpenDownMenu" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L5.5 6L1 1" stroke="#707070" stroke-width="2"/>
                            </svg>
                    </div>
                    <div class="hidden mt-[16px] select-none" id="typeParameterInput">
                        <div class="flex flex-row items-center">
                            <div class="flex justify-center items-center w-[20px] h-[20px] border rounded hover:shadow-md" id="CheckBoxOff1"></div>
                            <div class="hidden flex justify-center items-center w-[20px] h-[20px] border rounded bg-[#FFED4E] hover:shadow-md" id="CheckBoxOn1">
                                <svg class="" id="confirmationTick" width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.38462 9C4.28205 8.99967 4.18064 8.97827 4.08669 8.93714C3.99274 8.896 3.90827 8.836 3.83852 8.76087L0.20278 4.89749C0.0668714 4.75282 -0.00593442 4.56013 0.000378846 4.36184C0.00669211 4.16354 0.0916074 3.97587 0.236444 3.84011C0.381281 3.70435 0.574176 3.63162 0.772693 3.63793C0.97121 3.64424 1.15909 3.72906 1.295 3.87373L4.37714 7.15424L10.6686 0.279371C10.7325 0.199953 10.8119 0.134412 10.902 0.0867722C10.9921 0.0391329 11.0911 0.0104015 11.1927 0.00234264C11.2944 -0.00571617 11.3966 0.00706785 11.4931 0.0399093C11.5896 0.0727508 11.6784 0.124956 11.754 0.19332C11.8296 0.261683 11.8904 0.344761 11.9327 0.43745C11.975 0.530139 11.9978 0.630484 11.9999 0.732319C12.0019 0.834155 11.9831 0.935332 11.9445 1.02964C11.906 1.12394 11.8486 1.20938 11.7758 1.28071L4.93821 8.7534C4.86912 8.82989 4.78494 8.89128 4.69096 8.93371C4.59698 8.97615 4.49523 8.99872 4.39211 9H4.38462Z" fill="#333333"/>
                                </svg>
                            </div>
                            <div class="ml-[13px]">Обрезной</div>
                        </div>
                        <div class="flex flex-row mt-[12px] items-center">
                        <div class="flex justify-center items-center w-[20px] h-[20px] border rounded hover:shadow-md" id="CheckBoxOff2"></div>
                            <div class="hidden flex justify-center items-center w-[20px] h-[20px] border rounded bg-[#FFED4E] hover:shadow-md" id="CheckBoxOn2">
                                <svg class="" id="confirmationTick" width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.38462 9C4.28205 8.99967 4.18064 8.97827 4.08669 8.93714C3.99274 8.896 3.90827 8.836 3.83852 8.76087L0.20278 4.89749C0.0668714 4.75282 -0.00593442 4.56013 0.000378846 4.36184C0.00669211 4.16354 0.0916074 3.97587 0.236444 3.84011C0.381281 3.70435 0.574176 3.63162 0.772693 3.63793C0.97121 3.64424 1.15909 3.72906 1.295 3.87373L4.37714 7.15424L10.6686 0.279371C10.7325 0.199953 10.8119 0.134412 10.902 0.0867722C10.9921 0.0391329 11.0911 0.0104015 11.1927 0.00234264C11.2944 -0.00571617 11.3966 0.00706785 11.4931 0.0399093C11.5896 0.0727508 11.6784 0.124956 11.754 0.19332C11.8296 0.261683 11.8904 0.344761 11.9327 0.43745C11.975 0.530139 11.9978 0.630484 11.9999 0.732319C12.0019 0.834155 11.9831 0.935332 11.9445 1.02964C11.906 1.12394 11.8486 1.20938 11.7758 1.28071L4.93821 8.7534C4.86912 8.82989 4.78494 8.89128 4.69096 8.93371C4.59698 8.97615 4.49523 8.99872 4.39211 9H4.38462Z" fill="#333333"/>
                                </svg>
                            </div>
                            <div class="ml-[13px]">Необрезной</div>
                        </div>
                    </div>
                </form>
                    <p class="flex flex-row mt-[30px] font-bold items-center select-none">Размеры
                        <svg class="ml-[10px] block" id="sizeIconNotOpenDownMenu" width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L6 5.5L1 10" stroke="#707070" stroke-width="2"/>
                        </svg>
                        <svg class="ml-[10px] hidden" id="sizeIconOpenDownMenu" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 1L5.5 6L1 1" stroke="#707070" stroke-width="2"/>
                        </svg>
                    </p>
                    <div class="flex flex-col hidden mt-[16px] select-none gap-[12px]" id="sizeParameterInput">
                        <div class="flex flex-row items-center ">
                        <div class="flex justify-center items-center w-[20px] h-[20px] border rounded hover:shadow-md" id="CheckBoxOff3"></div>
                            <div class="hidden flex justify-center items-center w-[20px] h-[20px] border rounded bg-[#FFED4E] hover:shadow-md" id="CheckBoxOn3">
                                <svg class="" id="confirmationTick" width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.38462 9C4.28205 8.99967 4.18064 8.97827 4.08669 8.93714C3.99274 8.896 3.90827 8.836 3.83852 8.76087L0.20278 4.89749C0.0668714 4.75282 -0.00593442 4.56013 0.000378846 4.36184C0.00669211 4.16354 0.0916074 3.97587 0.236444 3.84011C0.381281 3.70435 0.574176 3.63162 0.772693 3.63793C0.97121 3.64424 1.15909 3.72906 1.295 3.87373L4.37714 7.15424L10.6686 0.279371C10.7325 0.199953 10.8119 0.134412 10.902 0.0867722C10.9921 0.0391329 11.0911 0.0104015 11.1927 0.00234264C11.2944 -0.00571617 11.3966 0.00706785 11.4931 0.0399093C11.5896 0.0727508 11.6784 0.124956 11.754 0.19332C11.8296 0.261683 11.8904 0.344761 11.9327 0.43745C11.975 0.530139 11.9978 0.630484 11.9999 0.732319C12.0019 0.834155 11.9831 0.935332 11.9445 1.02964C11.906 1.12394 11.8486 1.20938 11.7758 1.28071L4.93821 8.7534C4.86912 8.82989 4.78494 8.89128 4.69096 8.93371C4.59698 8.97615 4.49523 8.99872 4.39211 9H4.38462Z" fill="#333333"/>
                                </svg>
                            </div>
                            <div class="ml-[13px]">800×1200</div>
                        </div>
                        <div class="flex flex-row items-center ">
                        <div class="flex justify-center items-center w-[20px] h-[20px] border rounded hover:shadow-md" id="CheckBoxOff4"></div>
                            <div class="hidden flex justify-center items-center w-[20px] h-[20px] border rounded bg-[#FFED4E] hover:shadow-md" id="CheckBoxOn4">
                                <svg class="" id="confirmationTick" width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.38462 9C4.28205 8.99967 4.18064 8.97827 4.08669 8.93714C3.99274 8.896 3.90827 8.836 3.83852 8.76087L0.20278 4.89749C0.0668714 4.75282 -0.00593442 4.56013 0.000378846 4.36184C0.00669211 4.16354 0.0916074 3.97587 0.236444 3.84011C0.381281 3.70435 0.574176 3.63162 0.772693 3.63793C0.97121 3.64424 1.15909 3.72906 1.295 3.87373L4.37714 7.15424L10.6686 0.279371C10.7325 0.199953 10.8119 0.134412 10.902 0.0867722C10.9921 0.0391329 11.0911 0.0104015 11.1927 0.00234264C11.2944 -0.00571617 11.3966 0.00706785 11.4931 0.0399093C11.5896 0.0727508 11.6784 0.124956 11.754 0.19332C11.8296 0.261683 11.8904 0.344761 11.9327 0.43745C11.975 0.530139 11.9978 0.630484 11.9999 0.732319C12.0019 0.834155 11.9831 0.935332 11.9445 1.02964C11.906 1.12394 11.8486 1.20938 11.7758 1.28071L4.93821 8.7534C4.86912 8.82989 4.78494 8.89128 4.69096 8.93371C4.59698 8.97615 4.49523 8.99872 4.39211 9H4.38462Z" fill="#333333"/>
                                </svg>
                            </div>
                            <div class="ml-[13px]">1000×1200</div>
                        </div>
                        <div class="flex flex-row items-center ">
                        <div class="flex justify-center items-center w-[20px] h-[20px] border rounded hover:shadow-md" id="CheckBoxOff5"></div>
                            <div class="hidden flex justify-center items-center w-[20px] h-[20px] border rounded bg-[#FFED4E] hover:shadow-md" id="CheckBoxOn5">
                                <svg class="" id="confirmationTick" width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.38462 9C4.28205 8.99967 4.18064 8.97827 4.08669 8.93714C3.99274 8.896 3.90827 8.836 3.83852 8.76087L0.20278 4.89749C0.0668714 4.75282 -0.00593442 4.56013 0.000378846 4.36184C0.00669211 4.16354 0.0916074 3.97587 0.236444 3.84011C0.381281 3.70435 0.574176 3.63162 0.772693 3.63793C0.97121 3.64424 1.15909 3.72906 1.295 3.87373L4.37714 7.15424L10.6686 0.279371C10.7325 0.199953 10.8119 0.134412 10.902 0.0867722C10.9921 0.0391329 11.0911 0.0104015 11.1927 0.00234264C11.2944 -0.00571617 11.3966 0.00706785 11.4931 0.0399093C11.5896 0.0727508 11.6784 0.124956 11.754 0.19332C11.8296 0.261683 11.8904 0.344761 11.9327 0.43745C11.975 0.530139 11.9978 0.630484 11.9999 0.732319C12.0019 0.834155 11.9831 0.935332 11.9445 1.02964C11.906 1.12394 11.8486 1.20938 11.7758 1.28071L4.93821 8.7534C4.86912 8.82989 4.78494 8.89128 4.69096 8.93371C4.59698 8.97615 4.49523 8.99872 4.39211 9H4.38462Z" fill="#333333"/>
                                </svg>
                            </div>
                            <div class="ml-[13px]">1140×1140</div>
                        </div>
                    </div>
                <form class="flex flex-col justify-between mt-[30px]">
                    <p class="flex flex-row font-bold items-center select-none"> Цена, ₽
                        <svg class="ml-[10px] block" id="priceIconNotOpenDownMenu" width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L6 5.5L1 10" stroke="#707070" stroke-width="2"/>
                        </svg>
                        <svg class="ml-[10px] hidden" id="priceIconOpenDownMenu" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 1L5.5 6L1 1" stroke="#707070" stroke-width="2"/>
                        </svg>
                    </p>
                    <div class="hidden mt-[15px]" id="priceParameterInput">
                        <input class="w-[140px] h-[46px] border border-[#CCCCCC] rounded px-[5px] text-center" placeholder="от 990" maxlength="7">
                        <input class="w-[140px] h-[46px] border border-[#CCCCCC] rounded px-[5px] text-center" placeholder="до 470 000" maxlength="7">
                    </div>
                </form>
                <form>
                    <button class="min-w-[286px] min-h-[46px] mt-[30px] font-[Manrope] font-normal bg-[#FFED4E] rounded">Сбросить</button>
                </form>
            </div>
        </div>
        <div class="flex flex-col min-w-[286px] mt-[163px] lg:items-center lg:mt-[20px]">
            <div class="flex flex-wrap flex-row shrink-[0] gap-[20px] lg:justify-center sm:flex-col sm:items-center">
                <p class="hidden" id="productsCount">{{ count($products) }}</p>
                @foreach($products as $product)
                        <x-product
                            id="{{ $product->id }}"
                            city="{{ $product->city }}"
                            rating="{{ $product->rating }}"
                            name="{{ $product->name }}"
                            price="{{ $product->price }}">
                            <svg class="absolute mt-[12px] ml-[12px] cursor-pointer" id="addFavorites_{{ $loop->iteration }}" name="{{ $product->id }}" width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="@if(Helper::isFavorites($product->id)) fill-[#FFED4E] stroke-[#FFED4E] @endif" d="M0.863482 21.1579L0.861952 21.1571C0.752537 21.0956 0.66143 21.0061 0.597955 20.8978C0.53454 20.7896 0.500981 20.6666 0.500701 20.5412V2.81542H0.500828L0.500574 2.80415C0.487203 2.21104 0.7081 1.63656 1.11539 1.2052C1.52079 0.775847 2.07834 0.522724 2.66818 0.5H14.2499C14.8397 0.522724 15.3973 0.775847 15.8027 1.2052C16.21 1.63656 16.4309 2.21104 16.4175 2.80415L16.4174 2.80415V2.81542V20.54C16.4164 20.6632 16.3833 20.7839 16.3214 20.8904C16.2593 20.9973 16.1703 21.086 16.0632 21.1478L16.3132 21.5808L16.0632 21.1478C15.9555 21.21 15.8334 21.2427 15.709 21.2427C15.5847 21.2427 15.4625 21.21 15.3549 21.1478L15.3512 21.1457L8.49995 17.267L8.24622 17.1233L7.99625 17.2734L1.55583 21.1401L1.55581 21.14L1.54951 21.1439C1.4451 21.2087 1.32566 21.2453 1.20295 21.2499C1.08389 21.2483 0.967133 21.2167 0.863482 21.1579Z" fill="white" stroke="#333333"/>
                            </svg>
                        </x-product>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
