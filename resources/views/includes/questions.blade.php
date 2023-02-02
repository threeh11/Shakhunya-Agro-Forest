<form action="{{ route('saveQuestions', $product->id) }}" method="POST" enctype='multipart/form-data'>
    @csrf
    @if (
    $errors->any()
    && ($errors->has('nameQuestions') || $errors->has('numberQuestions') ||  $errors->has('emailQuestions') ||  $errors->has('textQuestions')))
        <p class="hidden" id="hasErrorQuestions"></p>
    @endif
    <div class="hidden text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="questionBlock">
        <div class="flex flex-col">
            <p class="my-6 font-['Manrope'] text-2xl font-normal leading-8 text-black">
                Задать вопрос
            </p>
            <div class="flex flex-row sm:grid">
                <div class="flex flex-col sm:w-[100%] w-[23.85%] mr-[1.7%]">
                    <x-inputQuestions
                        placeholder="Имя"
                        title="Введите имя на русском языке, не используя цифр"
                        type="text" pattern="^[А-Яа-яЁё\s]+$"
                        name='nameQuestions'>
                    </x-inputQuestions>
                    @error('nameQuestions')
                        <x-validationError message="{{ $message }}"/>
                    @enderror
                </div>
                <div class="flex flex-col sm:w-[100%] w-[23.85%] mr-[1.7%]">
                    <x-inputQuestions
                        placeholder="Телефон"
                        title="Введите номер телефона в формате 82345678899"
                        type="tel" pattern="[7-9]{1}[0-9]{10}"
                        name='numberQuestions'>
                    </x-inputQuestions>
                    @error('numberQuestions')
                        <x-validationError message="{{ $message }}"/>
                    @enderror
                </div>
                <div class="flex flex-col sm:w-[100%] w-[23.85%] mr-[1.7%]">
                    <x-inputQuestions
                        placeholder="Электронная почта"
                        title="Введите адрес в формате example@site.com"
                        type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                        name='emailQuestions'>
                    </x-inputQuestions>
                    @error('emailQuestions')
                        <x-validationError message="{{ $message }}"/>
                    @enderror
                </div>
            </div>
            <textarea
                name="textQuestions"
                class="mt-2.5 p-3 border rounded border-solid resize-none sm:w-[100%] w-[74.58%] h-32 border-[#CCCCCC]
                @if($errors->has('textQuestions')) border-red @endif">
                {{ old('textQuestions') }}
            </textarea>
            @error('textQuestions')
                    <x-validationError message="{{ $message }}"/>
            @enderror
            <button class="my-2.5 p-1 bg-[#FFED4E] w-[23.75%] sm:w-[100%] min-w-fit h-11 float-left text-center rounded">
                    Отправить
            </button>
        </div>
    </div>
</form>
