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
                    <button class="min-w-[286px] min-h-[46px] mt-[30px] font-[Manrope] font-normal bg-[#FFED4E] rounded hover:border hover:shadow-md">Сбросить</button>
                </form>
            </div>
        </div>
        <div class="flex flex-col min-w-[286px] mt-[163px] lg:items-center lg:mt-[20px]">
            <select class="select select-bordered w-full max-w-[286px] border rounded-[5px] px-[16px] py-[12px] mb-[20px] font-[Manrope] font-normal not-italic text-[16px] text-black">
                <option disabled selected>сортировать</option>
                <option class="font-[Manrope] font-normal not-italic text-[16px] text-black">по убыванию цены</option>
                <option class="font-[Manrope] font-normal not-italic text-[16px] text-black">по возрастанию цены</option>
            </select>
            <div class="flex flex-wrap flex-row shrink-[0] gap-[20px] lg:justify-center sm:flex-col sm:items-center">
                @foreach($products as $product)
                        <x-product
                            id="{{ $product->id }}"
                            city="{{ $product->city }}"
                            rating="{{ $product->rating }}"
                            name="{{ $product->name }}"
                            price="{{ $product->price }}"></x-product>
                @endforeach
            </div>  
        </div>
    </div>
</main>
@endsection