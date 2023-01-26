@if($reviews->count() != 0)
    @foreach($reviews as $review)
        <div class="flex flex-col py-4 mt-6 border-t-2 border-t-grayUltraLight">
            <div class="flex flex-row items-center justify-between w-[27%]">
                <p class="my-1 font-['Manrope'] text-base font-bold leading-5 text-black">
                    <! -- Имя-->
                    {{ $review->name }}
                </p>
                <x-startsForReviews rating="{{ $review->rating }}" idReview="{{ $review->id }}"/>
            </div>
            <p class="mt-1 font-['Manrope'] font-normal leading-4 text-xs text-gray">
                <! -- Дата-->
                {{ $review->date_write }}
            </p>
            <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                Преимущества
            </p>
            <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
                <! -- Текст преимуществ-->
                {{ $review->advantages }}
            </p>
            <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                Недостатки
            </p>
            <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
                <! -- Текст недостатков-->
                {{ $review->disadvantages }}
            </p>
            <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                Комментарий
            </p>
            <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
                <! -- Текст комментария-->
                {{ $review->comment }}
            </p>
        </div>
    @endforeach
@endif
