<form action="{{ route('saveReviews', $product->id) }}" method="POST" id="reviewsForm">
    @csrf
    @if (
    $errors->any()
    && ($errors->has('nameReview') || $errors->has('numberReview') ||  $errors->has('emailReview')
    ||  $errors->has('comment') || $errors->has('advantages') || $errors->has('disadvantages')))
        <p class="hidden" id="hasErrorReviews"></p>
    @endif
    <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="reviewsBlock">
        <div class="flex flex-col ">
            <p class="my-6 font-['Manrope'] text-2xl font-normal leading-8 text-black">
                Написать отзыв
            </p>
            <div class="my-2.5 flex flex-row items-center">
                <p class="font-['Manrope'] text-base font-bold leading-5 text-black">
                    Оценка товара
                </p>
                <x-starts/>
            </div>
            <div class="flex flex-row sm:flex-col">
                <div class="flex flex-col sm:w-[74.58%] w-[23.85%] mr-[1.7%]">
                    <x-inputReviews
                        placeholder="Имя"
                        title="Введите имя на русском языке, не используя цифр"
                        type="text"
                        pattern="^[А-Яа-яЁё\s]+$"
                        name="nameReview"
                        id="nameReview"
                        value="{{ old('nameReview') }}"
                    />
                    @error('nameReview')
                    <x-validationError message="{{ $message }}"/>
                    @enderror
                </div>
                <div class="flex flex-col sm:w-[74.58%] w-[23.85%] mr-[1.7%]">
                    <x-inputReviews
                        placeholder="Телефон"
                        title="Введите номер телефона в формате 82345678899"
                        type="tel"
                        pattern="[7-9]{1}[0-9]{10}"
                        id="numberReview"
                        name="numberReview"
                        value="{{ old('numberReview') }}"
                    />
                    @error('numberReview')
                    <x-validationError message="{{ $message }}"/>
                    @enderror
                </div>
                <div class="flex flex-col sm:w-[74.58%] w-[23.85%] mr-[1.7%]">
                    <x-inputReviews
                        placeholder="Электронная почта"
                        title="Введите адрес в формате example@site.com"
                        type="email"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                        id="emailReview"
                        name="emailReview"
                        value="{{ old('emailReview') }}"
                    />
                    @error('emailReview')
                    <x-validationError message="{{ $message }}"/>
                    @enderror
                </div>
            </div>
            <x-reviewsTextArea text="Приемущества" name="advantages" id="advantages" textArea="{{ old('advantages') }}"/>
            @error('advantages')
            <x-validationError message="{{ $message }}"/>
            @enderror
            <x-reviewsTextArea text="Недостатки" name="disadvantages" id="disadvantages" textArea="{{ old('disadvantages') }}"/>
            @error('disadvantages')
            <x-validationError message="{{ $message }}"/>
            @enderror
            <x-reviewsTextArea text="Комментарий" name="comment" id="comment" textArea="{{ old('comment') }}"/>
            @error('comment')
            <x-validationError message="{{ $message }}"/>
            @enderror
            <input id="ratingInput" type="text" name="rating" class="hidden" value="5">
            <button
                id="customSaveForm"
                class="my-2.5 w-[23.75%] bg-[#FFED4E] h-11 float-left p-1 text-center rounded">
                Отправить
            </button>
        </div>
        <x-comment :reviews=$reviews/>
    </div>
</form>
