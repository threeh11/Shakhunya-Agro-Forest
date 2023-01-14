@extends('layouts/base')

@section('content')
<main class="grow">
    <div class="flex relative sticky mx-[15vh]">
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
            <div class="flex min-w-[286px] mt-[163px] ">
                <select class="select select-bordered w-full max-w-xs border rounded-[5px] px-[16px] py-[12px] font-[Manrope] font-normal not-italic text-[16px] text-black">
                    <option disabled selected>сортировать</option>
                    <option class="font-[Manrope] font-normal not-italic text-[16px] text-black">по убыванию цены</option>
                    <option class="font-[Manrope] font-normal not-italic text-[16px] text-black">по возрастанию цены</option>
                </select>
                <div>

                </div>
            </div>
    </div>
</main>
@endsection
