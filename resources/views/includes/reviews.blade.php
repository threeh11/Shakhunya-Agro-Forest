<form action="{{ route('saveReviews', $product->id) }}" method="POST" id="reviewsForm">
    @csrf
    <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="reviewsBlock">
        <x-comment/>
        <div class="flex flex-col mt-6 border-t-2 border-t-grayUltraLight ">
            <p class="my-6 font-['Manrope'] text-2xl font-normal leading-8 text-black">
                Написать отзыв
            </p>
            <div class="my-2.5 flex flex-row">
                <p class="font-['Manrope'] text-base font-bold leading-5 text-black">
                    Оценка товара
                </p>
                <x-starts/>
            </div>
            <div class="flex flex-row">
                <x-reviewsInput
                    placeholder="Имя"
                    title="Введите имя на русском языке, не используя цифр"
                    type="text"
                    pattern="^[А-Яа-яЁё\s]+$"
                    name="name"
                    id="name"
                />
                <x-reviewsInput
                    placeholder="Телефон"
                    title="Введите номер телефона в формате 82345678899"
                    type="tel"
                    pattern="[7-9]{1}[0-9]{10}"
                    id="number"
                    name="number"
                />
                <x-reviewsInput
                    placeholder="Электронная почта"
                    title="Введите адрес в формате example@site.com"
                    type="email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                    id="email"
                    name="email"
                />
            </div>
            <x-reviewsTextArea text="Приемущества" name="advantages" id="advantages"/>
            <x-reviewsTextArea text="Недостатки" name="disadvantages" id="disadvantages"/>
            <x-reviewsTextArea text="Комментарий" name="comment" id="comment"/>

            <button
                id="customSaveForm"
                class="my-2.5 w-[33%] min-w-fit bg-[#FFED4E] h-11 float-left text-center rounded text-black font-[Manrope] text-base font-normal cursor-pointer">
                Отправить
            </button>
        </div>
    </div>
</form>
