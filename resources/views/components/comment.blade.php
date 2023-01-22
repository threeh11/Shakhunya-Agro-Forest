@if($reviews->count() != 0)
    <div class="flex flex-col">
        <p class="my-1 font-['Manrope'] text-base font-bold leading-5 text-black">
            <! -- Имя-->
            {{ $reviews[0]->name }}
        </p>
        <p class="mt-1 font-['Manrope'] font-normal leading-4 text-xs text-gray">
            <! -- Дата-->
            {{ $reviews[0]->date_write }}
        </p>
        <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
            Преимущества
        </p>
        <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
            <! -- Текст преимуществ-->
            {{ $reviews[0]->advantages }}
        </p>
        <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
            Недостатки
        </p>
        <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
            <! -- Текст недостатков-->
            {{ $reviews[0]->disadvantages }}
        </p>
        <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
            Комментарий
        </p>
        <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
            <! -- Текст комментария-->
            {{ $reviews[0]->comment }}
        </p>
    </div>
@endif