@extends('layouts/base')

@section('content')
<main class="grow">
    <div class="flex flex-row relative mx-[10vh] lg:flex-col lg:flex-wrap lg:mx-auto">
        <div class="min-w-[286px] flex flex-col top-[20px] mt-[30px] mr-[21px]">
            <div>
                <div class="not-italic text-[14px] text-gray"><a href="#" class="not-italic text-[14px] text-gray">Каталог</a>/ Пиломатериалы</div>
                <p class="not-italic text-[32px]">Пиломатериалы</p>
                <p class="not-italic text-[14px] text-gray">Отображено 8 из 8 товаров</p>
            </div>
            <div>
                <form>
                    <p class="mt-[35px] font-bold">Тип
                        <input class="" id="openDownMenu">
                            <svg class="ml-[10px] hidden" id="typeIconNotOpenDownMenu" width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L6 5.5L1 10" stroke="#707070" stroke-width="2"/>
                            </svg>
                        </input> 
                        <input class="" id="closeDownMenu">   
                            <svg class="ml-[10px]" id="typeIconOpenDownMenu" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L5.5 6L1 1" stroke="#707070" stroke-width="2"/>
                            </svg>
                        </input> 
                    </p>
                    <div class="block mt-[16px]" id="parameterInput">
                        <div class="flex flex-row items-center">
                            <input type="checkbox" class="w-[20px] h-[20px] after:bg-[#FFED4E]" name="field1" id="">
                            <div class="ml-[13px]">Обрезной</div>
                        </div>
                        <div class="flex flex-row mt-[12px] items-center">
                            <input type="checkbox" class="w-[20px] h-[20px] checked:bg-[#FFED4E]" name="field2" id="">
                            <div class="ml-[13px]">Необрезной</div>
                        </div>
                    </div>
                </form>
                <form>
                    <p class="mt-[35px] font-bold">размеры
                        <button id="openDownMenu">
                            <svg class="ml-[10px] hidden" id="iconNotOpenDownMenu" width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L6 5.5L1 10" stroke="#707070" stroke-width="2"/>
                            </svg>
                        </button> 
                        <button id="closeDownMenu">   
                            <svg class="ml-[10px]" id="iconOpenDownMenu" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L5.5 6L1 1" stroke="#707070" stroke-width="2"/>
                            </svg>
                        </button> 
                    </p>
                    <div class="block mt-[16px]" id="parameterInput">
                        <div class="flex flex-row items-center">
                            <input type="checkbox" class="w-[20px] h-[20px] after:bg-[#FFED4E]" name="field1" id="">
                            <div class="ml-[13px]">большой</div>
                        </div>
                        <div class="flex flex-row mt-[12px] items-center">
                            <input type="checkbox" class="w-[20px] h-[20px] checked:bg-[#FFED4E]" name="field2" id="">
                            <div class="ml-[13px]">маленький</div>
                        </div>
                        <div class="flex flex-row mt-[12px] items-center">
                            <input type="checkbox" class="w-[20px] h-[20px] checked:bg-[#FFED4E]" name="field2" id="">
                            <div class="ml-[13px]">очень маленький</div>
                        </div>
                        <div class="flex flex-row mt-[12px] items-center">
                            <input type="checkbox" class="w-[20px] h-[20px] checked:bg-[#FFED4E]" name="field2" id="">
                            <div class="ml-[13px]">очень большой</div>
                        </div>
                    </div>
                </form>
                <form class="flex flex-row justify-between">
                    <input class="w-[140px] h-[46px] border border-[#CCCCCC] rounded px-[5px]" placeholder="от 990">
                    <input class="w-[140px] h-[46px] border border-[#CCCCCC] rounded px-[5px]" placeholder="до 470 000">
                </form>
                <form>
                    <button class="min-w-[286px] min-h-[46px] mt-[30px] font-[Manrope] font-normal bg-[#FFED4E] rounded hover:border hover:shadow-md">Сбросить</button>
                </form>
            </div>
        </div>
        <div class="flex flex-col min-w-[286px] mt-[163px] lg:justify-center ">
            <select class="select select-bordered w-full max-w-[286px] border rounded-[5px] px-[16px] py-[12px] mb-[20px] font-[Manrope] font-normal not-italic text-[16px] text-black">
                <option disabled selected>сортировать</option>
                <option class="font-[Manrope] font-normal not-italic text-[16px] text-black">по убыванию цены</option>
                <option class="font-[Manrope] font-normal not-italic text-[16px] text-black">по возрастанию цены</option>
            </select>
            <div class="flex flex-wrap flex-row shrink-[0] sm:flex-col sm:align-middle sm:justify-center">
                <x-product></x-product>
                <x-product></x-product>
                <x-product></x-product>
                <x-product></x-product>
                <x-product></x-product>
                <x-product></x-product>
                <x-product></x-product>
                <x-product></x-product>
            </div>
            
        </div>
    </div>
</main>
@endsection