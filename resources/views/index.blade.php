@extends('layouts/base')

@section('content')
<main class="grow">
    <div class="flex flex-row relative mx-[10vh] lg:flex-col lg:flex-wrap lg:mx-auto">
        <div class="min-w-[286px] flex flex-col top-[20px] mt-[30px]">
            <div>
                <p class="font-[Manrope] font-normal not-italic text-[14px] text-gray">Каталог / Пиломатериалы</p>
                <p class="font-[Manrope] font-normal not-italic text-[32px] text-black">Пиломатериалы</p>
                <p class="font-[Manrope] font-normal not-italic text-[14px] text-gray">Отображено 8 из 8 товаров</p>
            </div>
            <div>
                <form>

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
