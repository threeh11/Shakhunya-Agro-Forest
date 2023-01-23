<form action="{{ route('saveQuestions', $product->id) }}" method="POST" enctype='multipart/form-data'>
    @csrf
    <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="questionBlock">
        <div class="flex flex-col">
            <p class="my-1 font-['Manrope'] text-base font-bold leading-5 text-black">
                <! -- Имя-->
                Константин
            </p>
            <p class="mt-1 font-['Manrope'] font-normal leading-4 text-xs text-gray">
                <! -- Дата-->
                09.01.2023
            </p>
            <p class="my-6 font-['Manrope'] font-normal leading-4 text-base text-black">
                <! -- Текст вопроса-->
                Добрый день, интересует прайс на всю продукцию. Условия оптовых поставок.
            </p>
        </div>
        {{ $reviews }}
        <div class="flex flex-col mt-6 border-t-2 border-t-grayUltraLight">
            <p class="my-6 font-['Manrope'] text-2xl font-normal leading-8 text-black">
                Задать вопрос
            </p>
            <div class="flex flex-row">
                <x-inputQuestions placeholder="Имя" title="Введите имя на русском языке, не используя цифр" type="text" pattern="^[А-Яа-яЁё\s]+$" name='nameQuestions'></x-inputQuestions>
                @error('nameQuestions')
                    <x-validationError message="{{ $message }}"/>
                @enderror
                <x-inputQuestions placeholder="Телефон" title="Введите номер телефона в формате 82345678899" type="tel" pattern="[7-9]{1}[0-9]{10}" name='telQuestions'></x-inputQuestions>
                @error('numberQuestions')
                    <x-validationError message="{{ $message }}"/>
                @enderror
                <x-inputQuestions placeholder="Электронная почта" title="Введите адрес в формате example@site.com" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name='emailQuestions'></x-inputQuestions>
                @error('emailQuestions')
                    <x-validationError message="{{ $message }}"/>
                @enderror
            </div>
            <textarea name="textQuestions" class="p-3 my-6 h-40 border rounded border-solid border-[#CCCCCC]"></textarea>
            @error('textQuestions')
                    <x-validationError message="{{ $message }}"/>
                @enderror
            <button class="my-2.5 w-[33%] min-w-fit h-11 float-left text-center rounded bg-accent">
                <p class="mx-2.5 my-2.5 px-2 w-[90%] text-black font-[Manrope] text-base font-normal cursor-pointer">
                    Отправить
                </p>
            </button>
        </div>
    </div>
</form>